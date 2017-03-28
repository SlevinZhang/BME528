<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Index extends View_Admin {

	public function results()
	{
		$results = $this->pacs->worklist();
		
		$data = array();
		$data['showing'] = 0;
		$data['total'] = $this->navigation['total'] = $this->pacs->last_query_total;
		$data['first'] = ($this->pacs->page() - 1)*$this->pacs->limit() + 1;
		
		foreach ($results as $site =>$items)
		{
			$data['showing'] += count($items);
			
			foreach ($items as $result)
			{
				$result['site'] = $site;
				$result['PatientName'] = Model_PACS::name($result['PatientName']);
				$result['StudyDescription']  = (empty($result['StudyDescription'])) ? '---' : $result['StudyDescription'];
				$result['AccessionNumber']  = (empty($result['AccessionNumber'])) ? '---' : $result['AccessionNumber'];
				$result['PATIENTID_HIGHLIGHT'] = $result['PatientID'];
				
				if ( ! empty($this->search_value))
				{
					$replace = '<span class="bgCallout">${1}</span>';
					$search  = '/('.$this->search_value.')/i';
					
					$result['PatientName'] = preg_replace($search, $replace, $result['PatientName']);
					$result['StudyDescription']  = preg_replace($search, $replace, $result['StudyDescription']);
					$result['AccessionNumber']  = preg_replace($search, $replace, $result['AccessionNumber']);
					$result['PATIENTID_HIGHLIGHT'] = preg_replace($search, $replace, $result['PatientID']);
				}
					
				$data['rows'][] = $result;
			}
		}
		
		$data['last']  = $data['first'] + $data['showing'] - 1;
		$data['count'] = ($data['showing'] == 1) ? 'study' : 'studies';
		
		$headers = array(
			array(
				'class' => '',
				'is_mobile' => TRUE,
				'columns' => array(
					'Patient' => 'Patient',
				),
			),
			array(
				'class' => 'size1of2',
				'is_mobile' => FALSE,
				'columns' => array(
					'Modality' => 'Modality',
					'Accession Number' => 'Acc. #',
					'Description' => 'Description',
				),
			),
			array(
				'class' => 'size1of5',
				'is_mobile' => FALSE,
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
			$is_th_mobile = FALSE;
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
			$item['th_mobile'] = $header['is_mobile'];
			$item['class'] = $header['class'];
			$data['headers'][] = $item;
		}
		
		return $data;
	}
	
} // End Admin_Index
