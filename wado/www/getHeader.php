<?php
	$src = $_POST["imgsrc"];
	$srcs = parse_url($src);
	$query = $srcs[query];
	parse_str($query,$data);
	$studyUID = $data["studyUID"];
	$seriesUID = $data["seriesUID"];
	$objectUID = $data["objectUID"];
	
	$con = mysql_connect("localhost","icare","\$icare_Lab");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("doseimg", $con);

	$sql = "SELECT i.id AS imgID,e.id AS seriesID,s.id AS studyID,s.patientID_id AS patientID FROM images i,studies s,series e WHERE i.dcm_SOPInstanceUID = '$objectUID' AND i.series_id = e.id AND e.study_id = s.id";

	$result = mysql_query($sql);
	$workpath = '/home/pacsproxy/www/wado/kohana/application/data/DICOM/';
	while($row = mysql_fetch_array($result))
		{
		$filename = $workpath.$row[patientID].'/'.$row[studyID].'/'.$row[seriesID].'/'.$row[imgID].".dcm";
		}
	
	require_once '../kohana/application/vendor/nanodicom/nanodicom.php';
	ini_set('display_errors', 1);
	set_time_limit(0);
	try
	{
		$dicom = Nanodicom::factory($filename, 'dumper');
		echo $dicom->parse()->dump('html');
		unset($dicom);
		}
	catch (Exception $e)
	{
		echo 'File failed. '.$e->getMessage()."\n";
	}
 

	mysql_close($con);
	
	
?>