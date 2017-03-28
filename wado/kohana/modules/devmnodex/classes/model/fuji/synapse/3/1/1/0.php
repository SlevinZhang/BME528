<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fuji_Synapse_3_1_1_0 extends Model_Fuji {

	protected $_db;
	
	public function __construct()
	{
		// Create the object from parent
		
		//parent::__construct('fuji');
	}
	
	public function _patient_studies()
	{
		$search		 = Arr::get($_GET, 'search', '');

		// Prepare Query
		//TODO:
		// default worklist should only show studies with images available
		// check if the studies that lack images are compressed! (ex: 712602)
		$criteria = "STUDY.STATUS >= 40 AND (STUDY.IMAGE_COUNT > 0 OR MODALITY.NAME LIKE 'RF%')";
		$query = "SELECT ACCESSION, DESCRIPTION, BODY_PART, TO_CHAR(STUDY_TIMEDATE, 'MON DD HH24:MI') AS TIME, MODALITY, INSTANCE_EUID FROM (
				SELECT ROW_NUMBER() OVER (ORDER BY MAX(STUDY.STUDY_TIMEDATE) DESC) AS R, STUDY.INSTANCE_EUID, NVL(STUDY.RIS_STUDY_EUID,'N/A') AS ACCESSION, MAX(MODALITY.NAME) AS MODALITY, '[' || SUBSTR(STUDY_STATUS.STATUS,1,1) || '] ' || MAX(PROCEDURE_INFO.DESCRIPTION) AS DESCRIPTION, REPLACE(MAX(BODY_PART.NAME),'Unknown','-') AS BODY_PART, MAX(STUDY.STUDY_TIMEDATE) AS STUDY_TIMEDATE
				FROM STUDY 
				LEFT JOIN STUDY_STATUS ON STUDY_STATUS.CODE = STUDY.STATUS
				LEFT JOIN PROCEDURE_INFO ON PROCEDURE_INFO.ID = STUDY.PROCEDURE_INFO_UID
				LEFT JOIN MODALITY ON MODALITY.ID = PROCEDURE_INFO.MODALITY_UID 
				LEFT JOIN PROC_INFO_BODY_PART ON PROC_INFO_BODY_PART.PROCEDURE_INFO_UID = STUDY.PROCEDURE_INFO_UID
				LEFT JOIN BODY_PART ON BODY_PART.ID = PROC_INFO_BODY_PART.BODY_PART_UID ";

		$query .= 'LEFT JOIN PATIENT ON PATIENT.ID = STUDY.PATIENT_UID WHERE PATIENT.INTERNAL_EUID=\''.$search.'\'';
		$query .= ' AND '.$criteria;
		$query .= " GROUP BY STUDY.INSTANCE_EUID, STUDY_STATUS.STATUS, NVL(STUDY.RIS_STUDY_EUID,'N/A'))";

		return $this->execute($query);
	}
	
	public static function fix_report($report, $site = '')
	{
		if ($site != 'UHN')
		{
			return trim($report);
		}
		// SCRIPT TO FIX THE NASTY REPORT FORMATTING FRON UHN PACS
			
		$report = trim(str_replace("\r\n            ", "\r\n", $report));
		// determine header
		$temp_int2 = strpos($report, "                          Addendum\r\n");
		if (($temp_int = strpos($report, " R a d i o l o g y")) > -1 && (($temp_int2) > -1) || strpos($report, "                           Report\r\n") > -1) {
			if ($temp_int2 === FALSE || (strpos($report, "                           Report\r\n") > -1 && strpos($report, "                           Report\r\n") < $temp_int2))
				$temp_int2 = strpos($report, "                           Report\r\n");
			$header_length = strrpos(substr($report, 0, $temp_int2-1), "\r\n")-$temp_int;
			$report = substr($report, $temp_int2);
			
			// Remove page separator
			$temp_int = -1;
			while (($temp_int = strpos($report, " R a d i o l o g y", $temp_int+1)) > -1) {
				//$report = substr($report, 0, $temp_int).substr($report, $temp_int +$header_length);
				
				//temp_int2 = temp_int;
				if (($temp_int2 = strrpos(substr($report, 0, $temp_int), "\r\n\r\n\r\nMRN:")-1) > -1) {
					//for (i = 0; i < 12; i++)
						//temp_int2 = $report.lastIndexOf("\r\n", temp_int2-1);
				} else if (($temp_int2 = strrpos(substr($report, 0, $temp_int), "\r\nMRN:")-1) > -1) {
					//for (i = 0; i < 10; i++)
						//temp_int2 = $report.lastIndexOf("\r\n", temp_int2-1);
				} else {
					$temp_int2 = $temp_int;
					for ($i = 0; $i < 9; $i++)
						$temp_int2 = strrpos(substr($report, 0, $temp_int2-1), "\r\n");
				}
				$report = substr($report, 0, $temp_int2).substr($report, $temp_int+$header_length+1);
			}
		}
		// Erase erroneous new line characters
		$report = "\r\n".$report."\r\n";
		$text = '';
		$temp_int = -1;
		while (($temp_int = strpos($report, "\r\n", $temp_int+1)) > -1) {
			$temp_int++;
			//echo substr($report, $temp_int, strpos($report, "\r\n", $temp_int) - $temp_int)." => ".(strpos($report, " ", strpos($report, "\r\n", $temp_int)) - $temp_int)."<br>";
			if (strpos($report, " ", strpos($report, "\r\n", $temp_int)) - $temp_int > 61)
				$text .= substr($report, $temp_int, strpos($report, "\r\n", $temp_int) - $temp_int);
			else
				$text .= substr($report, $temp_int, strpos($report, "\r\n", $temp_int) - $temp_int)."\r\n";
		}
		$text = str_replace("--\r\n--", "----", $report);
		
		return trim($text);
	}

	public function extract_binary($file, $offset, $length, $dest)
	{
		$file = Mnode::get_file_share($file);
		
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
			$contents = fread($handle, $length);
			fclose($handle);
			//Mnode::fresh($dest);
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
	
	/*
	 * This function is used when displaying the study information. Used in Desktop
	 */
	public function study()
	{
		$site		 = Arr::get($_GET, 'site');
		$study_uid	 = Arr::get($_GET, 'study');
		$accession	 = Arr::get($_GET, 'acc');

		if ($site == '')
		{
			if ($accession == '')
			{
				echo "The study could not be retrieved because study site and accession number was lost.";
				exit;
			}
			// Not enough information to show the study. Redirect to worklist showing the matching search results instead
			header( 'Location: search?search='.$accession.'&searched=Accession' ) ;
			exit;
		}
		else if ($study_uid == '' AND $accession == '')
		{
			echo "The study could not be retrieved because study accession number was lost.";
			exit;
		}
		/*else if ($study_uid == '' OR $accession == '' OR $description == '')
		{
			// Run an extra query to obtain the studyUID, accession, and description
			// Get the patient information
			$query = "SELECT STUDY.INSTANCE_EUID, NVL(STUDY.RIS_STUDY_EUID,'N/A') AS ACCESSION, MODALITY.NAME AS MODALITY, '[' || SUBSTR(STUDY_STATUS.STATUS,1,1) || '] ' || PROCEDURE_INFO.DESCRIPTION AS DESCRIPTION 
						FROM STUDY 
						LEFT JOIN STUDY_STATUS ON STUDY_STATUS.CODE = STUDY.STATUS
						LEFT JOIN PROCEDURE_INFO ON PROCEDURE_INFO.ID = STUDY.PROCEDURE_INFO_UID
						LEFT JOIN MODALITY ON MODALITY.ID = PROCEDURE_INFO.MODALITY_UID ";
			$query .= $study_uid == '' ? "WHERE STUDY.RIS_STUDY_EUID='".$accession."'" : "WHERE STUDY.INSTANCE_EUID='".$study_uid."'";
			$results = $this->execute($query);
			
			$study_uid = $results[0]['INSTANCE_EUID'];
			$accession = $results[0]['ACCESSION'];
			$modality  = $results[0]['MODALITY'];
			$description = $results[0]['DESCRIPTION'];
			if ($modality != substr($description, 4, 2) AND substr($description, 4, 2) != 'MA'
					AND substr($description, 4, 3) != 'PET') 
				{
					$description = substr($description, 0, 4).$modality.' '.substr($description, 4);
				}
		}*/
		
		// Setting some values
		$exam_file  = Mnode::$DIR_EXAM.$study_uid.Mnode::$TXT; //basic exam information
		
		if ($study_uid == '' OR !file_exists($exam_file))
		{
			// Get the exam information
			$query = "SELECT study.instance_euid as STUDY_UID, STUDY.RIS_STUDY_EUID as ACCESSION, patient.internal_euid as MRN, patient.last_name || ', ' || patient.first_name as NAME, 
			STUDY_STATUS.STATUS, PROCEDURE_INFO.DESCRIPTION, MODALITY.NAME as MODALITY
			from study 
			left join patient on patient.id = study.patient_uid 
			LEFT JOIN STUDY_STATUS ON STUDY_STATUS.CODE = STUDY.STATUS
			LEFT JOIN PROCEDURE_INFO ON PROCEDURE_INFO.ID = STUDY.PROCEDURE_INFO_UID
			LEFT JOIN MODALITY ON MODALITY.ID = PROCEDURE_INFO.MODALITY_UID ";
			if ($study_uid != '')
			{
				$query .= "where study.instance_euid='".$study_uid."'";
			}
			else
			{
				$query .= "where STUDY.RIS_STUDY_EUID='".$accession."'";
			}
			$exam_results = $this->execute($query);
			$exam_results = array_change_key_case($exam_results[0]);
			$exam_results['site'] = $site;
			// The rest of the queries are executed using the study_uid. we must ensure that it is set here
			$study_uid = $exam_results['study_uid'];
			
			// Redefine the exam file with the known studyUID
			$exam_file  = Mnode::$DIR_EXAM.$study_uid.Mnode::$TXT; //basic exam information
			// Saving the results into the file (caching)
			Mnode::fresh($exam_file);
			file_put_contents($exam_file, json_encode($exam_results));
		}
		
		$meta_file = Mnode::$DIR_META.'img-'.$study_uid.Mnode::$TXT; //meta information for all study images
		$docs_file = Mnode::$DIR_META.'doc-'.$study_uid.Mnode::$TXT; //information for all study documents (attachments)

		if ( ! file_exists($meta_file) OR ! file_exists($docs_file))// OR ! file_exists($exam_file))
		{

			// Get the images information (From study)
			// Populate JSON img file (can include rows and columns here)
			// TODO: sometimes the same image can be stored at multiple sites, returning duplicates here. does IMAGE_VERSION.IMAGE_INVALID_DATE IS NULL fix it or cause more problems?
			$query = "SELECT IMAGE, MODALITY, SOP, CID, BOOKMARK, SERIES_UID, OBJECT_UID, REMOTE_AE, FILENAME, IMAGE_COUNT, DESCRIPTION, OFFSET, LENGTH, ROW_COUNT, COLUMN_COUNT FROM (
				SELECT ROW_NUMBER() OVER (ORDER BY IMAGE.ID ASC) AS IMAGE, MODALITY.NAME AS MODALITY, IMAGE.SOP_CLASS_UID AS SOP, IMAGE.MULTI_FRAME_IMAGE_CID AS CID, IMAGE.BOOKMARK AS BOOKMARK, SERIES.INSTANCE_EUID AS SERIES_UID, IMAGE.SOP_INSTANCE_EUID AS OBJECT_UID,  IMAGE.REMOTE_AE_UID AS REMOTE_AE, 		
				CONCAT(STORAGE.UNC_PATH, IMAGE_VERSION.FILENAME) AS FILENAME, IMAGE.ROW_COUNT, IMAGE.COLUMN_COUNT,
				IMAGE_VERSION.ID AS IMAGE_VERSION, SERIES.IMAGE_COUNT, NVL(SERIES.SERIES_DESC,'-') AS DESCRIPTION, STORAGE.EUID, IMAGE_VERSION.OFFSET, IMAGE_VERSION.LENGTH 
				FROM STUDY 
				LEFT JOIN PROCEDURE_INFO ON PROCEDURE_INFO.ID = STUDY.PROCEDURE_INFO_UID
				LEFT JOIN MODALITY ON MODALITY.ID = PROCEDURE_INFO.MODALITY_UID 
				LEFT JOIN SERIES ON SERIES.STUDY_UID = STUDY.ID
				LEFT JOIN IMAGE ON IMAGE.SERIES_UID = SERIES.ID
				LEFT JOIN IMAGE_VERSION ON IMAGE_VERSION.IMAGE_UID = IMAGE.ID AND (IMAGE_VERSION.COMPRESSION_UID = -1 OR IMAGE_VERSION.COMPRESSION_UID = 10) AND IMAGE_VERSION.IMAGE_INVALID_DATE IS NULL
				LEFT JOIN STORAGE ON STORAGE.ID = IMAGE_VERSION.STORAGE_UID AND STORAGE.IS_ACTIVE = 'Y'
				WHERE STUDY.INSTANCE_EUID='".$study_uid."')
				WHERE IMAGE_VERSION IS NOT NULL";
			
			$images_results = $this->execute($query);

			Mnode::fresh($meta_file);
			file_put_contents($meta_file, json_encode($images_results));

			// Get the documents information
			$query = "SELECT ROW_NUMBER() OVER (ORDER BY DOCUMENT.STORAGE_UID, DOCUMENT.ID ASC) AS DOCUMENT, STORAGE.EUID, 
				CONCAT(STORAGE.UNC_PATH,REPLACE(DOCUMENT.FILENAME,'/','\')) AS FILENAME, DOCUMENT.NAME 
				FROM study 
				LEFT JOIN study_document ON study.id = study_document.study_uid 
				LEFT JOIN document ON study_document.document_uid = document.id AND document.is_obsolete = 'N'
				LEFT JOIN STORAGE ON STORAGE.ID = DOCUMENT.STORAGE_UID AND STORAGE.IS_ACTIVE = 'Y'
				WHERE STUDY.INSTANCE_EUID='".$study_uid."' AND DOCUMENT.STORAGE_UID IN (2,5)";
			
			$documents_results = $this->execute($query);
			
			// Checking if no documents or images were found
			if (count($images_results) == 0 AND count($documents_results) == 0)
			{
				$this->_loaded = FALSE;
				return FALSE;
			}

			Mnode::fresh($docs_file);
			file_put_contents($docs_file, json_encode($documents_results));
		}

		// Prepare the attached files by a windows background process
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-documents/'.$study_uid);

		// Prepare the study files and video clips by a windows background process
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-images/'.$study_uid);

		// Load patient identification data
		$this->exam = json_decode(file_get_contents($exam_file), TRUE);

		// Load images data
		$this->images = json_decode(file_get_contents($meta_file), TRUE);

		// Load documents data
		$this->documents = json_decode(file_get_contents($docs_file), TRUE);
		
		/*$this->vars = array(
			'study_uid'   => $this->exam['STUDY_UID'],
			'site'		  => $this->exam['SITE'],
			'accession'   => $this->exam['ACCESSION'],
			'description' => $this->exam['DESCRIPTION']
		);*/
		$this->_loaded = TRUE;
		return $this;
	}

	public function _worklist()
	{
		// Query at the worklist. Pretty much all the code comes from the old worklist, but just the creation of the query.
		// In general, the thing I don't quite understand is to filter the DBs from the sites based on types of query.
		$site	  = Arr::get($_GET, 'site', Kohana::config('database.default_site'));
		$search   = Arr::get($_GET, 'search', '');
		$searched = Arr::get($_GET, 'searched', '');
		$filter   = Arr::get($_GET, 'filter', '');
		$filtered = Arr::get($_GET, 'filtered', '');
		$page	  = Arr::get($_GET, 'page', 1);
		$count	  = Arr::get($_GET, 'count', 10);

		$start = ($page - 1) * $count;
		$end   = $start + $count;
		
		$results = array();
		
		//$limit = ' WHERE R BETWEEN '.($start+1).' AND '.$end;
		
		//if ($search != '') 
		//{
			// If searching, search both databases
			$limit = '';
		//} 

		// Prepare Query
		if ($searched == 'Patient' && $search != '') 
		{
			
			// Why this was the case Al?? To set the db to HCC only.
			//$dbs = array('HCC' => $this->_db['DB_HCC']);
			$criteria = 'OBSOLETE = \'N\'';
			$query = 'SELECT MRN, NAME, DOB, SEX from (
					SELECT ROW_NUMBER() OVER (ORDER BY LAST_NAME, FIRST_NAME ASC) AS R, external_eid as MRN, LAST_NAME || \', \' || FIRST_NAME AS NAME,
					TO_CHAR(BIRTH_DATE, \'YYYY-MM-DD\') AS DOB, GENDER AS SEX FROM PATIENT ';
			if (strlen($search) > 1 && is_numeric(substr($search, 1)))
			{
				// Searching by MRN
				while(substr($search,0,1) == '0')
					$search = substr($search,1);
				$query .= 'WHERE EXTERNAL_EID LIKE \'%'.trim($search).'%\' ';
			}
			else
			{
				// Searching by Name
				if (strpos($search, ',') === FALSE)
				{
					$query .= 'WHERE UPPER(LAST_NAME) LIKE \'%'.trim(strtoupper($search)).'%\' ';
				}
				else
				{
					$query .= 'WHERE UPPER(LAST_NAME) LIKE \'%'.trim(strtoupper(substr($search, 0, strpos($search, ',')))).'%\' 
							  AND UPPER(FIRST_NAME) LIKE \'%'.trim(strtoupper(substr($search, strpos($search, ',')+1))).'%\' ';
				}
			}
			$query .= 'AND '.$criteria.')';
		}
		else 
		{
			//TODO:
			// default worklist should only show studies with images available
			// check if the studies that lack images are compressed! (ex: 712602)
			$criteria = 'STUDY.STATUS >= 40 AND (STUDY.IMAGE_COUNT > 0 OR MODALITY.NAME LIKE \'RF%\')';
			//$criteria = ' (STUDY.IMAGE_COUNT > 0 OR MODALITY.NAME LIKE \'RF%\')';
			
			$query = 'SELECT ACCESSION, DESCRIPTION, BODY_PART, TO_CHAR(STUDY_TIMEDATE, \'YYYY-MM-DD HH24:MI:SS\') AS TIME, MODALITY, INSTANCE_EUID FROM (
					SELECT ROW_NUMBER() OVER (ORDER BY MAX(STUDY.STUDY_TIMEDATE) DESC) AS R, STUDY.INSTANCE_EUID, NVL(STUDY.RIS_STUDY_EUID,\'N/A\') AS ACCESSION, MAX(MODALITY.NAME) AS MODALITY, \'[\' || SUBSTR(STUDY_STATUS.STATUS,1,1) || \'] \' || MAX(PROCEDURE_INFO.DESCRIPTION) AS DESCRIPTION, NVL(REPLACE(MAX(BODY_PART.NAME),\'Unknown\',\'-\'),\'-\') AS BODY_PART, MAX(STUDY.STUDY_TIMEDATE) AS STUDY_TIMEDATE
					FROM STUDY
					LEFT JOIN STUDY_STATUS ON STUDY_STATUS.CODE = STUDY.STATUS
					LEFT JOIN PROCEDURE_INFO ON PROCEDURE_INFO.ID = STUDY.PROCEDURE_INFO_UID
					LEFT JOIN MODALITY ON MODALITY.ID = PROCEDURE_INFO.MODALITY_UID 
					LEFT JOIN PROC_INFO_BODY_PART ON PROC_INFO_BODY_PART.PROCEDURE_INFO_UID = STUDY.PROCEDURE_INFO_UID
					LEFT JOIN BODY_PART ON BODY_PART.ID = PROC_INFO_BODY_PART.BODY_PART_UID ';
			
			
			// Filtering by the search criteria
			if ($search != '')
			{
				$query .= ($searched == 'Accession') ? 'WHERE STUDY.RIS_STUDY_EUID LIKE \'%'.$search.'\'' : '';
				$query .= ($searched == 'MRN') ? 'LEFT JOIN PATIENT ON PATIENT.ID = STUDY.PATIENT_UID WHERE PATIENT.INTERNAL_EUID=\''.$search.'\'' : '';
				$query .= ($searched == 'DOS') ? 'WHERE STUDY.STUDY_TIMEDATE > TO_DATE(\''.date('m-d-Y H:i:s', strtotime($search)).'\',\'MM-DD-YYYY HH24:MI:SS\') AND STUDY.STUDY_TIMEDATE < TO_DATE(\''.date('m-d-Y H:i:s', strtotime($search.' +1 day')).'\',\'MM-DD-YYYY HH24:MI:SS\')' : '';
				$query .= ' AND '.$criteria;
			}
			else
			{
				$query = str_replace('YYYY ', '', $query);
				//$query .= 'WHERE '.$criteria.' AND STUDY.RIS_STUDY_EUID IS NOT NULL AND STUDY.STUDY_TIMEDATE > TO_DATE(\''.date('m.d.Y H:i:s', strtotime('-1 days')).'\',\'MM-DD-YYYY HH24:MI:SS\')';
				$query .= 'WHERE '.$criteria.' AND STUDY.RIS_STUDY_EUID IS NOT NULL AND STUDY.STUDY_TIMEDATE > TO_DATE(\''.date('m.d.Y H:i:s', strtotime('-1 week')).'\',\'MM-DD-YYYY HH24:MI:SS\') AND STUDY.STUDY_TIMEDATE < TO_DATE(\''.date('m.d.Y H:i:s', strtotime('+1 day')).'\',\'MM-DD-YYYY HH24:MI:SS\')';
				//$query .= 'WHERE '.$criteria.' AND STUDY.RIS_STUDY_EUID IS NOT NULL';
			}

			// Filtering by the filter
			if ($filter != '')
			{
				$query .= ($filtered == 'Modality') ? ' AND MODALITY.NAME=\''.strtoupper($filter).'\'' : '';
				$query .= ($filtered == 'Division') ? ' AND BODY_PART.NAME=\''.ucfirst(strtolower($filter)).'\'' : '';
				$query .= ($filtered == 'Procedure') ? ' AND UPPER(PROCEDURE_INFO.DESCRIPTION) LIKE \'%'.strtoupper($filter).'%\'' : '';
			}
			$query .= ' GROUP BY STUDY.INSTANCE_EUID, STUDY_STATUS.STATUS, NVL(STUDY.RIS_STUDY_EUID,\'N/A\'))';
		}
		$query .= $limit;
		
		$results = $this->execute($query);
		// Return the output from execution.
		return $results;
	}

	/* Function that executes the query.
	 * TODO: Move this to an Oracle Driver?
	 */
	public function execute($query = NULL)
	{
		if ($query !== NULL)
		{
			$this->_query = $query;
		}
		
		$results = array();

		// Connect here
		$con = oci_connect($this->_db['user'], $this->_db['password'], $this->_db['connection']);
		if ( ! $con)
		{
			$m = oci_error();
			$this->message = 'Could not connect to the '.$site.' Synapse database.';
			return FALSE;
		}

		// Query the Database
		$stid = oci_parse($con, $this->_query);
		oci_execute($stid);

		while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
		{
			// Just return the output here. No massaging of the output at the model, that is done at the view
			$results[] = $row;
		}

		// Close db connection
		oci_close($con);
		
		return $results;
	}
	
} // End Fuji_Synapse
