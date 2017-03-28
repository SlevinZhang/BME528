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
$Restrict="SELECT dcm_PatientID,dcm_StudyDate,dcm_StudyDescription,total_series,id,dcm_StudyInstanceUID
FROM studies
WHERE dcm_PatientID='".$_GET["PatientID"]."';";
$result = mysql_query($Restrict,$con) or die(mysql_error());
$totalRows_Recordset = mysql_num_rows($result );
?>

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>

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
<th>ID</th>
<th>Study_Date</th>
<th>Study_Description</th>
<th>Total_Image</th>

</tr>
<?php
 $i=0;
 $tabstr=null;
 $title="<table class=table><tr><th>Date</th><th>Time</th><th>Descriotion</th><th>Modality</th></tr>";
while($row = mysql_fetch_array($result))
  {
   $array_patientid[]=$row[0];
   $array_date[]=$row[1];
   $array_description[]=$row[2];
   $array_total[]=$row[3];
   $array_id[]=$row[4];
   $array_uid[]=$row[5];
  }
  
  //print_r($array_id[$i]);
   while($i<$totalRows_Recordset)
  {$tabstr=$tabstr."<table class=table><tr><th>Date</th><th>Time</th><th>Descriotion</th><th>Modality</th></tr>";
  
  $Restrict_study="SELECT series.dcm_SeriesDate,series.dcm_SeriesTime,series.dcm_SeriesDescription,series.dcm_Modality
  FROM series
  WHERE series.status='active' AND series.study_id='".$array_id[$i]."' ;";

  $result_study = mysql_query($Restrict_study,$con) or die(mysql_error());
  while($row_study  = mysql_fetch_array($result_study))
  {$tabstr=$tabstr."<tr><td>".$row_study['dcm_SeriesDate']."</td><td>".$row_study['dcm_SeriesTime']."</td><td>".$row_study['dcm_SeriesDescription']."</td><td>".$row_study['dcm_Modality']."</td></tr>";
  }  
 
  echo "<script> var tabstr".$i." =\"".$tabstr."\"; </script>";
   $study_url="wado/www/admin/study?site=IPILab&study_uid=".$array_uid[$i];
   if($i==0)
   {
  echo "<tr >";  
  echo "<td><a href=".$study_url.">" . $array_patientid[$i] . "</a></td>";
  echo "<td class='id' onmouseover='$(\"td\").find(\"table:last\").remove(); $(this).append(tabstr".$i."); ' style='cursor:pointer'>" . $array_id[$i] . "</td>";
  echo "<td><a href=".$study_url.">" . $array_date[$i]. "</a></td>";
  echo "<td><a href=".$study_url.">" . $array_description[$i] . "</a></td>";
  echo "<td ><a href=".$study_url.">" . $array_total[$i] . "</a></td>";
  echo "</tr>"; 
  //echo $tabstr;
  $i=$i+1;
  $tabstr=null;
  }
  else
  {
  echo "<tr >"; 
  echo "<td><a href=".$study_url."></a></td>";
  echo "<td class='id' onmouseover='$(\"td\").find(\"table:last\").remove(); $(this).append(tabstr".$i."); ' style='cursor:pointer'>" . $array_id[$i] . "</td>"; 
  echo "<td><a href=".$study_url.">" . $array_date[$i]. "</a></td>";
  echo "<td><a href=".$study_url.">" . $array_description[$i] . "</a></td>";
  echo "<td ><a href=".$study_url.">" . $array_total[$i] . "</a></td>";
  echo "</tr>"; 
  //echo $tabstr;
  $i=$i+1;
  $tabstr=null;
  }
  } 
	
  ?>
 </table>
 </div>
 </body>

</html>
