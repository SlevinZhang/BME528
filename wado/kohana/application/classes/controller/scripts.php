<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Scripts extends Controller {

	public function before()
	{
		$this->request->action(str_replace('-', '_', $this->request->action()));

		$this->study_uid = $this->request->param('id');

		$this->_study = Mnode::read_file('meta', $this->study_uid);
		
		$site = $this->_study['site'];

		$this->pacs = Model_PACS::instance($site);
		
		$this->get = $this->request->query();
	}

	public function action_prepare_dicom()
	{
		/*
		 * This page runs in the background to the wado interface
		 * It receives a studyUID and performs these actions:
		 *  generates the individual dicom files from source files
		 */
		 
		set_time_limit(Mnode::$MAX_EXECUTION_TIME);

		///////////////
		///// IMG /////
		///////////////
		$series = Arr::get($this->get, 'series', '');
		$study_uid		= $this->study_uid;
		
		$dir = Mnode::$DIR_IMG.$study_uid.DIRECTORY_SEPARATOR.$series.DIRECTORY_SEPARATOR;
		
		if ( ! file_exists($dir))
		{
			mkdir($dir, 0755, TRUE);
		}

		$images = Mnode::read_file('meta', 'img-'.$study_uid);

		if (count($images) > 0)
		{
			$total = count($images);
			for ($i = 0; $i < $total; $i++)
			{
				if ($images[$i]['SeriesInstanceUID'] != $series)
				{
					continue;
				}
				
				$src_file = $this->pacs->get_source_filename($study_uid, $images[$i]);
				$this->pacs->extract_binary($src_file, $images[$i]['OFFSET'], $images[$i]['LENGTH'], $dir.$images[$i]['SOPInstanceUID'].Mnode::$DCM);
			}
		}
	}

	public function action_cache_image()
	{
		/*
		 * This page runs in the background to the wado interface
		 * It receives a studyUID and performs these actions:
		 *  creates a cache copy of a wado image
		 */
		 
		set_time_limit(Mnode::$MAX_EXECUTION_TIME);

		$get = array();
		$options = CLI::options('qs');
		$qs = str_replace('==', '&', $options['qs']);
		parse_str($qs, $get);
		$query = Arr::get($get, 'query', '');
		
		if ($query == '')
			return false;
		$temp_file = Mnode::$DIR_TEMP.$query;

		///////////////
		///// IMG /////
		///////////////
		$wado = new Wado();
		$wado->query = $query;
		$wado->get = $get;
		$wado->temp_file = $temp_file;
		echo $temp_file;
		$wado->execute();
		$wado->cache();
	}

	public function action_prepare_images()
	{
		/*
		 * This page runs in the background to the wado interface
		 * It receives a studyUID and performs these actions:
		 *  copies the source files
		 * prepares the video frames as jpg files
		 */
		 
		set_time_limit(Mnode::$MAX_EXECUTION_TIME);

		///////////////
		///// IMG /////
		///////////////
		$study_uid  = $this->study_uid;
		
		//$images = Mnode::read_file('meta', 'img-'.$study_uid);
		if (NULL === $images = Mnode::read_file('meta', 'img-'.$study_uid))
		{
			// Grab fresh data
			$images = $this->pacs->_images();

			// Saving the results into the cache
			Mnode::write_file('meta', 'img-'.$study_uid, $images);
		}

		$images = array_values($images);

		// Go through all the images to determine the video clip frames
		$cid = 0;
		$clip = -1;
		$clips = array();
		$files = array();
		
		if (count($images))
		{
			foreach ($images as $index => $image)
			{
				if ($image['SOPInstanceUID'] == '10' || $image['SOPInstanceUID'] == '16') // This image is a video clip frame
				{
					if ($image['CID'] != $cid) // This image is the first frame of the video clip
					{
						$clip++;
					}
					$clips[$clip][] = $index;
				}
				$files[] = $image['FILENAME'];
				$cid = $image['CID'];
			}

			// Copy image source files but not in the background
			foreach (array_unique($files) as $file) 
			{
				if ( ! file_exists(Mnode::$DIR_DUMP.$study_uid))
				{
					//file_put_contents(Mnode::$LOG, date('Y-m-d G:i:s').'copy_over_network '.$file);
					Mnode::copy_over_network($file, Mnode::$DIR_DUMP.$study_uid);
				}
			}

			foreach ($clips as $clip)
			{
				// Create a folder for the detected video clip
				$dir = Mnode::$DIR_TEMP.$study_uid.'-'.$clip[0].DIRECTORY_SEPARATOR;
				if ( ! file_exists($dir))
				{
					mkdir($dir);
					$exam = Mnode::read_file('exam', $study_uid);
					//clearFiles($dir);
					// Modifies the crop parameters based on scanner
					// "+C <left> <top> <width> <height>"
					$crop = Mnode::crop_parameters($exam->site.$images[$clip[0]]['REMOTE_AE']);
		
					if (count(glob($dir.'*'.Mnode::$DCM)) < count($clip))
					{
						foreach ($clip as $frame => $index)
						{
							// Generate the DCM files
							$src_file = $this->pacs->get_source_filename($study_uid, $images[$index]);
							//file_exists(Mnode::$DIR_DUMP.$study_uid) && filesize(Mnode::$DIR_DUMP.$study_uid) > $images[$index]['OFFSET']) ? Mnode::$DIR_DUMP.$study_uid : $images[$index]['FILENAME'];
							$dcm_file = $dir.sprintf('%05d', $frame).Mnode::$DCM;
							$this->pacs->extract_binary($src_file, $images[$index]['OFFSET'], $images[$index]['LENGTH'], $dcm_file);
							
							// Convert the DCM files to JPG
							$command = Mnode::$DCM_2PNM.' +oj '.$dcm_file.' '.$crop.' '.$dir.sprintf('%05d',$frame).Mnode::$JPG;
							Mnode::execute_command($command);
						}
					}
					//executeCommand("del /Q ".$dir."*".DCM); //JPG are still being created from the DCM in the background
				}
			}
		}
	}

	public function action_prepare_documents()
	{
		/*
		 * This page runs in the background to the wado interface
		 * It receives a studyUID and performs these actions:
		 * converts any attached videos and moves them to the movie folder when completed
		 * downloads the report
		 */
		set_time_limit(Mnode::$MAX_EXECUTION_TIME * 5);

		$study_uid = $this->study_uid;
		$documents  = Mnode::read_file('meta', 'doc-'.$study_uid);

		foreach ($documents as $index => $document)
		{
			if (strtolower(substr($document['FILENAME'], -4)) == '.txt') // This file is a report
			{
				if ( ! file_exists(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
				{
					mkdir(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR);
					Mnode::copy_over_network($document['FILENAME'], Mnode::$DIR_DOC.$study_uid."-".$index.DIRECTORY_SEPARATOR."report".Mnode::$TXT);
				}
			}
			else if (strtolower(substr($document['FILENAME'], -5)) == '.tiff') // This file is a scanned file
			{
				if ( ! file_exists(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
				{
					mkdir(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR);
					Mnode::copy_over_network($document['FILENAME'], Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'scan'.Mnode::$TIF);
				}
			}
			else if (strtolower(substr($document['FILENAME'], -4)) == '.pdf') // This file is a scanned file
			{
				if ( ! file_exists(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
				{
					mkdir(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR);
					Mnode::copy_over_network($document['FILENAME'], Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'scan'.Mnode::$PDF);
				}
			}
			else if (strtolower(substr($document['FILENAME'], -4)) == '.jpg') // This file is a scanned file
			{
				if ( ! file_exists(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
				{
					mkdir(Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR);
					Mnode::copy_over_network($document['FILENAME'], Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'scan'.Mnode::$JPG);
				}
			}
			else if (strtolower(substr($document['FILENAME'], -4)) == '.wmv') // This file is a video
			{
				$dir = Mnode::$DIR_DOC.$study_uid.'-'.$index.DIRECTORY_SEPARATOR;
				$name = substr(strrchr($document['FILENAME'],'\\'),1);

				if ( ! file_exists($dir))
				{
					mkdir($dir);
				}
				
				// Create mp4 file
				if ( ! file_exists(Mnode::$DIR_DOC.'img-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
				{
					// The file extension ".mp4" must be included for ffmpeg to function properly
					Mnode::copy_over_network($document['FILENAME'], Mnode::$DIR_FILES.'img-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'video.wmv');
					
					if ( ! file_exists(Mnode::$DIR_FILES.'img-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR))
					{
						mkdir(Mnode::$DIR_FILES.'img-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR);
					}
					exec(Mnode::$FFMPEG.' -i '.$document['FILENAME'].' -vcodec mpeg4 -r 34 -qmax 7 -s 480x320 '.$dir.'video'.Mnode::$MP4);
					copy($dir.'video'.Mnode::$MP4, Mnode::$DIR_FILES.'img-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'video'.Mnode::$MP4);
					
					exec(Mnode::$FFMPEG.' -i '.$document['FILENAME'].' '.$dir.'img%d.jpg');
				}

				// Copy original wmv file if not exists
				if ( ! file_exists($dir.$name))
				{
					Mnode::copy_over_network($document['FILENAME'], $dir.'video.wmv');
				}
			}
		}
	}
	
	public function after()
	{
	}

} // End Scripts
