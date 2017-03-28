<?php defined('SYSPATH') or die('No direct script access.');

class Model_Standalone extends Model_PACS {

	public $mapping = array(
		'Study Date' => 'studies.dcm_StudyDate',
		'Patient' => 'patientIDs.dcm_PatientName',
		'Accession Number' => 'studies.dcm_AccessionNumber',
		'Description' => 'studies.dcm_StudyDescription',
		'Modality' => 'Modality',
	);
	
	public function sql_execute($single = FALSE)
	{
		$results = db::query(Database::SELECT, $this->sql_compile())->execute($this->_settings['connection'])->as_array();
		
		if ($single)
			return $results[0];
		
		return $results;
	}
	
	public function last_query_total()
	{
		$query = 'SELECT COUNT(*) AS COUNT '.$this->_sql_params['from'].' '.$this->_sql_params['conditions'];
		$total = db::query(Database::SELECT, $query)->execute($this->_settings['connection'])->as_array();
		return (int) $total[0]['COUNT'];
	}

	public static function fix_report($report, $site = '')
	{
		return $report;
	}

	public function get_source_filename($study, $img)
	{
		return $img['FILENAME'];
	}
	
	public static function extract_info($dcm_file, $info_file, $modality = '')
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
	}
	
	public function extract_binary($file, $offset, $length, $dest)
	{
		//Mnode::log('extract_binary '.$file.' | '.$offset.' | '.$length.' | '.$dest.' : '.Request::current()->controller().' | '.Request::current()->action());
		$file = Mnode::get_file_share($file);
		//Mnode::log('extract_binary '.$file.' | '.$offset.' | '.$length.' | '.$dest.' : '.Request::current()->controller().' | '.Request::current()->action());
		
		$write_attempt = 0;
		while ( ! file_exists($dest) AND $write_attempt <= 1)
		{
			// Generate the dicom image file (FUJI PACS files are "just" concatenated DICOM files, easy to split.)
			$read_attempt = 0;
			while ( ! $handle = @fopen($file, 'rb') AND $read_attempt <= 5)
			{
				// Sometimes, big files take extra time to release the lock. Do this trick.
				usleep($read_attempt);
				$read_attempt++;
			}
			// Check if we were able of reading file
			if (! $handle)
			{
				return FALSE;
			}
				
			fseek($handle, $offset);
			$length = ($length == 0) ? filesize($file) : $length;
			$contents = fread($handle, $length);
			fclose($handle);
			//Mnode::fresh($dest);
			$dir = dirname($dest);
			if ( ! file_exists($dir))
			{
				mkdir($dir, 0755, TRUE);
			}
			$fp = fopen($dest, 'wb');
			fwrite($fp, $contents);
			fclose($fp);
			
			// Double-check the new file
			if (filesize($dest) < $length)
			{
				unlink($dest);
			}
			$write_attempt++;
		}

		return TRUE;
	}
	
	public function get_patient_from_study($study_uid)
	{
		$this->sql_init();
		
		// Get the patient information
		$this->sql_param('query', 'SELECT patientIDs.*');
		$this->sql_param('from', 'FROM patientIDs, studies');
		$this->sql_param('conditions', 'WHERE studies.patientID_id = patientIDs.id AND studies.dcm_StudyInstanceUID = \''.$study_uid.'\'');
		$this->sql_param('conditions', 'AND studies.status = \'ACTIVE\' AND patientIDs.status = \'ACTIVE\'');

		return $this->sql_execute(TRUE);
	}
	
	public function get_patient_from_mrn($PatientID)
	{
		$this->sql_init();

		// Get the patient information
		$this->sql_param('query', 'SELECT patientIDs.*');
		$this->sql_param('from', 'FROM patientIDs');
		$this->sql_param('conditions', 'WHERE patientIDs.dcm_PatientID = \''.$PatientID.'\'');
		$this->sql_param('conditions', 'AND patientIDs.status = \'ACTIVE\'');
		
		return $this->sql_execute(TRUE);
	}

	public function _worklist()
	{
		//TODO
		// Filtering by the filter

		// Query at the worklist.
		$start = ($this->_page - 1) * $this->_limit;
		$end   = $start + $this->_limit;

		$this->sql_init();
		
		$this->sql_param('query', 'SELECT DISTINCT studies.dcm_AccessionNumber AS AccessionNumber, 
		studies.dcm_StudyDescription AS StudyDescription, \'-\' AS BODY_PART, 
		CONCAT_WS(\' \', studies.dcm_StudyDate, CONCAT_WS(\':\', SUBSTRING(LPAD(studies.dcm_StudyTime, 6, \'0\'), 1, 2),
		SUBSTRING(LPAD(studies.dcm_StudyTime, 6, \'0\'), 3, 2), SUBSTRING(LPAD(studies.dcm_StudyTime, 6, \'0\'), 5, 2))) AS STUDY_TIME,
		studies.dcm_StudyDate AS StudyDate,
		(SELECT series.dcm_Modality FROM series WHERE series.study_id = studies.id LIMIT 1) AS Modality,
		patientIDs.dcm_PatientName AS PatientName,
		patientIDs.dcm_PatientID AS PatientID,
		patientIDs.patient_id AS patient_id,
		studies.dcm_StudyInstanceUID AS StudyInstanceUID');
		$this->sql_param('from', 'FROM studies');
		//$query .= 'LEFT JOIN series ON series.study_id = studies.id ';
		$this->sql_param('from', 'LEFT JOIN patientIDs ON patientIDs.id = studies.patientID_id');
			
		// Apply searching criteria
		if ( ! empty($this->_search))
		{
			$this->sql_param('conditions', 'WHERE (studies.dcm_AccessionNumber LIKE \'%'.$this->_search.'%\'
			OR patientIDs.dcm_PatientName LIKE \'%'.$this->_search.'%\'
			OR patientIDs.dcm_PatientID LIKE \'%'.$this->_search.'%\'
			OR studies.dcm_StudyDescription LIKE \'%'.$this->_search.'%\')');
		}
		else
		{
				$this->sql_param('conditions', 'WHERE 1 = 1');
		}
		$this->sql_param('conditions', 'AND studies.status = \'ACTIVE\' AND patientIDs.status = \'ACTIVE\'');

		$this->sql_param('order', 'ORDER BY '.$this->_sort['value'].' '.$this->_direction);
		$this->sql_param('limit', 'LIMIT '.$start.','.$this->_limit);
		
		// Return the output from execution.
		return $this->sql_execute();
	}

	public function _patient_studies($id)
	{
		$this->sql_init();
		
		// Prepare Query
		$this->sql_param('query', 'SELECT DISTINCT studies.dcm_AccessionNumber AS AccessionNumber,
			studies.dcm_StudyDescription AS StudyDescription,
			\'-\' AS BODY_PART, studies.dcm_StudyDate AS StudyDate, 
			(SELECT series.dcm_Modality FROM series WHERE series.study_id = studies.id LIMIT 1) AS Modality, 
			studies.dcm_StudyInstanceUID AS StudyInstanceUID');
		$this->sql_param('from', 'FROM studies');
		$this->sql_param('from', 'LEFT JOIN patientIDs ON patientIDs.id = studies.patientID_id');
		$this->sql_param('conditions', 'WHERE patientIDs.dcm_PatientID = \''.$id.'\'');
		$this->sql_param('conditions', 'AND studies.status = \'ACTIVE\' AND patientIDs.status = \'ACTIVE\'');
		$this->sql_param('order', 'ORDER BY '.$this->_sort['value'].' '.$this->_direction);

		return $this->sql_execute();
	}
	
	/*
	 * This function is used when displaying the study information. Used in Desktop
	 */
	public function _study()
	{
		$this->sql_init();

		// Get the exam information (FOR ALL SERIES)
		$this->sql_param('query', 'SELECT studies.dcm_StudyInstanceUID AS StudyInstanceUID, studies.dcm_AccessionNumber AS AccessionNumber, 
		patientIDs.dcm_PatientID AS PatientID, patientIDs.dcm_PatientName AS PatientName, \'\' AS STATUS,
		studies.dcm_StudyDescription AS StudyDescription, series.dcm_Modality AS Modality,
		series.dcm_SeriesDescription AS SeriesDescription');
		
		$this->sql_param('from', 'FROM studies
		LEFT JOIN patientIDs ON patientIDs.id = studies.patientID_id 
		LEFT JOIN series ON series.study_id = studies.id');
		
		$this->sql_param('conditions', 'WHERE studies.dcm_StudyInstanceUID = \''.$this->_study_uid.'\'');
		$this->sql_param('conditions', 'AND studies.status = \'ACTIVE\' AND patientIDs.status = \'ACTIVE\' AND series.status = \'ACTIVE\'');
		//OR studies.dcm_AccessionNumber = \''.$this->_accession.'\')');
		
		return $this->sql_execute(TRUE);
	}
	
	public function _images($sop_instance_uid = NULL)
	{
		$this->sql_init();
		
		$this->sql_param('query', 'SELECT images.id AS IMAGE_ID, series.dcm_Modality AS Modality,
			images.dcm_SOPClassUID AS SOPClassUID, 0 AS CID, 0 AS BOOKMARK, 
			series.dcm_SeriesInstanceUID AS SeriesInstanceUID, 
			images.dcm_SOPInstanceUID AS SOPInstanceUID, \'\' AS REMOTE_AE, 
			CONCAT_WS(\'/\', \''.APPPATH.'data/DICOM\', studies.patientID_id, studies.id, series.id, 
			CONCAT(images.id, \'.dcm\')) AS FILENAME,
			series.total_images AS IMAGE_COUNT, series.dcm_SeriesDescription AS SeriesDescription,
			0 AS OFFSET, 0 AS LENGTH, frames.dcm_Rows AS Rows, frames.dcm_Columns AS Columns');
		
		$this->sql_param('from', 'FROM studies 
			LEFT JOIN series ON series.study_id = studies.id
			LEFT JOIN images ON images.series_id = series.id
			LEFT JOIN frames ON frames.image_id = images.id');
		
		$this->sql_param('conditions', 'WHERE studies.dcm_StudyInstanceUID = \''.$this->_study_uid.'\'');
		$this->sql_param('conditions', 'AND studies.status = \'ACTIVE\' AND series.status = \'ACTIVE\'');
		$this->sql_param('conditions', 'AND images.status = \'ACTIVE\' AND frames.status = \'ACTIVE\'');
		
		$this->sql_param('order', 'ORDER BY studies.id, series.id, images.dcm_ImageNumber, images.dcm_InstanceNumber, images.dcm_AcquisitionTime');

		return $this->sql_execute();
	}

	public function _documents()
	{
		$this->sql_init();

		// Get the documents information
		/*
		$query .= 'SELECT ROW_NUMBER() OVER (ORDER BY DOCUMENT.STORAGE_UID, DOCUMENT.ID ASC) AS DOCUMENT, STORAGE.EUID, 
			CONCAT(STORAGE.UNC_PATH,REPLACE(DOCUMENT.FILENAME,'/','\')) AS FILENAME, DOCUMENT.NAME ';

		$from .= 'FROM study
			LEFT JOIN study_document ON study.id = study_document.study_uid 
			LEFT JOIN document ON study_document.document_uid = document.id AND document.is_obsolete = \'N\'
			LEFT JOIN STORAGE ON STORAGE.ID = DOCUMENT.STORAGE_UID AND STORAGE.IS_ACTIVE = \'Y\'';
		
		$conditions .= 'WHERE STUDY.INSTANCE_EUID=\''.$this->_study_uid.' AND DOCUMENT.STORAGE_UID IN (2,5)';
			
		$find = $query.$from.$conditions.$order.$limit;

		$results = db::query(Database::SELECT, $find)->execute($this->_settings['connection'])->as_array();*/
		$results = array();
		
		return $results;
	}
	
	public function _patient($id)
	{
		//$query = 'SELECT dcm_PatientID AS MRN, dcm_PatientName AS NAME, dcm_PatientBirthDate AS DOB, dcm_PatientSex AS SEX FROM patientIDs';
			
		// Searching by MRN or Name
		//$query .= ' WHERE (UPPER(dcm_PatientID) LIKE \'%'.strtoupper($search).'%\' OR UPPER(dcm_PatientName) LIKE \'%'.strtoupper($search).'%\')';
	}


} // End Standalone
