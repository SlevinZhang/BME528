<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Video extends Kostache {

	public function init()
	{
	}
	
	public function video()
	{
		$study		 = Arr::get($_GET, 'study', '');
		$index		 = Arr::get($_GET, 'index', '');

		$file = Mnode::read_file('meta', 'doc-'.$study);
		$dir = Mnode::$DIR_FILES.'img-'.$study.'-'.$index.DIRECTORY_SEPARATOR;
		$filename = 'video.wmv';
		
		$attempts = 0;
		while ($attempts < 10)
		{
			if ( ! file_exists($dir.$filename))
			{
				// File does not exist
				sleep(1);
			}
			else
			{
				$filesize = filesize($dir.$filename);
				
				if (filesize($file[$index]['FILENAME']) == $filesize)
				{
					// Files are the same
					$attempts = 10;
				}
				else
				{
					sleep(1);
					if ($filesize != filesize($dir.$filename))
					{
						// File is growing, is being copied
						$attempts--;
					}
				}
			}
		
			$attempts++;
		}
		$video = array('src' => '../../files/img-'.$study.'-'.$index.'/'.$filename);

		return $video ;
	}
	
} // End Ajax_Attachment
