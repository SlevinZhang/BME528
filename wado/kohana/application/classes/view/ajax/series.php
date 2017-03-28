<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Series extends View_Ajax {

	public function init()
	{
	}
	
	public function data()
	{
		$images = Mnode::read_file('meta', 'img-'.$this->study_uid);
		
		$total_images = count($images);
		$index        = $this->settings['index'];
		
		$count = 0;
		$data = array();

		$modality = 'US';
		
		for ($i = $index; $i < $total_images AND array_key_exists($i, $images)
			AND $images[$index]['SeriesInstanceUID'] == $images[$i]['SeriesInstanceUID']; $i++)
		{
			if ($this->settings['bookmark'] > 0 AND $images[$i]['BOOKMARK'] == NULL)
				continue;
			
			$data['seriesImages'][] = 'admin/'.$this->site.'/wado?requestType=WADO&studyUID='.$this->study_uid.'&seriesUID='
				.$images[$i]['SeriesInstanceUID'].'&objectUID='.$images[$i]['SOPInstanceUID'];
			$data['cols'][] = $images[$i]['Columns'];
			$data['rows'][] = $images[$i]['Rows'];
			$data['ratio'][] = ( ! isset($images[$i]['Rows']) OR $images[$i]['Rows'] == 0)
				? 1
				: ($images[$i]['Columns']/$images[$i]['Rows']);
			$modality = $images[$index]['Modality'];
			$count++;
		}
		
		// Generate the dicom image files
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-dicom/'.$this->study_uid.' --get=series='.$images[$index]['SeriesInstanceUID']);

		$data['studyUID']  = $this->study_uid;
		$data['seriesUID'] = $images[$index]['SeriesInstanceUID'];
		$data['objectUID'] = $images[$index]['SOPInstanceUID'];
		$data['index']     = $index;
		$data['frames']    = ($this->settings['bookmark'] > 0) ? $this->settings['bookmark'] : $this->settings['frames'];
		$data['image']     = $this->settings['image'];
		$data['scale']     = $this->settings['scale'];
		$data['x']         = $this->settings['x'];
		$data['y']         = $this->settings['y'];
		$data['modality']  = $modality;
		$data['wWindow']   = $this->settings['WindowWidth'];
		$data['cWindow']   = $this->settings['WindowCenter'];
		
		if ($this->settings['region'] == '0,0,1,1')
		{
			$data['zParameters'] = '';
		}
		else
		{
			$data['zParameters'] = '&region='.$this->settings['region'];
		}

		if ($this->settings['WindowWidth'] == 0)
		{
			$data['wParameters'] = '';
		}
		else
		{
			$data['wParameters'] = '&windowCenter='.$this->settings['WindowCenter'].'&windowWidth='.$this->settings['WindowWidth'];
		}

		return json_encode($data);
	}
}
