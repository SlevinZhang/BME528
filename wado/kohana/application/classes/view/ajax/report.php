<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Report extends Kostache {

	public function init()
	{
	}
	
	public function output()
	{
		$study		 = Arr::get($_GET, 'study', '');
		$index		 = Arr::get($_GET, 'index', '');
		
		$report_file = Mnode::$DIR_DOC.$study.'-'.$index.DIRECTORY_SEPARATOR.'report'.Mnode::$TXT;
		
		$this->_exam_metadata = Mnode::read_file('exam', $study);
		$site = $this->_exam_metadata['site'];
		$this->pacs = Model_PACS::instance($site);

		if (file_exists($report_file) AND filesize($report_file) > 0)
		{
			$output = $this->pacs->fix_report(file_get_contents($report_file), $site);
		}
		else
		{
			$docs = Mnode::read_file('meta', 'doc-'.$study);
			$output = $this->pacs->fix_report(file_get_contents(Mnode::get_file_share($docs[$index]['FILENAME'])), $site);
		}

		$output = str_replace("\r\n", "\n", $output);
		$output = preg_replace('/\n\n\n+/', "\n\n", $output);
		$output = str_replace("\n", "<br>", ($output));
		return $output;
	}
	
} // End Ajax_Report
