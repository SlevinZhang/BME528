<?php

header('Content-type: text/json');

	$con = mysql_connect('localhost', 'icare', '\$icare_Lab');
	
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("doseimg", $con);

	$sql = "SELECT * FROM `fabric` WHERE `dcm_SeriesInstanceUID`='{$_POST['series_id']}' AND `dcm_index`='{$_POST['dcm_index']}' and user='{$_POST['user']}'";

	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}

	$result = mysql_query($sql);
		
	while($row = mysql_fetch_array($result))
	{
		echo json_encode($row);
	}

	mysql_close($con);

?> 