<?php 
$hostname_dose = "localhost";
$database_dose = "doseimg";
$username_dose = "icare";
$password_dose = "\$icare_Lab"; 
$con= mysql_pconnect($hostname_dose, $username_dose, $password_dose);
mysql_select_db($database_dose, $con); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/auth.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iCare</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
</head> 
<?php
//echo $_GET["PatientID"];
//$PatientID=$_GET["PatientID"];
$Restrict="SELECT dcm_PatientID,dcm_StudyDate,dcm_StudyDescription,total_series,dcm_StudyInstanceUID,id
FROM studies
WHERE dcm_PatientID='".$_GET["PatientID"]."';";
$result = mysql_query($Restrict,$con) or die(mysql_error());

?>
<body>
<div class="container">
<?php include 'template/menu.php';?>

<div class="navbar"> 
   <button type="button" id="MR"  class="btn"><a href="ALL_tab.php?Number=10" id="Back_but">HOME</button> 
   <button type="button" class="btn" id="MR"><a href="MR_tab.php?Number=10" id="MR_but">MR Study</a></button>
   <button type="button" class="btn" id="CT"><a href="CT_tab.php?Number=10" id="CT_but">CT Study</a></button>
</div>
</body>
<table class="table">
<tr>
<th>PatientID</th>
<th>Study_Date</th>
<th>Study_Description</th>
<th>Total_Image</th>
</tr>
<?php
while($row = mysql_fetch_array($result))
  {
  $study_url="study_MR.php?UID=".$row['id'];
  echo "<td><a href=".$study_url.">" . $row['dcm_PatientID'] . "</a></td>";
  echo "<td>" . $row['dcm_StudyDate'] . "</td>";
  echo "<td>" . $row['dcm_StudyDescription'] . "</td>";
  echo "<td>" . $row['total_series'] . "</td>";
  echo "<tr>";
 
  echo "</tr>";
  }
  ?>
 </table>
 </div>
 </body>

</html>