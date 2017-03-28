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

	public static $FFMPEG;
	public static $MAGICK;
	public static $PHP;

	public static $KOHANA_CLI;
	
	public static $DB;
	public static $LOG;
	public static $DIR_REPORT;
	public static $CONNECTION;

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
		Mnode::$_config = Kohana::config('mnode_'.$os);
		
		$options = array('DIR_BASE', 'DIR_WWW', 'DIR_DATA',
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
		Mnode::$DIR_IMG  = Mnode::$DIR_DATA.'.images'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_DOC  = Mnode::$DIR_DATA.'.documents'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_PID  = Mnode::$DIR_DATA.'.patients'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_DUMP = Mnode::$DIR_DATA.'.dump'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_INFO = Mnode::$DIR_DATA.'.info'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_EXAM = Mnode::$DIR_DATA.'.exam'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_TEMP = Mnode::$DIR_DATA.'.temp'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_LOG  = Mnode::$DIR_DATA.'.log'.DIRECTORY_SEPARATOR;

		$dirs = array('DIR_META', 'DIR_IMG', 'DIR_DOC', 'DIR_PID', 'DIR_DUMP', 'DIR_INFO', 'DIR_EXAM', 'DIR_TEMP', 'DIR_LOG');
		
		// Initializa dirs if not done
		foreach ($dirs as $dir)
		{
			if ( ! file_exists(Mnode::$$dir))
			{
				mkdir(Mnode::$$dir, 0755, TRUE);
			}
		}
		
		Mnode::$DIR_FILES  = Mnode::$DIR_WWW.'files'.DIRECTORY_SEPARATOR;
		Mnode::$DIR_MOUNTS = Mnode::$DIR_BASE.'mounts'.DIRECTORY_SEPARATOR;

		Mnode::$DCM_DUMP   = Mnode::$DIR_DCMTK.'dcmdump';
		Mnode::$DCM_2PNM   = Mnode::$DIR_DCMTK.'dcmj2pnm';
		Mnode::$DSR_2HTM   = Mnode::$DIR_DCMTK.'dsr2html';
		
		Mnode::$FFMPEG     = Mnode::$DIR_FFMPEG.'ffmpeg'.Mnode::$EXE;
		Mnode::$MAGICK     = Mnode::$DIR_MAGICK.'imagick'.Mnode::$EXE;
		Mnode::$PHP        = Mnode::$DIR_PHP.'php'.Mnode::$EXE;

		Mnode::$KOHANA_CLI = Mnode::$PHP.' '.Mnode::$DIR_WWW.'index.php';
		
		Mnode::$DB         = Mnode::$DIR_LOG.'worklist.sqlite';
		Mnode::$LOG        = Mnode::$DIR_LOG.'access.log';

		Mnode::$CONNECTION = (isset($_SERVER['SERVER_NAME']) AND strpos($_SERVER['SERVER_NAME'], Mnode::$_config['cookie_domain']) === FALSE) 
							  ? 'local' : 'public';
		
		Cookie::$salt = Mnode::$_config['cookie_salt'];
		
		if (Mnode::$CONNECTION == 'public')
		{
			// Set cookie domain if only in public
			Cookie::$domain = Mnode::$_config['cookie_domain'];
		}
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
	
	public static function log($data = '')
	{
		file_put_contents(Mnode::$LOG, date('Y-m-d G:i:s').' | '.Request::$client_ip.' | '.Auth::instance()->get_user().' | '.implode('-', Mnode::user_agent()).' | '.$data."\r\n", FILE_APPEND);
	}

	public static function copy_over_network($file, $dest)
	{
		if ( ! file_exists($dest))
		{
			$dir = dirname($dest);
			if ( ! file_exists($dir))
			{
				mkdir($dir, 0775, TRUE);
			}
			//Kohana::$log->add(Log::ERROR, $dest.' '.$dir.' '.$file);
			$file = Mnode::get_file_share($file);
			//Kohana::$log->add(Log::ERROR, 'FILE '.$file);
			copy($file, $dest);
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

	/*public static function extract_info($dcm_file, $info_file, $modality = '')
	{
		
		if (file_exists($info_file))
		{
			return file_get_contents($info_file);
		}
		else
		{
			$dcm_file = Mnode::get_file_share($dcm_file);
			
			// Add Nanodicom library
			require_once(Kohana::find_file('vendor', 'nanodicom/nanodicom'));
			
			$dicom = Nanodicom::factory($dcm_file);
			$dicom->parse(array(array(0x0028, 0x0010), array(0x0028, 0x0011), array(0x0028, 0x1050), array(0x0028, 0x1051)));
		
			$window_center = ((int) $dicom->value(0x0028,0x1050) == 0) ? '' : (int) $dicom->value(0x0028,0x1050);
			$window_width  = ((int) $dicom->value(0x0028,0x1051) == 0) ? '' : (int) $dicom->value(0x0028,0x1051);
			$height = ((int) $dicom->value(0x0028,0x0010) == 0) ? '' : (int) $dicom->value(0x0028,0x0010);
			$width  = ((int) $dicom->value(0x0028,0x0011) == 0) ? '' : (int) $dicom->value(0x0028,0x0011);

			file_put_contents($info_file, $width.",".$height.",".$window_center.",".$window_width);
			return $width.','.$height.','.$window_center.','.$window_width;
		}
	}*/

	
	public static function extract_info($dcm_file, $info_file, $modality = '')
	{
		if (file_exists($info_file))
		{
			return file_get_contents($info_file);
		}
		else
		{
			exec(Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $img_data);
			//var_dump($img_data);
			if (count($img_data) == 0)
			{
				echo 'extract_info() failed with command:<br>'.PHP_EOL.Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD.'<br><br>';
				exec(Mnode::$DCM_2PNM.' -v -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $error);
				echo implode('<br>', $error);
				exit;
			}
			list($width, $height) = explode(' x ', trim(substr($img_data[5], strpos($img_data[5], ':')+1)));
			$size = sizeof($img_data);
			//echo $width." x ".$height.PHP_EOL;
			//var_dump($img_data);
			// max pixel value - min pixel value
			$window_width = $size > 15 ? trim(substr($img_data[$size-2], strpos($img_data[$size-2], ':')+1)) - trim(substr($img_data[$size-1], strpos($img_data[$size-1], ':')+1)) : '';
			$window_center = $size > 15 ? round((trim(substr($img_data[$size-2], strpos($img_data[$size-2], ':')+1)) + trim(substr($img_data[$size-1], strpos($img_data[$size-1], ':')+1)))/2) : '';
			
			file_put_contents($info_file, $width.",".$height.",".$window_center.",".$window_width);
			return $width.','.$height.','.$window_center.','.$window_width;
		}
	}
	
	public static function collect_info($dcm_file, $info_file, $dicom_info = false, $window_level = false, $pixel_range = false)
	{
		$height = null;
		$width = null;
		$windowCenter = null;
		$windowWidth = null;
		$pixelMin = null;
		$pixelMax = null;
		if (file_exists($info_file))
		{
			extract(json_decode(file_get_contents($info_file)));
		}
		
		// The image has two types of info
		// (1) dicom header info - extracted using nanodicom
		// (2) pixel data  - extracted by reading all the pixels with dcmj2pnm (takes more time)
		// Reading all the pixel data is more time consuming. The dicom header info is usually sufficient
		// unless there is no dicom tag for window level and width and the wado request specifies only one windowing variable 
		// but not the other
		
		if ($height == null OR $width == null)
		{
			// Getting all information from dicom header
			require_once(Kohana::find_file('vendor', 'nanodicom/nanodicom'));
			$dicom = Nanodicom::factory($dcm_file);
			$dicom->parse(array(array(0x0028, 0x0010), array(0x0028, 0x0011), array(0x0028, 0x1050), array(0x0028, 0x1051)));
			$height       = ((int) $dicom->value(0x0028,0x0010) == 0) ? null : (int) $dicom->value(0x0028,0x0010);
			$width        = ((int) $dicom->value(0x0028,0x0011) == 0) ? null : (int) $dicom->value(0x0028,0x0011);
			$windowCenter = ((int) $dicom->value(0x0028,0x1050) == 0) ? null : (int) $dicom->value(0x0028,0x1050);
			$windowWidth  = ((int) $dicom->value(0x0028,0x1051) == 0) ? null : (int) $dicom->value(0x0028,0x1051);
		}
		if (($window_level AND ($windowWidth == null OR $windowCenter == null)) OR ($pixel_range AND ($pixelMin == null OR $pixelMax == null)))
		{
			// Use dcmj2pnm to get the pixel min & max values to calculate the windowCenter and windowWidth
			exec(Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $pixel_data);
			$size = sizeof($pixel_data);
			if ($size < 16)
			{
				echo 'extract_info() failed with command:<br>'.PHP_EOL.Mnode::$DCM_2PNM.' -q -o -im '.$dcm_file.Mnode::$TRAILING_CMD.'<br><br>';
				exec(Mnode::$DCM_2PNM.' -v -o -im '.$dcm_file.Mnode::$TRAILING_CMD, $error);
				echo implode('<br>', $error);
				exit;
			}
			//list($width, $height) = explode(' x ', trim(substr($pixel_data[5], strpos($pixel_data[5], ':')+1)));
			// EQUATION: windowWidth = max pixel value - min pixel value
			// EQUATION: windowCenter = (max pixel value + min pixel value) / 2
			$pixelMin = trim(substr($pixel_data[$size-1], strpos($pixel_data[$size-1], ':')+1));
			$pixelMax = trim(substr($pixel_data[$size-2], strpos($pixel_data[$size-2], ':')+1));
			if ($windowWidth == null OR $windowCenter == null)
			{
				$windowWidth = $pixelMax - $pixelMin;
				$windowCenter = ($pixelMax + $pixelMin) / 2;
			}
		}
		$result = array('width' => $width, 'height' => $height, 
						'windowWidth' => $windowWidth, 'windowCenter' => $windowCenter, 
						'pixelMin' => $pixelMin, 'pixelMax' => $pixelMax);
		Mnode::fresh($info_file);
		file_put_contents($info_file, json_encode($result));
		return $result;
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