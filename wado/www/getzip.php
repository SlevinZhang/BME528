<?php
	$docroot = $_SERVER['DOCUMENT_ROOT'];
	$pre = "https://";
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

	$sql = "SELECT s.id AS studyID,s.patientID_id AS patientID FROM studies s WHERE s.dcm_StudyInstanceUID = '$studyUID'";
	$result = mysql_query($sql);
	$workpath = $docroot.'/wado/kohana/application/data/DICOM/';
	$row = mysql_fetch_array($result);
		chdir($workpath);
		$filename = $row['patientID'].'/'.$row['studyID'];
//		echo $filename;	
	ini_set('display_errors', 1);
	set_time_limit(0);
	if(!file_exists("$filename.zip"))
	{
	try
	{
		shell_exec("zip -r $filename.zip $filename");
		chmod("$filename.zip",777);

	}
	catch (Exception $e)
	{
		echo 'File failed. '.$e->getMessage()."\n";
	}
	}
	$downlink = $pre.$_SERVER['HTTP_HOST'].'/wado/kohana/application/data/DICOM/'.$row['patientID'].'/'.$row['studyID'].".zip";
 	echo "<h1>Donwload Link</h1><a href=\"$downlink\">$downlink</a>";

	mysql_close($con);
	
	
?>