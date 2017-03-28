<?php

//imprint error message to error image?
//when dcmj2pnm returns an error, the response should default to the blank image

//TODO:
//fix clipping issue with
//http://localhost/dcmweb/wado/wado.php?requestType=WADO&studyUID=1.1&seriesUID=2.2&objectUID=2215454.222.23525.2554&annotation=patient,technique&rows=500&columns=400&region=0.35,0.5,0.95,0.75&windowCenter=2000&windowWidth=2000&imageQuality=100&frameNumber=1


//Parameters:

//+annotation [CSV]  (not present for application/dicom or text)
//+rows [Integer String]
//+columns [Integer String]
//+region [4 x Decimal String] (not present for application/dicom)
//+windowCenter [Decimal String] (not present for application/dicom or presentationUID)
//+windowWidth [Decimal String] (not present for application/dicom or presentationUID)
//+frameNumber [Integer String] (not present for application/dicom)
//+imageQuality [Integer String] (not present for application/dicom unless lossy transfer syntax is specified)
//-presentationUID 
//-presentationSeriesUID

//-contentType
//-anonymize (only present for application/dicom)
//-transferSyntax (only present for application/dicom)
//-charset (only present for SR)

class Wado {

	protected $_mandatory = array(
		'requestType'           => '/WADO/',				// Regular expression to match WADO
		'studyUID'              => '/^\d+(\.\d+)*$/',		// Regular expression to match UIDs
		'seriesUID'             => '/^\d+(\.\d+)*$/',		// Regular expression to match UIDs
		'objectUID'             => '/^\d+(\.\d+)*$/',		// Regular expression to match UIDs
	);

	protected $_optional = array(
		'annotation'            => '/^([A-z,])+$/',			// Regular expression for comma separated strings (ex: patient,technique)
		'rows'                  => '/^\d+$/',				// Regular expression for integers
		'columns'               => '/^\d+$/',				// Regular expression for integers
		'region'                => '/^(\d+(\.\d*)?)(,\d+(\.\d*)?){3}$/',  // Regular expression for 4 comma separated decimal strings
		'windowCenter'          => 'is_numeric',			// PHP function for signed decimal strings
		'windowWidth'           => 'is_numeric',			// PHP function for signed decimal strings
		'frameNumber'           => '/^\d+$/',				// Regular expression for integers
		'imageQuality'          => '/^\d+$/',				// Regular expression for integers
		'presentationUID'       => '/^\d+(\.\d+)+$/',		// Regular expression to match UIDs
		'presentationSeriesUID' => '/^\d+(\.\d+)+$/',		// Regular expression to match UIDs
		'contentType'           => '/^([A-z\/,])+$/',		// Regular expression for comma separated strings (ex: image/jpg)
		'anonymize'             => '/^(yes|YES)+$/',		// Regular expression to match YES
		'transferSyntax'        => '/^\d+(\.\d+)+$/',		// Regular expression to match UIDs
		'charset'               => '/^([A-z0-9\-,])+$/',	// Regular expression for comma separated strings (ex: UTF-8)
		'light'                 => '/^(yes|YES)+$/',	    // Regular expression to match YES
		
	);
	// Extras, used but that defined.
	// 'burnIn'  => If set, with add the black blocks for the US

	
	protected $_filename = '';
	
	protected $_output = 'out.jpg';
	
	protected $_command  = '';
	
	protected $_object = array();

	public $query;
	public $get;
	public $temp_file;
	public $blob;
	public $site;
	
    function __construct()
	{
	}
	
	function init()
	{
		// We are ready to roll
		// If we want, we can force the checking of mandatory parameters
		foreach ($this->_mandatory as $mandatory_field => $value)
		{
			$this->set_parameter($mandatory_field);
		}
		
		foreach ($this->_optional as $optional_field => $value)
		{
			$this->set_parameter($optional_field);
		}
	}
	
	function __get($name)
	{
		if ( ! isset($this->_object[$name]))
		{
			$this->set_parameter($name);
		}
		
		return $this->_object[$name];
	}

	function __set($name, $value)
	{
		$this->_object[$name] = $value;
		unset($this->$name);
	}

	function get_file_location()
	{
		// Finds the real location of the DCM file based on mandatory parameters
		$this->_filename = Mnode::$DIR_IMG.$this->studyUID.DIRECTORY_SEPARATOR.$this->seriesUID.DIRECTORY_SEPARATOR.$this->objectUID.Mnode::$DCM;
	}

	function get_metadata()
	{
		$this->_metadata = $this->pacs->study_uid($this->studyUID)->sop_instance_uid($this->objectUID)->image();
		
		//Mnode::Log(json_encode($this->_metadata));
		//Kohana::$log->add(Log::ERROR, $this->studyUID.' '.$this->seriesUID.' '.$this->objectUID.' '.json_encode($this->_metadata));
	}

	function get_file()
	{
		if ( ! file_exists($this->_filename))
		{
		
			$src_file = $this->pacs->get_source_filename($this->studyUID, $this->_metadata);
			//if (file_exists(Mnode::$DIR_DUMP.$this->studyUID) AND filesize(Mnode::$DIR_DUMP.$this->studyUID) > $this->_metadata->OFFSET)// AND $this->index > 0)
			if (file_exists($src_file) AND filesize($src_file) > $this->_metadata['OFFSET'])// AND $this->index > 0)
			{
				//$src_file = Mnode::$DIR_DUMP.$this->studyUID;
				$result   = $this->pacs->extract_binary($src_file, $this->_metadata['OFFSET'], $this->_metadata['LENGTH'], $this->_filename);
				if ($result)
					return TRUE;
			}

			$src_file = $this->_metadata['FILENAME'];
			$result = $this->pacs->extract_binary($src_file, $this->_metadata['OFFSET'], $this->_metadata['LENGTH'], $this->_filename);

			return $result;
		}
	}
	
	function set_parameter($name)
	{
		// Check if parameter is mandatory
		if (key_exists($name, $this->_mandatory))
		{
			// It is mandatory but not set. Raise an error
			if (!isset($this->get[$name]) || !preg_match($this->_mandatory[$name], $this->get[$name]))
			{
				$this->_send_error();
			}
			// It is fine here. Mandatory and set. Set it to internal variable
			$this->_object[$name] = $this->get[$name];
		}
		else // Parameter is optional
		{
			/*// Should there be a way to check if the optional name is defined?
			// Let's make sure the key we are obtaining is defined in the optional keys
			if (!key_exists($name, $this->_optional))
			{
				$this->_send_error();
			}*/
			// All remaining parameters exist in the optional array
			if(key_exists($name, $this->_optional) AND isset($this->get[$name]) AND $this->get[$name] != '')
			{
				if (function_exists($this->_optional[$name]))
				{
					$validity_test = $this->_optional[$name]($this->get[$name]); //checks against functions such as 'is_numeric'
				}
				else
				{
					$validity_test = preg_match($this->_optional[$name], $this->get[$name]); //checks against regular expressions
				}
				if (!$validity_test) $this->_send_error();
			}
			
			$this->_object[$name] = (isset($this->get[$name]))? $this->get[$name] : '';
		}
	}
	
	function request_info()
	{
		//$hash = Mnode::$DIR_INFO.$this->studyUID.DIRECTORY_SEPARATOR.$this->seriesUID.DIRECTORY_SEPARATOR.$this->objectUID.Mnode::$TXT;
		$hash = 'info.'.$this->studyUID.'-'.$this->seriesUID.'-'.$this->objectUID;
		$dimensions = TRUE; 
		if (($this->windowWidth == '' AND  $this->windowCenter != '') OR ($this->windowWidth != '' AND  $this->windowCenter == ''))
		{
			$window_level = TRUE;
		}
		else
		{
			$window_level = FALSE;
		}
		
		$info = Mnode::collect_info($this->_filename, $hash, $dimensions, $window_level);
		
		if ($this->windowCenter == '')
		{
			$this->windowCenter = $info['window_center'];
		}
		if ($this->windowWidth == '')
		{
			$this->windowWidth  = $info['window_width'];
		}
		// If the region is specified, calculate l, t, w, h
		if ($this->region != '')
		{
			$region = explode(',', $this->region);
			if ($region[0] > $region[2] OR $region[1] > $region[3] OR $region[2] > 1
				OR $region[3] > 1 OR $region[2] <= 0 OR $region[3] <= 0 OR $region[2] > 1 OR $region[3] > 1)
			{
				$this->_send_error();
			}
			else
			{
				$this->region = round($region[0] * $width).' '.round($region[1] * $height).' '
					.round(($region[2]-$region[0]) * $width).' '.round(($region[3]-$region[1]) * $height);
			}
			$width  = round(($region[2] - $region[0]) * $width);
			$height = round(($region[3] - $region[1]) * $height);
		}
	}
	
	function prepare_statement()
	{
		$command = Mnode::$DCM_2PNM.' +oj ';
		$command .= ' -q ';
		//$command .= ' +l '; // limits the max scale to 1
		$command .= ($this->region != '' AND ($this->rows != '' OR $this->columns != '')) ? ' -i ' : ''; // '-i' because dcmj2pnm does not support interpolated scaling and clipping at the same time
		if ($this->rows != '' AND $this->columns != '')
		{
			if (KOHANA::$is_windows)
			{
				$command .= ' +Sxyv '.$this->columns.' '.$this->rows.' ';
			}
			else
			{
				$command .= ' +Sxv '.$this->columns.' ';
			}
		}
		elseif ($this->columns != '')
		{
			$command .= ' +Sxv '.$this->columns.' ';
		}
		elseif ($this->rows != '') 
		{
			$command .= ' +Syv '.$this->rows.' ';
		}

		if (isset($this->_metadata['REMOTE_AE']) AND Arr::get($this->get, 'burnIn', 'n') == 'y')
		{
			// Cropping
			$this->region = Mnode::crop_parameters($this->site.$this->_metadata['REMOTE_AE']);
		}
		$command .= ($this->region != '')? ' +C '.$this->region.' ' : '';
		$this->_default_cmd = $command;

		$command .= ($this->windowCenter != '' AND (int) $this->windowCenter != 0) 
			? ' +Ww '.$this->windowCenter.' '.$this->windowWidth.' '
			: ' +Wm ';
		$this->_default_cmd .= ' +Wm ';
		$command .= ($this->frameNumber != '')? ' +F '.$this->frameNumber.' ' : '';
		$this->_default_cmd .= ($this->frameNumber != '')? ' +F '.$this->frameNumber.' ' : '';
		$command .= ($this->imageQuality != '')? ' +Jq '.$this->imageQuality.' ' : ' +Jq 75 ';
		$this->_default_cmd .= ($this->imageQuality != '')? ' +Jq '.$this->imageQuality.' ' : ' +Jq 75 ';
		$command .= $this->_filename;
		$this->_default_cmd .= $this->_filename;

		$this->_command = $command;

	}
	
	function annotate_image()
	{
		/* 
		* imagemagick options for inserting text into images:
		* convert -background #0008 -fill white -gravity center -size 200x30 caption:"text here" out.jpg +swap -gravity NorthWest -composite out2.jpg
		* convert out.jpg -fill white -undercolor #00000080 -gravity NorthWest -annotate +10+10 "text here" out2.jpg
		*/
		
		// Insert annotation into image
		$command = 'convert '.$this->_output.' -fill white -undercolor #00000080 -gravity NorthWest -annotate +10+10 "';
		
		// Parse DCM header for requested annotation information (ex: patient name, procedure, etc)
		exec(Mnode::$DCM_DUMP." -L ".$this->_filename, $info);
		if (strstr(strtolower($this->annotation), 'patient') !== FALSE)
		{
			$command .= 'Patient: '.str_replace('^', ', ', substr($info[36], strpos($info[36], "[") + 1, strpos($info[36], "]") - strpos($info[36], "[") - 1));
			$command .= '\nAge / Sex: '.substr($info[40], strpos($info[40], "[") + 1, strpos($info[40], "]") - strpos($info[40], "[") - 1).' / '.substr($info[39], strpos($info[39], "[") + 1, strpos($info[39], "]") - strpos($info[39], "[") - 1);
			$command .= '\nMRN: '.substr($info[37], strpos($info[37], "[") + 1, strpos($info[37], "]") - strpos($info[37], "[") - 1);
			$command .= '\nDOB: '.substr($info[38], strpos($info[38], "[") + 1, strpos($info[38], "]") - strpos($info[38], "[") - 1);
		}
		if (strstr(strtolower($this->annotation), "technique") !== FALSE)
		{
			$command .= '\nProcedure: '.substr($info[31], strpos($info[31], "[") + 1, strpos($info[31], "]") - strpos($info[31], "[") - 1).' '.substr($info[42], strpos($info[42], "[") + 1, strpos($info[42], "]") - strpos($info[42], "[") - 1);
			$command .= '\nDOS: '.substr($info[20], strpos($info[20], "[") + 1, strpos($info[20], "]") - strpos($info[20], "[") - 1);
			$command .= ($this->frameNumber != '')? '\nFrame: '.$this->frameNumber : '\nFrame: 1';
		}
		
		$command .= '" '.$this->_output;
		system($command);
	}
	
	public function execute()
	{
		$this->init();
		$this->get_file_location();

		if ( ! file_exists($this->_filename))
		{
			$this->pacs = Model_PACS::instance($this->site);
			$this->get_metadata();
			//$site = $this->_exam_metadata['site'];
			//$this->pacs = Model_PACS::instance($site);
			$result = $this->get_file();
		}

		if (filesize($this->_filename) === 0)// || filesize($this->_filename) < $this->_metadata->LENGTH)
		{
			$this->_send_error();
		}
		$this->request_info();
		$this->prepare_statement();
		//$start = microtime(TRUE);
		$this->blob = shell_exec($this->_command);
		//$diff = microtime(TRUE) - $start;
		//Kohana::$log->add(Log::INFO, $diff.' '.$this->_command);
	}
	
	public function show()
	{
		$this->execute();
		self::send_header('image/jpeg', (int) strlen($this->blob));
		echo $this->blob;
	
		//if ( ! isset($this->get['nocache']))
			//$this->_request_cache();
			$this->cache();
	}
	
	protected function _request_cache()
	{
		// Do the rest via background script
		$qs = str_replace('&', '==', $_SERVER['QUERY_STRING']);
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/cache-image/'.$this->studyUID.' --qs=query='.$this->query.'=='.$qs);
		
		//Mnode::Log(Mnode::$KOHANA_CLI.' --uri=scripts/cache-image/'.$this->studyUID.' --qs=query='.$this->query.'=='.$qs);
	}
	
	public function cache()
	{
		// TODO: Might be doing extra work redoing the wado, any other alternative?
		
		// Get cache instance
		//$mycache = Cache::instance('apc');
		// Set the data
		//$data = array('contents' => $return);
		// 10 hours
		//$mycache->set($this->query, $data, 6000);
		//$mycache->set($this->query, $return, 6000);
		//$start = microtime(TRUE);
		file_put_contents($this->temp_file, $this->blob);
		//$diff = microtime(TRUE) - $start;
		//Kohana::$log->add(Log::INFO, $diff.' '.$this->objectUID.'.CACHE');
		//passthru($this->_command);
		//exit;
	}
	
	public static function send_header($mime = 'image/jpeg', $file = NULL)
	{
		header('Content-Type: '.$mime);

		if ($file !== NULL)
		{
			if (is_string($file))
			{
				//$last_modified = gmdate('D, d M Y H:i:s', filemtime($file)).' GMT';
				$file = filesize($file);
				//header('Last-Modified: '.$last_modified);
			}
			header('Content-Length: '.$file);
		}

		// Let's make it 10 mins
		//$expires = gmdate('D, d M Y H:i:s', (time() + 600)).' GMT';
		$max_age = 'max-age=600, private, community="PACSproxy"';

		//header('Expires: '.$expires);
		header('Cache-Control: '.$max_age);
		//header('Connection: close');
		//header('Connection: keep-alive');
	}
	
	function _send_error()
	{
		self::send_header('image/jpg');
		$fp = fopen('media/img/fail.jpg', 'rb');
        fpassthru($fp);
		exit;
	}
	function _debug($clue)
	{
		$this->_send_header('text/plain');
		echo $clue;
		exit();
	}
}
