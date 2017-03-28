<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Patient extends View_Ajax {

	public function init()
	{
		// Query the model for patient_studies.
		//$this->pacs->patient_studies();
	}
	
	public function options()
	{
		$results = $this->pacs->patient_studies($this->patientID);

		$options = array();

		foreach ($results as $site => $rows)
		{
			foreach ($rows as $row)
			{
				$item = $row;
				$column = 0;
				$item['site'] = $site;
				
				$item['selected'] = (Arr::get($row, 'StudyInstanceUID', '-') == $this->study_uid) ? ' selected="selected"' : NULL;
				$value = Arr::get($row, 'AccessionNumber', '');
				$value .= ' - '.Arr::get($row, 'StudyDescription', '');
				$value .= ' ['.Arr::get($row, 'Modality', '-').']';
				$value .= ' - '.Arr::get($row, 'StudyDate', '');

				$item['value'] = $value;
				$options[] = $item;
			}
		}
		
		return $options;
	}
	
} // End Ajax_Patient
