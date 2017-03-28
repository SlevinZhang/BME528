<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Attachment extends Kostache {

	public function init()
	{
	}
	
	public function images()
	{
		$study		 = Arr::get($_GET, 'study', '');
		$index		 = Arr::get($_GET, 'index', '');

		$images = array();
		
		$src = Mnode::$DIR_DOC.$study.'-'.$index.DIRECTORY_SEPARATOR;
		$dir = Mnode::$DIR_DOC.'img-'.$study.'-'.$index.DIRECTORY_SEPARATOR;
		
		if ( ! file_exists($dir) AND count(glob($src.'*')) >  0)
		{
			mkdir($dir, 0755, TRUE);
			
			$docs     = Mnode::read_file('meta', 'doc-'.$study);
	
			set_time_limit(Mnode::$MAX_EXECUTION_TIME);
			
			while(count(glob($dir.'*')) == 0)
			{
				if (count(glob($src.'*')) == 1)
				{
					$command = Mnode::$DIR_MAGICK.'convert '.$src.'* '.$dir.'scan'.Mnode::$PNG;
				}
				else
				{
					//exec(Mnode::$DIR_MAGICK.'convert '.$docs[$index]->FILENAME.' '.$dir.'scan'.Mnode::$PNG);
					$command = Mnode::$DIR_MAGICK.'convert '.$docs[$index]['FILENAME'].' '.$dir.'scan'.Mnode::$PNG;
				}
				$out = shell_exec($command);
			}
		}
		
		
		foreach (glob($dir.'*'.Mnode::$PNG) as $file)
		{
			
			$images[] = array('src' => 'admin/ajax/download?type=attachment&src=img-'.$study.'-'.$index.'/'.basename($file));
		}

		return $images;
	}
	
} // End Ajax_Attachment
