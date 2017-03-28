<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
		'cookie_salt' => 'w3kk34jSDkop6km4n!l3#',
		'cookie_domain' => '.usc.edu',
		
		// General
		'DIR_BASE'   => '/home/bme528/www/wado',
		'DIR_WWW'    => '/home/bme528/www/wado/www/',
		'DIR_DATA'   => '/home/bme528/www/wado/kohana/application/cache/',
		'INSTANCE_NAME' => 'icare',
		
		// Third party software locations
		'DIR_PHP'    => '/usr/bin/',
		'DIR_DCMTK'  => '/usr/bin/',
		'DIR_FFMPEG' => '/usr/bin/',
		'DIR_MAGICK' => '/usr/bin/',
		
		// Handy 
		'CMD_COPY'   => 'cp ',
		'TRAILING_CMD'=>' 2>&1',
		
		'MAX_EXECUTION_TIME' => 30,
		'MAX_MOVIE_EXECUTION_TIME' => 90,

		'DCM' => '.dcm',
		'PNG' => '.png',
		'TIF' => '.tif',
		'PDF' => '.pdf',
		'JPG' => '.jpg',
		'MP4' => '.mp4',
		'TXT' => '.txt',
		'EXE' => '',
);
