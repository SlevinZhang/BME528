<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Admin {

	public function before()
	{
		parent::before();
		
		$study_uid = Arr::get($this->get, 'study_uid', '');
		
		$instance = $site = '';
		
		
		if ($study_uid != '' AND NULL !== $study = Mnode::read_file('exam', $study_uid))
		{
			// File is there, load the data
			//$study = Mnode::read_file('exam', array($study_uid));
			$site  = $study['site'];
		}
		else
		{
			// Site is not there. Is at the URI?
			$site	= Arr::get($this->get, 'site', Kohana::$config->load('database.default_site'));
		}

		// Create a Model
		$this->pacs = Model_PACS::instance($site);

		$this->pacs
			->sort(Arr::get($this->get, 'sort', 'Study Date'))
			->direction(Arr::get($this->get, 'direction', 'DESC'));
		
		$this->pacs->study_uid($study_uid);
		$this->template->pacs      = $this->pacs;
		$this->template->study_uid = $study_uid;
		$this->template->site      = $site;
	}
	
	public function action_patient()
	{

		$this->template->patientID  = Arr::get($this->get, 'patientID', '');
	}
	
	public function action_study()
	{
	}
	
	public function action_series()
	{
		$this->template->settings = array(
			'index'        => Arr::get($this->get, 'index', ''),
			'frames'       => Arr::get($this->get, 'frames', ''),
			'image'        => Arr::get($this->get, 'image', 0),
			'bookmark'     => Arr::get($this->get, 'bookmark', 0),
			'scale'        => Arr::get($this->get, 'scale', 0),
			'x'            => Arr::get($this->get, 'x', 0.5),
			'y'            => Arr::get($this->get, 'y', 0.5),
			'region'       => Arr::get($this->get, 'region', '0,0,1,1'),
			'WindowWidth'  => Arr::get($this->get, 'WindowWidth', 0),
			'WindowCenter' => Arr::get($this->get, 'WindowCenter', 0),
		);
	}

	
	public function action_video()
	{
		//$this->view = new View_Ajax_Series;
	}
	
	
	public function action_image()
	{
		$this->template->settings = array(
			'image'        => Arr::get($this->get, 'image', ''),
		);
	}

	public function action_attachment()
	{
		$type		 = Arr::get($this->get, 'type', '');

		$view = 'View_Ajax_'.$type;
		$this->view = new $view;
	}
	
	public function action_download()
	{
		$type = Arr::get($this->get, 'type', '');
		$src  = Arr::get($this->get, 'src', '');
		$file = Mnode::$DIR_DOC.$src;
		
		if (file_exists($file))
		{
			$this->response->send_file($file, NULL, array('inline' => TRUE));
		}
		exit;
	}
	
	// Mobile Movie
	public function action_mmovie()
	{
		$site = Arr::get($this->get, 'site', '');
		$study = Arr::get($this->get, 'study', '');
		$type = Arr::get($this->get, 'type', '');
		$index = Arr::get($this->get, 'index', '');
		$frames = Arr::get($this->get, 'frames', '');
		$device = Arr::get($this->get, 'device', '');
		
		set_time_limit(Mnode::$MAX_MOVIE_EXECUTION_TIME);
		
		if ($type == 'Movie')
		{
			$ext = Mnode::$MP4;
			$dir = Mnode::$DIR_FILES.'img-'.$study.'-'.$index.DIRECTORY_SEPARATOR;
			$dir_temp = Mnode::$DIR_TEMP.$study.'-'.$index.DIRECTORY_SEPARATOR;
			if (file_exists($dir.'video'.$ext))
			{
				echo 1;
				exit;
			}
			else
			{
				if (file_exists($dir))
				{
					// wait a few seconds for existing process to finish
					for ($i = 0; $i < 5; $i ++)
					{
						if (file_exists($dir.'video'.$ext))
						{
							echo 1;
							exit;
						}
						sleep(1);
					}
					Mnode::clear_dir($dir);
				}
				
				if ( ! file_exists($dir_temp))
				{
					mkdir($dir_temp, 0551, TRUE);
				}
					
				if (count(glob($dir_temp."*".Mnode::$JPG)) < $frames)
				{
					
				
					$images = Mnode::read_file('meta', 'img-'.$study);
					
					$crop = Mnode::crop_parameters($site.$images[$index]['REMOTE_AE']);
					
					Mnode::clear_subdir($dir_temp);
					for ($frame = 0; $frame < $frames; $frame ++)
					{
						// Generate the DCM files
						$src_file = (file_exists(Mnode::$DIR_DUMP.$study) AND filesize(Mnode::$DIR_DUMP.$study) > 0) 
							? Mnode::$DIR_DUMP.$study
							: $images[$index]['FILENAME'];
						$dcm_file = $dir_temp.sprintf('%05d', $frame).Mnode::$DCM;
						$this->pacs->extract_binary($src_file, $images[$index+$frame]['OFFSET'], $images[$index+$frame]['LENGTH'], $dcm_file);
						
						// Convert the DCM files to JPG
						$command = Mnode::$DCM_2PNM.' -q +oj '.$dcm_file.' '.$crop.' '.$dir_temp.sprintf('%05d',$frame).Mnode::$JPG;
						exec($command);
					}
				}
				
				mkdir($dir, 0551, TRUE);
				$command = Mnode::$FFMPEG.' -f image2 -i '.$dir_temp.'%05d.jpg -vcodec mpeg4 -r 34 -qmax 7 -s 480x320 '.$dir.'video'.$ext;
				exec($command);
				if (file_exists($dir.'video'.$ext))
				{
					echo 1;
					exit;
				}
				else
				{
					echo 0;
					exit;
				}
			}
		}
		else
		{
			$ext = Mnode::$MP4;
			$dir = Mnode::$DIR_FILES.'doc-'.$study.'-'.$index.DIRECTORY_SEPARATOR;
			$dir_temp = Mnode::$DIR_FILES.'img-'.$study.'-'.$index.DIRECTORY_SEPARATOR;
			if (file_exists($dir.'video'.$ext))
			{
				echo 1;
				exit;
			}
			else
			{
				if (file_exists($dir))
				{
					// wait a few seconds for existing process to finish
					for ($i = 0; $i < 10; $i ++)
					{
						if (file_exists($dir.'video'.$ext))
						{
							echo 1;
							exit;
						}
						sleep(1);
					}
					Mnode::clear_dir($dir);
				}
				
				$file = Mnode::read_file('meta', 'doc-'.$study);
				
				// Use whatever source file is available
				if (file_exists($dir_temp) && file_exists($dir_temp.'video'.substr($file[$index]['FILENAME'],-4)))
				{
					$src_file = $dir_temp.'video'.substr($file[$index]['FILENAME'],-4);
				}
				else
				{
					$src_file = $file[$index]['FILENAME'];
				}
				
				// Create mp4 file
				// The file extension ".mp4" must be included for ffmpeg to function properly
				mkdir($dir, 0551, TRUE);
				exec(Mnode::$FFMPEG.' -i '.$file[$index]['FILENAME'].' -vcodec mpeg4 -r 34 -qmax 7 -s 480x320 '.$dir.'video'.$ext);
				if (file_exists($dir.'video'.$ext))
				{
					echo 1;
					exit;
				}
				else
				{
					echo 0;
					exit;
				}
			}
		}
		
		echo -1;
		exit;
	}

	public function action_session_timeout()
	{
		$response = array();
		$response['lifetime'] = Kohana::$config->load('session.cookie.lifetime')*1000;
		$response['name']     = Kohana::$config->load('session.cookie.name');
		echo json_encode($response);
		exit;
	}

	public function after()
	{
		// Don't save ajax activity in logs.
		$this->log = '';
		
		//$this->view->pacs = $this->pacs;
		
		//$this->view->init();
		parent::after();
	}
}
