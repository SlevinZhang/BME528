<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_uscicare = "localhost";
$database_uscicare = "icare";
$username_uscicare = "doseimg";
$password_uscicare = "\$icare_Lab";
$uscicare = mysql_pconnect($hostname_uscicare, $username_uscicare, $password_uscicare) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_uscicare, $uscicare);
$query_Recordset1 = "SELECT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,series.dcm_SeriesDescription,series.dcm_Modality,series.total_images  FROM studies INNER JOIN series ON studies.id=series.study_id WHERE series.status='active';";
$Recordset1 = mysql_query($query_Recordset1, $uscicare) or die(mysql_error());

$totalRows_Recordset1 = mysql_num_rows($Recordset1);
var_dump($Recordset1);
die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
<th>Patient ID
</th>
<th>Study Date
</th>
<th>Series Description 
</th>
<th>Number of images per series
</th>
<th> modality
</th>
<th>Slice Thickness
</th>
</tr>
<?php 
//for($i=0;$i<1;$i++)
for($i=0;$i<$totalRows_Recordset1;$i++)
{
	echo "<tr>";
	echo "<td>";
	echo 	$row_Recordset1['PatientID'];
	echo "</td>";
	echo "<td>";
	echo 	$row_Recordset1[''];
	echo "</td>";
	echo "<td>";
	$row_Recordset2 = mysql_fetch_assoc($Recordset2);
	if($row_Recordset2['Description']==null)
	echo "No Descriptions";
	else
	echo $row_Recordset2['Description'];
	echo "</td>";
	echo "<td>";
	echo $row_Recordset2['number_of_images'];
	echo "</td>";
	echo "<td>";
	echo $row_Recordset1['Modality'];
	echo "</td>";
		$folder = "data/".$row_Recordset1['PatientID'].'/'.$row_Recordset1['StudyInstanceUID'].'/'.$row_Recordset2['SeriesInstanceUID'];
//			echo $folder;
		$thickness = getthick($folder);
	echo "<td>";

	echo $thickness;
	echo "</td>";
	echo "</tr>";
	for($j=1;$j<$totalRows_Recordset2;$j++)
	{
		$row_Recordset2 = mysql_fetch_assoc($Recordset2);

		echo "<tr><td>";
		if($row_Recordset2['Description']==null)
		echo "NO Descriptions";
		else
		echo $row_Recordset2['Description'];
		
	//	echo $row_Recordset2['Description'];
		echo "</td>";
		echo "<td>";
		echo $row_Recordset2['number_of_images'];
		echo "</td>";
		echo "<td>";
		echo $row_Recordset1['Modality'];
		echo "</td>";

				$folder = "./data/".$row_Recordset1['PatientID'].'/'.$row_Recordset1['StudyInstanceUID'].'/'.$row_Recordset2['SeriesInstanceUID'];
				$thickness = getthick($folder);
	echo "<td>";
	if($thickness)
	echo $thickness;
	elseif($row_Recordset2['Description']=='dose report')
	echo "report";
	elseif($row_Recordset1['Modality']=='CR')
	echo "CR";
	else
	echo "postprocessed";
	echo "</td>";

		echo "</tr>";
			
	}
}

?>
</table>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

