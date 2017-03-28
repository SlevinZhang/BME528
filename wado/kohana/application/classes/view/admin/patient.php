<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Patient extends View_Admin {

	public function patient()
	{
		$this->patient['dcm_PatientName'] = Model_PACS::name($this->patient['dcm_PatientName']);
		
		if (empty($this->patient['dcm_PatientBirthDate']) OR $this->patient['dcm_PatientBirthDate'] == '0000-00-00')
		{
			$this->patient['dcm_PatientBirthDate'] = 'N/A';
		}
		
		if (empty($this->patient['dcm_PatientSex']))
		{
			$this->patient['dcm_PatientSex'] = 'N/A';
		}
		
		switch (strtoupper($this->patient['dcm_PatientSex']))
		{
			case 'F': $this->patient['gender'] = 'Female';
			break;
			case 'M': $this->patient['gender'] = 'Male';
			break;
		}

		if ($this->patient['dcm_PatientBirthDate'] != 'N/A')
		{
			$age = Date::span(strtotime($this->patient['dcm_PatientBirthDate']), NULL, 'years');
			$label = 'year';
			if ($age == 0)
			{
				// Do it as months instead
				$age = Date::span(strtotime($this->patient['dcm_PatientBirthDate']), NULL, 'months');
				$label = 'month';
			}

			// Age
			$plural = ($age == 1) ? '' : 's';
			$this->patient['age'] = $age.' '.$label.$plural.'-old';
		}
		
		return $this->patient;
	}
	
	public function message()
	{
		// Check to see if we want to return any message
		//return 'there is another one';
	}
		
	public function studies()
	{
		$results = $this->pacs->patient_studies($this->patient_id);
		
		$data = array();
		$data['total'] = 0;
		
		foreach ($results as $site => $items)
		{
			$data['total'] += count($items);
			
			foreach ($items as $result)
			{
				$result['StudyDescription']  = (empty($result['StudyDescription'])) ? '---' : $result['StudyDescription'];
				$result['AccessionNumber']  = (empty($result['AccessionNumber'])) ? '---' : $result['AccessionNumber'];
				$result['site'] = $site;
				$data['rows'][] = $result;
			}
		}
		
		$data['count'] = ($data['total'] == 1) ? 'study' : 'studies';

		$headers = array(
			array(
				'class' => 'size1of5',
				'columns' => array(
					'Accession Number' => 'Accession Number',
				),
			),
			array(
				'class' => 'size1of2',
				'columns' => array(
					'Modality' => 'Modality',
					'Description' => 'Description',
				),
			),
			array(
				'class' => 'size1of4',
				'columns' => array(
					'Study Date' => 'Study Date',
				),
			),
		);
		
		foreach ($headers as $header)
		{
			$items = $item = array();
			$total_items = count($header['columns']);
			$index = 1;
			foreach ($header['columns'] as $key => $value)
			{
				$class = '';
				$direction = 'DESC';
				
				if ($this->pacs->sort('value', TRUE) == $this->pacs->mapping[$key])
				{
					// This is the current column being sorted
					$direction = ($this->pacs->direction() == 'ASC') ? 'DESC' : 'ASC';
					$class = ($this->pacs->direction() == 'ASC') ? 'sortU' : 'sortD';
				}
				
				$items[] = array(
					'name' => $value,
					'url' => 'admin'.URL::query(array('sort' => $key, 'direction' => $direction)),
					'class' => $class,
					'title' => $key,
					'separator' => (bool) ($total_items > 1 AND $index < $total_items),
				);
				$index++;
			}
			$item['items'] = $items;
			$item['class'] = $header['class'];
			$data['headers'][] = $item;
		}
		
		if ($this->user->can('delete_study'))
		{
			// Check if user can delete study based on policy
			$item = array(
				'name' => 'Actions',
				'title' => 'Actions',
			);
			$item['items'] = $item;
			$item['class'] = 'size1of5';
			$data['headers'][] = $item;
			$data['can_delete_study'] = TRUE;
		}
		
		

		/*
		$headers = array('Accession Number', 'Description', 'Study Date');
		
		foreach ($headers as $header)
		{
			$class = '';
			$direction = 'DESC';
			
			if ($this->pacs->sort('value', TRUE) == $this->pacs->mapping[$header])
			{
				// This is the current column being sorted
				$direction = ($this->pacs->direction() == 'ASC') ? 'DESC' : 'ASC';
				$class = ($this->pacs->direction() == 'ASC') ? 'sortU' : 'sortD';
			}
			
			$data['headers'][] = array(
				'name' => $header,
				'url' => 'admin/patient'.URL::query(array('sort' => $header, 'direction' => $direction)),
				'class' => $class,
				'title' => $header,
			);
		}*/
		
		return $data;
	}
	
} // End Admin_Patient
