<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fuji_Prosolv extends Model_Fuji {

	
	public function __construct()
	{
		// Create the object from parent
		//parent::__construct('fuji');
	}
	
	public function _patient_studies()
	{
		$search		 = Arr::get($_GET, 'search', '');
		
		/////////////////////////////////////////////////////////////////
		// Prepare Query
		//TODO:
		// default worklist should only show studies with images available
		// check if the studies that lack images are compressed! (ex: 712602)
		$query = "WITH Studies AS (
				select ROW_NUMBER() OVER (ORDER BY exam.exam_date DESC) AS 'R', exam.exam_id as ACCESSION, isnull(exam.study_uid,'0.'+cast(exam.exam_id as varchar(20))) as INSTANCE_EUID, SUBSTRING(CONVERT(VARCHAR(12), exam.exam_date, 107),0,7)+' '+SUBSTRING(CONVERT(VARCHAR(8), exam.exam_date, 108),0,6) as TIME, 
				'['+(case when exam.finaldate is not null then 'F' when exam.prelim is not null then 'D' else 'C' end)+'] '+exam.exam_type as DESCRIPTION, 
				'' as MODALITY, exam.exam_loc as BODY_PART, exam.image_path
				from EXAM ";
		$query .= "left join patient on patient.pat_id = exam.pat_id WHERE PATIENT.iuh_id='".$search."'";
		$query .= ") SELECT ACCESSION, INSTANCE_EUID, TIME, DESCRIPTION, MODALITY, BODY_PART, image_path
				FROM Studies ";

		return $this->execute($query);
	}
	
	public function extract_binary($file, $offset, $length, $dest)
	{
		Mnode::copy_over_network($file, $dest);
	}
	
	/*
	 * This function is used when displaying the study information. Used in Desktop
	 */
	public function study()
	{
		$study_uid	 = Arr::get($_GET, 'study', '');
		$site		 = Arr::get($_GET, 'site');
		$accession	 = Arr::get($_GET, 'acc');
		$description = Arr::get($_GET, 'desc');

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
			$query = "SELECT exam.exam_id as ACCESSION, isnull(exam.study_uid,'0.'+cast(exam.exam_id as varchar(20))) as INSTANCE_EUID, '' as MODALITY, '['+(case when exam.finaldate is not null then 'F' when exam.prelim is not null then 'D' else 'C' end)+'] '+exam.exam_type as DESCRIPTION
						from EXAM ";
			if ($accession != '')
			{
				$query .= "WHERE exam.exam_id=".$accession;
			}
			else if (substr($study_uid, 0, 2) == '0.')
			{
				// this is a fake accession number
				$query .= "WHERE exam.exam_id=".substr($study_uid,2);
			}
			else
			{
				$query .= "WHERE exam.study_uid='".$study_uid."'";
			}
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
		$exam_file  = Mnode::$DIR_EXAM.$study_uid.Mnode::$TXT;

		if ($study_uid == '' OR !file_exists($exam_file))
		{
			// Get the exam information
			$query = "SELECT isnull(exam.study_uid,'0.'+cast(exam.exam_id as varchar(20))) as STUDY_UID, exam.exam_id as ACCESSION, patient.iuh_id as MRN, patient.name_l + ', ' + patient.name_f as NAME, 
						(case when exam.finaldate is not null then 'Finalized' when exam.prelim is not null then 'Dictated' else 'Completed' end) as STATUS, '['+(case when exam.finaldate is not null then 'F' when exam.prelim is not null then 'D' else 'C' end)+'] '+exam.exam_type as DESCRIPTION, '' as MODALITY
						from EXAM 
						left join PATIENT on EXAM.pat_id = PATIENT.pat_id ";
			if ($accession != '')
			{
				$query .= "WHERE exam.exam_id=".$accession;
			}
			else if (substr($study_uid, 0, 2) == '0.')
			{
				// this is a fake accession number
				$query .= "WHERE exam.exam_id=".substr($study_uid,2);
			}
			else
			{
				$query .= "WHERE exam.study_uid='".$study_uid."'";
			}
			$exam_results = $this->execute($query);
			$exam_results = array_change_key_case($exam_results[0]);
			$exam_results['site'] = $site;
			// The rest of the queries are executed using the study_uid. we must ensure that it is set here
			$study_uid = $exam_results['study_uid'];
			
			// Redefine the exam file with the known studyUID
			$exam_file  = Mnode::$DIR_EXAM.$study_uid.Mnode::$TXT;
			// Saving the results into the file (caching)
			Mnode::fresh($exam_file);
			file_put_contents($exam_file, json_encode($exam_results));
		}
		
		$meta_file = Mnode::$DIR_META.'img-'.$study_uid.Mnode::$TXT;
		$documents_results_file = Mnode::$DIR_META.'doc-'.$study_uid.Mnode::$TXT;
		
		if ( ! file_exists($meta_file) OR ! file_exists($documents_results_file))// OR ! file_exists($pid_file))
		{

			// Get the patient information
			$query = "select patient.iuh_id as MRN, patient.name_l + ', ' + patient.name_f as NAME from exam left join patient on exam.pat_id = patient.pat_id where exam.exam_id = ".$accession;
			$patient_results = $this->execute($query);
			
			// Saving the results into the file (caching)
			Mnode::fresh($pid_file);
			file_put_contents($pid_file, json_encode($patient_results[0]));

			$query = "SELECT image_path, (case when archive_path is null then 0 when archive_path = '' then 0 else 1 end) as archived from exam WHERE exam.exam_id='".$accession."'";
			$results = $this->execute($query);
			$path = ($results[0]['archived'] == 0) ? "\\\\128.125.97.161\\i$\\ProSolv Database\\Images\\".str_replace("/", "\\", $results[0]['image_path']) : "\\\\128.125.97.161\\Archive\\images\\".str_replace("/", "\\", $results[0]['image_path']);
			//$path = "\\\\128.125.97.161\\Archive\\images\\".str_replace("/", "\\", $results[0]['image_path']);
			
			if ($dir = opendir($path)) {
				$files = array();
				while (false !== ($file = readdir($dir))) {
					if (is_file($path.$file) && $file != "." && $file != ".." && ($file == "report.htm" || (substr($file,0,6) != "report" && substr($file,0,10) != "thumbnails"))) {
						$files[] = $file; 
					}
				}
				closedir($dir);
			}
			if (count($files) == 0)
			{
				$html .= "<br><br><b>There are no images available for this study.<b>";
				echo $html;
				exit;
			}
			$skip = array();
			$images_results = array();
			$documents_results = array();
			foreach ($files as $file)
			{
				if (strpos($file, ".") === FALSE && (substr($file,0,2) != 'SR' || is_numeric(substr($file,2)) === FALSE))
				{	// Need to get more information regarding the modality, SOP, CID from the DCM header (dcmdump)
					$images_results[] = array('IMAGE' => (count($images_results)+1), 'TYPE' => 'PSV', 'MODALITY' => null, 'SOP' => null, 'CID' => null, 'BOOKMARK' => null, 'SERIES_UID' => "0.".(count($images_results)+1), 'OBJECT_UID' => "0.1", 'FILENAME' => $path.$file, 'IMAGE_COUNT' => 1, 'DESCRIPTION' => $file, 'OFFSET' => null, 'LENGTH' => null);
				}
				else
				{
					$valid = true;
					foreach ($skip as $item)
					{
						if (strpos($file, $item) !== FALSE)
							$valid = false;
					}
					if ($valid)
					{
						if ($file == "report.htm") {
							$documents_results[] = array('DOCUMENT' => (count($documents_results)+1), 'TYPE' => 'PSV', 'EUID' => 'Attachment', 'FILENAME' => $path.$file, 'NAME' => "Report");
						} else if (substr($file,0,2) == 'SR' && is_numeric(substr($file,2)) === TRUE) {
							$documents_results[] = array('DOCUMENT' => (count($documents_results)+1), 'TYPE' => 'PSV', 'EUID' => 'Attachment', 'FILENAME' => $path.$file, 'NAME' => "Structured Report");
						} else if (substr($file,-4) == ".jpg") {
							$skip[] = substr($file,0,-5);
							$documents_results[] = array('DOCUMENT' => (count($documents_results)+1), 'TYPE' => 'PSV', 'EUID' => 'Attachment', 'FILENAME' => $path.$file, 'NAME' => substr($file,0,-5));
						} else if (substr($file,-4) == ".tif") {
							$skip[] = substr($file,0,-5);
							$documents_results[] = array('DOCUMENT' => (count($documents_results)+1), 'TYPE' => 'PSV', 'EUID' => 'Attachment', 'FILENAME' => $path.$file, 'NAME' => substr($file,0,-5));
						}
					}
				}
			}
			// Reorder the files to correct naming sequence
			$images_results_temp = array();
			foreach ($images_results as $image)
			{
				$temp = $image['DESCRIPTION'];
				$order = '';
				while (is_numeric(substr($temp, -1)))
				{
					$order = substr($temp, -1).$order;
					$temp = substr($temp, 0 ,-1);
				}
				$images_results_temp[intval($order)-1] = $image;
			}
			$images_results = array();
			for ($i = 0; $i < count($images_results_temp); $i ++)
			{
				$images_results_temp[$i]['IMAGE'] = $i+1;
				$images_results[] = $images_results_temp[$i];
			}
			
			Mnode::fresh($meta_file);
			file_put_contents($meta_file, json_encode($images_results));

			Mnode::fresh($documents_results_file);
			file_put_contents($documents_results_file, json_encode($documents_results));
		}

		// Prepare the attached files by a windows background process
		//execute_command(Mnode::$DIR_PHP.'php'.Mnode::$EXE.' -f '.Mnode::$DIR_HTDOCS."w2".Mnode::$DIV."study_doc_prep.php -q ".$study);
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-documents/'.$study_uid);

		// Prepare the study files and video clips by a windows background process
		//execute_command(DIR_PHP."php.exe -f ".DIR_HTDOCS."w2".DIV."study_img_prep.php -q ".$study);
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-images/'.$study_uid);

		// Load patient identification data
		$this->exam = json_decode(file_get_contents($exam_file), TRUE);

		// Load images data
		$this->images = json_decode(file_get_contents($meta_file), TRUE);

		// Load documents data
		$this->documents = json_decode(file_get_contents($documents_results_file), TRUE);
		
		/*$this->vars = array(
			'study_uid'   => $study_uid,
			'site'		  => $site,
			'accession'   => $accession,
			'description' => $description
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
		
		//$limit = ' WHERE R BETWEEN '.($start+1).' AND '.$end;
		
		//if ($search != '') 
		//{
			// If searching, search both databases
			$limit = '';
		//}
		
		// Prepare Query
		if ($searched == 'Patient' AND $search != '') 
		{
			$query = "select iuh_id as MRN, name_l+', '+name_f as NAME, CONVERT(VARCHAR(10), dob, 120) as DOB, left(gender,1) as SEX
					from patient ";
			if (strlen($search) > 1 && is_numeric(substr($search, 1)))
			{
				// Searching by MRN
				while(substr($search,0,1) == '0')
					$search = substr($search,1);
				$query .= "where iuh_id like '%".trim($search)."%' ";
			}
			else
			{
				if (strpos($search, ',') === FALSE) 
				{
					$query .= "where name_l like '%".$search."%'";
				}
				else 
				{
					$query .= "where name_l like '%".trim(substr($search, 0, strpos($search, ',')))."%' and name_f like '%".trim(substr($search, strpos($search, ',')+1))."%'";
				}
			}
		}
		else
		{
			//TODO:
			// default worklist should only show studies with images available
			// check if the studies that lack images are compressed! (ex: 712602)
			/*$query = "WITH Studies AS (
					select ROW_NUMBER() OVER (ORDER BY exam.exam_date DESC) AS 'R', exam.exam_id as ACCESSION, '0.'+cast(exam.exam_id as varchar(20)) as INSTANCE_EUID, CONVERT(VARCHAR, exam.exam_date, 120) as TIME, 
					'['+(case when exam.finaldate is not null then 'F' when exam.prelim is not null then 'D' else 'C' end)+'] '+exam.exam_type as DESCRIPTION, 
					'' as MODALITY, exam.exam_loc as BODY_PART, exam.image_path
					from EXAM ";*/
			$query = "WITH Studies AS (
					select ROW_NUMBER() OVER (ORDER BY exam.exam_date DESC) AS 'R', exam.exam_id as ACCESSION, isnull(exam.study_uid,'0.'+cast(exam.exam_id as varchar(20))) as INSTANCE_EUID, CONVERT(VARCHAR, exam.exam_date, 120) as TIME, 
					'['+(case when exam.finaldate is not null then 'F' when exam.prelim is not null then 'D' else 'C' end)+'] '+exam.exam_type as DESCRIPTION, 
					'' as MODALITY, exam.exam_loc as BODY_PART, exam.image_path
					from EXAM ";
			if ($search != '')
			{
				$query .= ($searched == "Accession") ? "WHERE exam.exam_id = ".$search : "";
				$query .= ($searched == "MRN") ? "left join patient on patient.pat_id = exam.pat_id WHERE PATIENT.iuh_id='".$search."'" : "";
				$query .= ($searched == "DOS") ? "WHERE exam.exam_date > CONVERT( DATETIME, '".date('Y-m-d H:i:s', strtotime($search))."', 120 ) AND exam.exam_date < CONVERT( DATETIME, '".date('Y-m-d H:i:s', strtotime($search.' +1 day'))."', 120 )" : "";
			}
			else
			{
				$query .= "WHERE exam.exam_date > CONVERT( DATETIME, '".date('Y-m-d H:i:s', strtotime('-1 week'))."', 120 ) 
								AND exam.exam_date < CONVERT( DATETIME, '".date('Y-m-d H:i:s', strtotime('+1 day'))."', 120 )";
			}
			if ($filter != '')
			{
				$query .= ($filtered == "Modality") ? " AND exam.exam_type = '".strtoupper($filter)."'" : "";
				$query .= ($filtered == "Division") ? " AND exam.exam_loc = '".$filter."'" : "";
				$query .= ($filtered == "Procedure") ? " AND exam.exam_type LIKE '%".strtoupper($filter)."%'" : "";
			}

			$query .= ") SELECT ACCESSION, INSTANCE_EUID, TIME, DESCRIPTION, MODALITY, BODY_PART, image_path
					FROM Studies ".$limit;
		}
		
		$results = $this->execute($query);
		// Return the output from execution.
		return $results;
	}

	public function execute($query = NULL)
	{
		if ($query !== NULL)
		{
			$this->_query = $query;
		}
		
		$results = array();

		// Connect to the database (host, username, password)
		$con = mssql_connect($this->_db['connection'], $this->_db['user'], $this->_db['password']);
		if ( ! $con)
		{
			$this->message = 'Could not connect to the '.$site.' Prosolv database.';
			return FALSE;
		}

		// Select a database:
		mssql_select_db($this->_db['database']);
		
		// Execute query:
		$result = mssql_query($this->_query);
		
		// Fetch rows:
		while ($row = mssql_fetch_assoc($result))
		{
			$results[] = $row;
		}
		// Close db connection
		mssql_close($con);
		$result = NULL;
		
		return $results;
	}
	
} // End Fuji_Prosolv
