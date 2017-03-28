<?php defined('SYSPATH') or die('No direct script access.');

class Mnode_Core {

	// Release version and codename
	const VERSION  = '1.0.0';
	const CODENAME = 'Andromeda';

	/**
	 * @var  boolean  Has [Mcore::init] been called?
	 */
	protected static $_init = FALSE;

	/**
	 * @var  array   The configuration for the node
	 */
	protected static $_config = FALSE;

	// From Config
	public static $DIR_BASE;
	public static $DIR_WWW;
	public static $DIR_DATA;
	
	public static $INSTANCE_NAME;

	public static $DIR_PHP;
	public static $DIR_DCMTK;
	public static $DIR_MAGICK;
	public static $DIR_FFMPEG;

	public static $CMD_COPY;
	public static $TRAILING_CMD;

	public static $MAX_EXECUTION_TIME;
	public static $MAX_MOVIE_EXECUTION_TIME;
	
	public static $DCM;
	public static $PNG;
	public static $TIF;
	public static $PDF;
	public static $JPG;
	public static $MP4;
	public static $TXT;
	public static $EXE;
	
	// Defined locally
	public static $DIR_META;
	public static $DIR_IMG;
	public static $DIR_DOC;
	public static $DIR_PID;
	public static $DIR_DUMP;
	public static $DIR_INFO;
	public static $DIR_EXAM;
	public static $DIR_TEMP;
	public static $DIR_LOG;

	public static $DIR_FILES;
	public static $DIR_MOUNTS;

	public static $DCM_DUMP;
	public static $DCM_2PNM;
	public static $DSR_2HTM;
	public static $DCM_SEND;

	public static $FFMPEG;
	public static $MAGICK;
	public static $PHP;

	public static $KOHANA_CLI;
	
	public static $DB;
	public static $LOG;
	public static $DIR_REPORT;
	public static $CONNECTION;
	
	public static $cache;
	public static $dirs;
	
	public static $apc_instance;

	/**
	 * Initializes the environment:
	 *
	 * - Sets variables
	 *
	 * @throws  Mnode_Exception
	 * @return  void
	 */
	public static function init()
	{
		if (Mnode::$_init)
		{
			// Do not allow execution twice
			return;
		}

		// Mnode is now initialized
		Mnode::$_init = TRUE;

		$os = (KOHANA::$is_windows) ? 'win' : 'linux';
		Mnode::$_config = Kohana::$config->load('mnode_'.$os);
		
		$options = array('DIR_BASE', 'DIR_WWW', 'DIR_DATA',
						 'INSTANCE_NAME',
						 'DIR_PHP', 'DIR_DCMTK', 'DIR_FFMPEG', 'DIR_MAGICK',
						 'CMD_COPY', 'TRAILING_CMD',
						 'MAX_EXECUTION_TIME', 'MAX_MOVIE_EXECUTION_TIME',
						 'DCM', 'PNG', 'TIF', 'PDF', 'JPG', 'MP4', 'TXT', 'EXE');

		foreach ($options as $option)
		{
			$value = Mnode::$_config[$option];

			Mnode::$$option = $value;
		}
		
		Mnode::$DIR_META = Mnode::$DIR_DATA.'.meta'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['meta'] = Mnode::$DIR_META;
		Mnode::$DIR_IMG  = Mnode::$DIR_DATA.'.images'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['img'] = Mnode::$DIR_IMG;
		Mnode::$DIR_DOC  = Mnode::$DIR_DATA.'.documents'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['doc'] = Mnode::$DIR_DOC;
		Mnode::$DIR_PID  = Mnode::$DIR_DATA.'.patients'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['pid'] = Mnode::$DIR_PID;
		Mnode::$DIR_DUMP = Mnode::$DIR_DATA.'.dump'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['dump'] = Mnode::$DIR_DUMP;
		Mnode::$DIR_INFO = Mnode::$DIR_DATA.'.info'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['info'] = Mnode::$DIR_INFO;
		Mnode::$DIR_EXAM = Mnode::$DIR_DATA.'.exam'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['exam'] = Mnode::$DIR_EXAM;
		Mnode::$DIR_TEMP = Mnode::$DIR_DATA.'.temp'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['temp'] = Mnode::$DIR_TEMP;
		Mnode::$DIR_LOG  = Mnode::$DIR_DATA.'.log'.DIRECTORY_SEPARATOR;
		Mnode::$dirs['log'] = Mnode::$DIR_LOG;

		$dirs = array('DIR_META', 'DIR_IMG', 'DIR_DOC', 'DIR_PID', 'DIR_DUMP', 'DIR_INFO', 'DIR_EXAM', 'DIR_TEMP', 'DIR_LOG');
		
		// Initializa dirs if not done
		foreach ($dirs as $dir)
		{
			if ( ! file_exists(Mnode::$$dir))
			{
				mkdir(Mnode::$$dir, 0775, TRUE);
			}
		}
		
		Mnode::$DIR_FILES  = Mnode::$DIR_WWW.'files'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_MOUNTS = Mnode::$DIR_BASE.'mounts'.DIRECTORY_SEPARATOR;

		Mnode::$DCM_DUMP   = Mnode::$DIR_DCMTK.'dcmdump';
		Mnode::$DCM_2PNM   = Mnode::$DIR_DCMTK.'dcmj2pnm';
		Mnode::$DSR_2HTM   = Mnode::$DIR_DCMTK.'dsr2html';
		Mnode::$DCM_SEND   = Mnode::$DIR_DCMTK.'storescu';
		
		Mnode::$FFMPEG     = Mnode::$DIR_FFMPEG.'ffmpeg'.Mnode::$EXE;
		Mnode::$MAGICK     = Mnode::$DIR_MAGICK.'imagick'.Mnode::$EXE;
		Mnode::$PHP        = Mnode::$DIR_PHP.'php'.Mnode::$EXE;

		Mnode::$KOHANA_CLI = Mnode::$PHP.' '.Mnode::$DIR_WWW.'index.'.Mnode::$INSTANCE_NAME.'.php';
		
		Mnode::$DB         = Mnode::$DIR_LOG.'worklist.sqlite';
		Mnode::$LOG        = Mnode::$DIR_LOG.Mnode::$INSTANCE_NAME.'.'.date('Ymd').'.log';

		Mnode::$CONNECTION = (isset($_SERVER['SERVER_NAME']) AND strpos($_SERVER['SERVER_NAME'], Mnode::$_config['cookie_domain']) === FALSE) 
							  ? 'local' : 'public';
		
		Cookie::$salt = Mnode::$_config['cookie_salt'];
		
		if (Mnode::$CONNECTION == 'public')
		{
			// Set cookie domain if only in public
			Cookie::$domain = Mnode::$_config['cookie_domain'];
		}
		
		Mnode::$apc_instance = Cache::instance('apc');
	}

	public static function is_local()
	{
		return (Mnode::$CONNECTION == 'local')  ? TRUE : FALSE;
	}
	
	public static function get_domain()
	{
		return (Mnode::$CONNECTION == 'local')  ? '' : Mnode::$_config['cookie_domain'];
	}
	
	/**
	 * Executes a command in the background
	 *
	 * @param   string  command line string to run
	 *
	 * @throws  Mnode_Exception
	 * @return  void
	 */
	public static function execute_command($cmd)
	{
		if (KOHANA::$is_windows)
		{
			//pclose(popen("start /B ".$cmd, "r"));
			$shell = new COM('WScript.Shell');
			$result = $shell->Run($cmd, 7, FALSE);
		}
		else
		{
			exec($cmd.' > /dev/null &');
		}
	}

	public static function fresh($file)
	{
		if (file_exists($file))
		{
			unlink($file);
		}
		touch($file);
	}

	public static function user_agent($value = NULL)
	{
		if ($value === NULL)
		{
			$value = array('browser', 'version', 'robot', 'mobile', 'platform');
		}
		
		$results = Request::user_agent($value);
		
		foreach ($results as $index => $value)
		{
			if ($value == '')
			{
				unset($results[$index]);
			}
		}
		
		return $results;
	}
	
	public static function read_file($type, $key)
	{
		$key = $type.'.'.$key;
		// Get data from file if not loaded
		if ( ! isset(Mnode::$cache[$key]))
		{
			Mnode::$cache[$key] = Mnode::$apc_instance->get($key);
		}
		
		// Return cached data
		return Mnode::$cache[$key];
	}
	
	public static function write_file($type, $key, $data)
	{
		$key = $type.'.'.$key;
		Mnode::$apc_instance->set($key, $data);
		// Save the data to local cache
		Mnode::$cache[$key] = $data;
	}

	public static function _read_file($type, $key)
	{
		$dir = Mnode::$dirs[$type];
		$file = $dir.$key.Mnode::$TXT;
		
		// Get data from file if not loaded
		if ( ! isset(Mnode::$cache[$file]))
		{
			$data = (file_exists($file)) ? json_decode(file_get_contents($file), TRUE) : NULL;
			Mnode::$cache[$file] = $data;
		}
		
		// Return cached data
		return Mnode::$cache[$file];
	}
	
	public static function _write_file($type, $key, $data)
	{
		// Write data to file
		$dir  = Mnode::$dirs[$type];
		$file = $dir.$key.Mnode::$TXT;
		
		// Data is saved in json format
		$data = json_encode($data);
		
		file_put_contents($file, $data);
		// Save the data to local cache
		Mnode::$cache[$file] = $data;
	}

	public static function get_info($key)
	{
		// Get the value from APC cache
		return Mnode::$apc_instance->get($key);
	}
	
	public static function set_info($key, $data)
	{
		// Set the value to APC cache
		Mnode::$apc_instance->set($key, $data);
	}
	
	public static function log($data = '')
	{
		file_put_contents(Mnode::$LOG, date('Y-m-d G:i:s').' | '.Request::$client_ip.' | '.Authen::instance()->get_user()->username.' | '.implode('-', Mnode::user_agent()).' | '.$data."\r\n", FILE_APPEND);
	}

	public static function copy_over_network($file, $dest)
	{
		if ( ! file_exists($dest))
		{
			$dir = dirname($dest);
			if ( ! file_exists($dir))
			{
				mkdir($dir, 0551, TRUE);
			}
			//Kohana::$log->add(Log::ERROR, $dest.' '.$dir.' '.$file);
			$file = Mnode::get_file_share($file);
			//Kohana::$log->add(Log::ERROR, 'FILE '.$file);
			copy($file, $dest.".part");
			rename($dest.".part", $dest);
		}
	}

	public static function get_file_share($file)
	{
		if (KOHANA::$is_windows)
		{
			return $file;
		}
		else
		{
			if (substr($file, 0, 2) == '\\\\')
			{
				$file = str_replace('$', '', $file);
				$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
				$file = preg_replace('/\/\/+/', '/', $file);
				$file = Mnode::$DIR_MOUNTS.$file;
			}
			return $file;
		}
	}

	public static function update_axis($directory)
	{
		$files = new DirectoryIterator($directory);
		foreach ($files as $file)
		{
			//echo 'Processing '.$directory.DIRECTORY_SEPARATOR.$file->getFilename()."\n";
			if ($file->isDot())
				continue;
				
			if ($file->isFile())
			{
				// It is a file
				$image_id = $file->getFilename();
				$dicom = Nanodicom::factory($directory.DIRECTORY_SEPARATOR.$file->getFilename(), 'getter');
				// Parse the file (by default loads dictionaries)
				$dicom->parse();
				
				if ( ! $dicom->is_dicom())
				{
					// It is not DICOM (not even partial DICOM)
					continue;
				}

				$image = Automodeler::factory('Image')->load(db::select()->where('id', '=', $image_id));
				
				if ($image->loaded())
				{
					//$image->set_dicom_fields($dicom);
					$image->dcm_ImageNumber = (int) $dicom->get(0x0020, 0x0013, 0);
					/*
					$modality    = $dicom->get(0x0008, 0x0060, 'UN');
					if ($modality == 'CT' OR $modality == 'MR')
					{
						$image->set_dicom_fields($dicom);
						$orientation = $dicom->get_orientation_label();
						if ( ! in_array($orientation, array(NULL, Nanodicom::OBLIQUE)))
						{
							// Orientation was found
							$image_position_patient = $dicom->get(0x0020, 0x0032, NULL);
							
							if ($image_position_patient !== NULL)
							{
								// Axis
								$axis = explode('\\', $image_position_patient);

								switch ($orientation)
								{
									case Nanodicom::AXIAL:
										$image->axis_order = $axis[2];
									break;
									case Nanodicom::SAGITTAL:
										$image->axis_order = $axis[0];
									break;
									case Nanodicom::CORONAL:
										$image->axis_order = $axis[1];
									break;
								}
								echo "Mod: ".$modality;
								echo " Axis: ".$image_id." ".$orientation." ".$image_position_patient." ".$image->axis_order."\n";
							}
						}
					}
					else
					{
						$image->axis_order = 1;
					}*/
					
					try
					{
						$image->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
				}

				unset($image, $dicom);
			}
			
			if ($file->isDir())
			{
				self::update_axis($directory.DIRECTORY_SEPARATOR.$file->getFilename());
			}
		}

		//echo 'done';
	}

	public static function parse_directory($directory)
	{
		$dicom_path = APPPATH.'data'.DIRECTORY_SEPARATOR.'DICOM'.DIRECTORY_SEPARATOR;
		$filenames = array();
		$files = new DirectoryIterator($directory);
		$count = 0;
		foreach ($files as $file)
		{
			echo 'Processing '.$directory.DIRECTORY_SEPARATOR.$file->getFilename()."\n";
			if ($file->isDot())
				continue;
				
			if ($file->isFile())
			{
				// It is a file
				$dicom = Nanodicom::factory($directory.DIRECTORY_SEPARATOR.$file->getFilename(), 'getter');
				// Parse the file (by default loads dictionaries)
				$dicom->parse();
				
				if ( ! $dicom->is_dicom())
				{
					unlink($directory.DIRECTORY_SEPARATOR.$file->getFilename());
					// It is not DICOM (not even partial DICOM)
					continue;
				}

				$patientid = Automodeler::factory('PatientID')->load(db::select()->where('dcm_PatientID', '=', trim($dicom->PatientID)));
				
				if ($patientid->loaded())
				{
					// PatientID exists
					$patient = new Model_Patient($patientid->patient_id);
				}
				else
				{
					$patient = New Model_Patient;
					$patient->name = trim($dicom->PatientName);
					$patient->birth_date = $dicom->PatientBirthDate;
					$patient->gender = trim($dicom->patientSex);
					try
					{
						$patient->save();
					}
					catch (Automodeler_Exception $e)
					{
						echo $dicom->extend('dumper')->dump();
						var_dump($e);
						exit;
					}
					
					$patientid->patient_id = $patient->id;
					$patientid->set_dicom_fields($dicom);
					try
					{
						$patientid->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
				}
				
				$study = Automodeler::factory('Study')->load(db::select()->where('dcm_StudyInstanceUID', '=', trim($dicom->StudyInstanceUID)));
				
				if ( ! $study->loaded())
				{
					$study->patientID_id = $patientid->id;
					$study->set_dicom_fields($dicom);
					try
					{
						$study->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
				}
				
				$series = Automodeler::factory('Series')->load(db::select()->where('dcm_SeriesInstanceUID', '=', trim($dicom->SeriesInstanceUID)));
				
				if ( ! $series->loaded())
				{
					$series->study_id = $study->id;
					$series->set_dicom_fields($dicom);
					try
					{
						$series->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}

					$study->total_series++;
					$study->save();
				}

				$image = Automodeler::factory('Image')->load(db::select()->where('dcm_SOPInstanceUID', '=', trim($dicom->SOPInstanceUID)));
				
				if ( ! $image->loaded())
				{
					$image->series_id = $series->id;
					$image->set_dicom_fields($dicom);
					try
					{
						$image->save();
						
						$frame = new Model_Frame;
						$frame->image_id = $image->id;
						$frame->set_dicom_fields($dicom);
						$frame->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
					
					$series->total_images++;
					$series->save();
				}
				
				$moving_path = $dicom_path.$patient->id.DIRECTORY_SEPARATOR.$study->id
					.DIRECTORY_SEPARATOR.$series->id.DIRECTORY_SEPARATOR;
					
				if ( ! file_exists($moving_path))
				{
					self::mkdir($moving_path, 0551);
					//mkdir($moving_path, 0551, TRUE);
					//chmod($moving_path, 0551);
				}
				
				if ( ! file_exists($moving_path.$image->id))
				{
					//copy($directory.DIRECTORY_SEPARATOR.$file->getFilename(), $moving_path.$image->id);
					rename($directory.DIRECTORY_SEPARATOR.$file->getFilename(), $moving_path.$image->id.'.dcm');
				}
				
				//unlink($directory.DIRECTORY_SEPARATOR.$file->getFilename());

				unset($image, $series, $study, $patientid, $dicom);
				$count++;
				//$filenames[] = $file->getFilename();
			}
			
			if ($file->isDir())
			{
				//$filenames = array_merge($filenames, self::parse_directory($directory.DIRECTORY_SEPARATOR.$file->getFilename()));
				self::parse_directory($directory.DIRECTORY_SEPARATOR.$file->getFilename());
				rmdir($directory.DIRECTORY_SEPARATOR.$file->getFilename());
			}
		}
		
		//return $filenames;
	}
	
	/**
	 * Creates a directory or series of directories.
	 *
	 * Any directory that currently doesn't exist will be created. Upon completion it will fix the
	 * permissions so that it's writable by everyone (appropriate for development,) the mode can
	 * be overridden.
	 *
	 * @param  string  $dir
	 * @param  string  $mode
	 */
	public static function mkdir($dir, $mode = NULL)
	{
		system(sprintf('mkdir -p %s', escapeshellarg($dir)));
		self::fix_permissions($dir, $mode);
	}

	/**
	 * Changes the permissions of a directory.
	 *
	 * Note: this function is recursive, so all of the folders and files underneath the target
	 * directory will also receive the same permissions. The default behaviour is to 777 the whole
	 * thing, makes it easier to develop locally.
	 *
	 * @param  string  $dir
	 * @param  string  $mode
	 */
	public static function fix_permissions($dir, $mode = NULL)
	{
		if ( ! $mode)
		{
			// Default the mode to rxw by everyone
			$mode = '0777';
		}

		system(sprintf('chmod -R %s %s', escapeshellarg($mode), escapeshellarg($dir)));
	}
	
	public static function collect_info($dcm_file, $key, $dicom_info = FALSE, $window_level = FALSE, $pixel_range = FALSE)
	{
		$height = $width = $window_center = $window_width = $min_pixel = $max_pixel = $row_spacing = $col_spacing = NULL;
		
		if (NULL !== $data = Mnode::get_info($key))
		{
			extract($data);
		}
		
		// The image has two types of info
		// (1) dicom header info - extracted using nanodicom
		// (2) pixel data  - extracted by reading all the pixels with dcmj2pnm (takes more time)
		// Reading all the pixel data is more time consuming. The dicom header info is usually sufficient
		// unless there is no dicom tag for window level and width and the wado request specifies only one windowing variable 
		// but not the other
		
		if ($height === NULL OR $width === NULL)
		{
			// Getting all information from dicom header
			require_once(Kohana::find_file('vendor', 'nanodicom/nanodicom'));
			$dicom = Nanodicom::factory($dcm_file);
			$dicom->parse(array(array(0x0028, 0x0010), array(0x0028, 0x0011), array(0x0028, 0x0030), array(0x0028, 0x1050), array(0x0028, 0x1051)));
			$height        = ($dicom->get(0x0028, 0x0010) === NULL) ? NULL : (int) $dicom->get(0x0028, 0x0010);
			$width         = ($dicom->get(0x0028, 0x0011) === NULL) ? NULL : (int) $dicom->get(0x0028, 0x0011);
			$window_center = ($dicom->get(0x0028, 0x1050) === NULL) ? NULL : (int) $dicom->get(0x0028, 0x1050);
			$window_width  = ($dicom->get(0x0028, 0x1051) === NULL) ? NULL : (int) $dicom->get(0x0028, 0x1051);
			/*
			The first value is the row spacing in mm, that is the spacing between the centers of adjacent rows, or vertical spacing.
			The second value is the column spacing in mm, that is the spacing between the centers of adjacent columns, or horizontal spacing.
			*/
			$pixel_spacing = $dicom->get(0x0028, 0x0030, NULL);
			if ($pixel_spacing !== NULL)
			{
				$pixel_spacing = explode('\\', $pixel_spacing);
				$row_spacing = (float) $pixel_spacing[0];
				$col_spacing = (float) $pixel_spacing[1];
			}
		}
	
	if (($window_level AND ($window_width === NULL OR $window_center === NULL))
			OR ($pixel_range AND ($min_pixel === NULL OR $max_pixel === NULL)))
		{
			// Use dcmj2pnm to get the pixel min & max values to calculate the windowCenter and windowWidth
			//exec(Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $pixel_data);
			exec(Mnode::$DCM_2PNM.' -v -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $pixel_data);
			Mnode::Log(Mnode::$DCM_2PNM.' -v -o -im '.$dcm_file.Mnode::$TRAILING_CMD);
			$size = count($pixel_data);
			//var_dump($size, $pixel_data);
			if ($size < 16)
			{
				echo 'extract_info() failed with command:<br>'.PHP_EOL.Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD.'<br><br>';
				exec(Mnode::$DCM_2PNM.' -v -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $error);
				//var_dump($error);
				echo implode('<br>', $error);
				exit;
			}
			//list($width, $height) = explode(' x ', trim(substr($pixel_data[5], strpos($pixel_data[5], ':')+1)));
			// EQUATION: windowWidth = max pixel value - min pixel value
			// EQUATION: windowCenter = (max pixel value + min pixel value) / 2
			//var_dump($pixelMin, $pixelMax);
			foreach ($pixel_data as $entry)
			{
				if (strpos($entry, 'minimum pixel value') !== FALSE)
				{
					$min_pixel = (int) substr($entry, strrpos($entry, ':') + 1);
				}
				if (strpos($entry, 'maximum pixel value') !== FALSE)
				{
					$max_pixel = (int) substr($entry, strrpos($entry, ':') + 1);
				}
			}
			//var_dump($pixelMin, $pixelMax, $windowWidth, $windowCenter);
			if ($window_width === NULL OR $window_center === NULL)
			{
				$window_width = $max_pixel - $min_pixel;
				$window_center = ($max_pixel + $min_pixel) / 2;
			}
		}
		
		$data = array(
			'width'         => $width,
			'height'        => $height,
			'window_width'  => $window_width,
			'window_center' => $window_center,
			'min_pixel'     => $min_pixel,
			'max_pixel'     => $max_pixel,
			'row_spacing'   => $row_spacing,
			'col_spacing'   => $col_spacing,
		);
		
		Mnode::set_info($key, $data);
		return $data;
	}

	public static function crop_parameters($source)
	{
		switch($source)
		{
			case 'HCC1000017':
			case 'HCC1000065':
				return '+C 105 70 605 400';
				break;
			case 'HCC1000012':
				return '+C 40 30 600 400';
				break;
			case 'HCC1000028':
				return '+C 0 100 640 360';
				break;
			default:
				return '';
				break;
		}
	}

	public static function array_sort($array, $on, $order=SORT_DESC)
	{
		$new_array = array();
		$sortable_array = array();

		if (count($array) > 0) {
			foreach ($array as $k => $v) {
				if (is_array($v)) {
					foreach ($v as $k2 => $v2) {
						if ($k2 == $on) {
							$sortable_array[$k] = $v2;
						}
					}
				} else {
					$sortable_array[$k] = $v;
				}
			}

			switch ($order) {
				case SORT_ASC:
					asort($sortable_array);
				break;
				case SORT_DESC:
					arsort($sortable_array);
				break;
			}

			foreach ($sortable_array as $k => $v) {
				$new_array[$k] = $array[$k];
			}
		}

		return $new_array;
	}

	// Please notice that this is WINDOWS ONLY!
	public static function clear_dir($dir)
	{
		$cmd = 'rd /Q /S '.$dir;
		exec($cmd);
	}

	// Please notice that this is WINDOWS ONLY!
	public static function clear_subdir($dir)
	{
		$cmd = 'rd /Q /S '.$dir;
		exec($cmd);
		$cmd = "md ".$dir;
		exec($cmd);
	}
	
	// Please notice that this is WINDOWS ONLY!
	/****** NOT USED *********/
	public static function clear_files($dir)
	{
		$cmd = 'del /Q '.$dir.'*';
		exec($cmd);
	}

} // End Mnode_Core	