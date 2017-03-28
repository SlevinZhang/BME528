<?php

$con = mysql_connect('localhost', 'icare', '$icare_Lab');

if (!$con){
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("doseimg", $con);

$current_time_stamp = time();
$result = mysql_query("UPDATE fabric
	SET fabric='{$_POST[dcm_fabric]}', time_stamp='{$current_time_stamp}', fab_width='{$_POST[fab_width]}', fab_height='{$_POST[fab_height]}',lesion_no='{$_POST[lesion_no]}',lesion_index='{$_POST[lesion_index]}'
	WHERE dcm_index='{$_POST['dcm_index']}' AND dcm_SeriesInstanceUID='{$_POST['series_id']}' AND user='{$_POST[user]}';");         
if (mysql_affected_rows()==0) {
	$current_time_stamp = time();
    $result = mysql_query("INSERT INTO fabric (dcm_SeriesInstanceUID, dcm_index, fabric, time_stamp, fab_width, fab_height,user,lesion_no,lesion_index) 
	VALUES 
	('{$_POST[series_id]}', '{$_POST[dcm_index]}','{$_POST[dcm_fabric]}', '{$current_time_stamp}', '{$_POST[fab_width]}', '{$_POST[fab_height]}','{$_POST[user]}','{$_POST[lesion_no]}','{$_POST[lesion_index]}');") or die(mysql_error());
}

mysql_close($con);

?> 