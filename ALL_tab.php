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

$Restrict="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active';";
$result = mysql_query($Restrict,$con) or die(mysql_error());
$Diff=array();
$row=array();
$ii=0;
while($row = mysql_fetch_array($result))
{
if($row['diff']==NULL)
{
if($row['stroke_date']==NULL or $row['stroke_date']=="0000-00-00")
{ $Diff[$ii]=999999;}
else
{
$d2= $row['dcm_StudyDate'];
$d1= $row['stroke_date'];
$datetime1 = date_create($d1);
$datetime2 = date_create($d2);
$interval = date_diff($datetime1, $datetime2);
$Diff[$ii]=$interval->format('%a');
}
$row['diff']=$Diff[$ii];
$update="UPDATE studies SET diff=".$row['diff']." WHERE dcm_StudyInstanceUID='".$row['dcm_StudyInstanceUID']."'";
mysql_query($update,$con);
}
}
if($_GET["ID"]==Null&&$_GET["Date"]==Null&&$_GET["Time"]==Null)
{
$keywords=$_GET["keywords"];

if($_GET["Diff"]==NUll or $_GET["Diff"]=='ASC_Diff' )
{
if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'
ORDER BY diff ASC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY diff ASC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY diff ASC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY diff ASC; "; 
}
}
else if($_GET["Diff"]=='DESC_Diff')


{
if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'
ORDER BY diff DESC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY diff DESC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY diff DESC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY diff DESC; "; 
}
 }
}
 else if($_GET["ID"]=='ASC_ID')
 {

if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'
ORDER BY dcm_PatientID ASC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_PatientID ASC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY dcm_PatientID ASC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_PatientID ASC; "; 
}
}
 else if($_GET["ID"]=='DESC_ID')
 {
 
if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
ORDER BY dcm_PatientID DESC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_PatientID DESC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY dcm_PatientID DESC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_PatientID DESC; "; 
}

}
 else if($_GET["Date"]=='ASC_Date')
 {

if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
ORDER BY dcm_StudyDate ASC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_StudyDate ASC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY dcm_StudyDate ASC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_StudyDate ASC; "; 
}
}
else if($_GET["Date"]=='DESC_Date')
{
 if($_GET["Description"]==NUll&&$_GET["PID"]==NUll)
{$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
ORDER BY dcm_StudyDate DESC;";}
else if($_GET["Description"]!=NUll&&$_GET["PID"]==NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_StudyDate DESC;"; 
} 
else if($_GET["Description"]==NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' ORDER BY dcm_StudyDate DESC;"; 
}
else if($_GET["Description"]!=NUll&&$_GET["PID"]!=NULL)
{
$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active'  
AND dcm_PatientID LIKE '%".$_GET["PID"]."%' AND dcm_StudyDescription LIKE '%".$_GET["Description"]."%' ORDER BY dcm_StudyDate DESC; "; 
}
}
else if($_GET["Time"]=='ASC_Time')
 {$Restrict1="SELECT DISTINCT studies.dcm_PatientID,studies.dcm_StudyDate,studies.dcm_StudyTime,studies.dcm_StudyDescription,patients.stroke_date,studies.diff,studies.dcm_StudyInstanceUID
FROM studies,series,patients
WHERE  studies.id=series.study_id AND patients.id = studies.patientID_id AND series.status='active' 
ORDER BY dcm_StudyTime ASC;";

}


$result_1 = mysql_query($Restrict1,$con) or die(mysql_error());
$totalRows_Recordset1 = mysql_num_rows($result_1 );
 ?>

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/wado/www/media/js2/jquery.cookie.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">

  var click_num=1;
  var a = new Array();
  var pre=0;
  a['dcm_PatientID']=new Array();
  a['dcm_StudyDate']=new Array();
  a['dcm_StudyTime']=new Array();
  a['stroke_date']=new Array();
  a['dcm_StudyDescription']=new Array();
  a['diff']=new Array();
  a['dcm_StudyInstanceUID']=new Array();
  a['report']=new Array();
  a['NA']=new Array();
    <?php
  $i=0;
  $strip=array("'","\n");
  $replace = array("\'","");
  while($row1 = mysql_fetch_array($result_1)){
  $Restrict_report="SELECT reviewer FROM case_report WHERE Study_uid='".$row1['dcm_StudyInstanceUID'] . "' ORDER BY last_modify_time LIMIT 0,1;";
  $result_report = mysql_query($Restrict_report,$con) or die(mysql_error());
  $totalRows_report=mysql_num_rows($result_report );
  //print_r ($totalRows_report);
   if($i<$totalRows_Recordset1)
   { $row1['dcm_StudyDescription']=str_replace($strip,$replace,$row1['dcm_StudyDescription']);
    // $row1['dcm_SeriesDescription']=str_replace($strip,$replace,$row1['dcm_SeriesDescription']);
    
	if($totalRows_report>0){
	while($row_report = mysql_fetch_array($result_report))
	{
	echo "a['report'][".$i."] ='".$row_report['reviewer']."';";
	
	}
	}
	else
	{
	echo "a['report'][".$i."] ='NA';";
	
	}
	
    echo "a['dcm_PatientID'][".$i."] = '" . $row1['dcm_PatientID'] . "';"; 
    echo "a['dcm_StudyDate'][".$i."] = '" . $row1['dcm_StudyDate'] . "';"; 
	echo "a['dcm_StudyTime'][".$i."]= '" . $row1['dcm_StudyTime'] . "';"; 
	echo "a['stroke_date'][".$i."] = '" . $row1['stroke_date'] . "';";
	echo "a['dcm_StudyDescription'][".$i."] = '" . $row1['dcm_StudyDescription'] . "';";
	echo "a['diff'][".$i."]= '" . $row1['diff'] . "';";
	echo "a['dcm_StudyInstanceUID'][".$i."]= '" . $row1['dcm_StudyInstanceUID'] . "';";
	$i=$i+1;
  }
  }
  ?>
  var total=<?php echo $totalRows_Recordset1;?>;
  var i=0;
  var number="<?php echo $_GET["Number"];?>"; 
  $(document).ready(function(){
   if(number=="")
   {creatTab_50(0);}
  else if(number=="10")
  {creatTab_10(0);}
  else if(number=="20")
  {creatTab_20(0);}
  else if(number=="50")
  {creatTab_50(0);}
  });
function PatientID(id)
{ var PatientID=id.innerHTML;
  var str="patient_id.php?PatientID=";
  var n=str.concat(PatientID);
  id.setAttribute("href",n);
  
  }
function Order_ID(id)
{ var ID="<?php echo $_GET["ID"];?>";
if(ID=="")
{ ID="ASC_ID";} 
else if(ID=="ASC_ID")
{ 
ID="DESC_ID";
}
else
{
ID="ASC_ID";
}
var str1 ="ALL_tab.php?PID="+"<?php echo $_GET["PID"];?>"+"&Number="+"<?php echo $_GET["Number"];?>"+"&Description="+"<?php echo $_GET["Description"];?>"+"&ID=";
var n = str1.concat(ID);
id.setAttribute("href",n);

}
function Order_Date(id)
{ var Date="<?php echo $_GET["Date"];?>";
if(Date=="")
{ Date="ASC_Date";} 
else if(Date=="ASC_Date")
{ 
Date="DESC_Date";
}
else
{
Date="ASC_Date";
}
var str1 ="ALL_tab.php?PID="+"<?php echo $_GET["PID"];?>"+"&Number="+"<?php echo $_GET["Number"];?>"+"&Description="+"<?php echo $_GET["Description"];?>"+"&Date=";
var n = str1.concat(Date);
id.setAttribute("href",n);

}

function Order_Diff(id)
{ var Diff="<?php echo $_GET["Diff"];?>";
if(Diff=="")
{ Diff="ASC_Diff";} 
else if(Diff=="ASC_Diff")
{ 
Diff="DESC_Diff";
}
else
{
Diff="ASC_Diff";
}
var str1 ="ALL_tab.php?PID="+"<?php echo $_GET["PID"];?>"+"&Number="+"<?php echo $_GET["Number"];?>"+"&Description="+"<?php echo $_GET["Description"];?>"+"&Diff=";
var n = str1.concat(Diff);
id.setAttribute("href",n);

}
function creatTab_10(num)
{ 
  var start=10*num;

  var num_id=num.toString();
  var end=10*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_ID(this)' style='cursor:pointer');>PatientID</a></th><th><a onclick='Order_Date(this)' style='cursor:pointer'>StudyDate</a></th><th><a href='ALL_tab.php?Time=ASC_Time&Number=10'>StudyTime</a></th><th>Stroke Date</th><th>StudyDescription</th><th><a onclick='Order_Diff(this)' style='cursor:pointer'>Study Date-Stroke Date</a></th><th>Reviewer</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_ID="<a onclick='PatientID(this)' style='cursor:pointer'>"+a['dcm_PatientID'][m]+"</a>";
var newlink_Date="<a href="+study_url+">"+a['dcm_StudyDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_StudyTime'][m]+"</a>";
var newlink_Stroke="<a href="+study_url+">"+a['stroke_date'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_StudyDescription'][m]+"</a>";
var newlink_diff="<a href="+study_url+">"+a['diff'][m]+"</a>";
var newlink_reviewer="<a href="+study_url+">"+a['report'][m]+"</a>";

tabstr = tabstr+"<tr><td>"+newlink_ID+"</td><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Stroke+"</td><td>"+newlink_Des+"</td><td>"+newlink_diff+"</td><td>"+newlink_reviewer+"</td></tr>";
 }  
$("#addtable").append(tabstr);
}
function creatTab_20(num)
{ 
  var start=20*num;
  var num_id=num.toString();
  var end=20*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_ID(this)' style='cursor:pointer'>PatientID</a></th><th><a onclick='Order_Date(this)' style='cursor:pointer'>StudyDate</a></th><th><a href='ALL_tab.php?Time=ASC_Time&Number=10'>StudyTime</a></th><th>Stroke Date</th><th>StudyDescription</th><th><a onclick='Order_Diff(this)' style='cursor:pointer'>Study Date-Stroke Date</a></th><th>Reviewer</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_ID="<a onclick='PatientID(this)' style='cursor:pointer'>"+a['dcm_PatientID'][m]+"</a>";
var newlink_Date="<a href="+study_url+">"+a['dcm_StudyDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_StudyTime'][m]+"</a>";
var newlink_Stroke="<a href="+study_url+">"+a['stroke_date'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_StudyDescription'][m]+"</a>";
var newlink_diff="<a href="+study_url+">"+a['diff'][m]+"</a>";
var newlink_reviewer="<a href="+study_url+">"+a['report'][m]+"</a>";
tabstr = tabstr+"<tr><td>"+newlink_ID+"</td><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Stroke+"</td><td>"+newlink_Des+"</td><td>"+newlink_diff+"</td><td>"+newlink_reviewer+"</td></tr>";
}  
$("#addtable").append(tabstr);
}
function creatTab_50(num)
{ 
  var start=50*num;
  var num_id=num.toString();
  var end=50*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_ID(this)'style='cursor:pointer' >PatientID</a></th><th><a onclick='Order_Date(this)' style='cursor:pointer'>StudyDate</a></th><th><a href='ALL_tab.php?Time=ASC_Time&Number=10'>StudyTime</a></th><th>Stroke Date</th><th>StudyDescription</th><th><a onclick='Order_Diff(this)' style='cursor:pointer'>Study Date-Stroke Date</a></th><th>Reviewer</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_ID="<a onclick='PatientID(this)' style='cursor:pointer'>"+a['dcm_PatientID'][m]+"</a>";
var newlink_Date="<a href="+study_url+">"+a['dcm_StudyDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_StudyTime'][m]+"</a>";
var newlink_Stroke="<a href="+study_url+">"+a['stroke_date'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_StudyDescription'][m]+"</a>";
var newlink_diff="<a href="+study_url+">"+a['diff'][m]+"</a>";
var newlink_reviewer="<a href="+study_url+">"+a['report'][m]+"</a>";
tabstr = tabstr+"<tr><td>"+newlink_ID+"</td><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Stroke+"</td><td>"+newlink_Des+"</td><td>"+newlink_diff+"</td><td>"+newlink_reviewer+"</td></tr>";
  }  
$("#addtable").append(tabstr);
}
function changenum(id)
{
var str1 ="ALL_tab.php?Number=";
var str2 = id.innerHTML;
var n = str1.concat(str2);
id.setAttribute("href",n);
var inner="<span style='color:red'>"+str2+"</span>";
id.append(inner);
}
 function Next()
{
if( number==10)
 {creatTab_10(click_num);}
 else if (number==20)
 {creatTab_20(click_num);}
 else
 {creatTab_50(click_num);}
var tab_id_now="#"+click_num.toString();
$(tab_id_now).show();
var click_num_post=click_num-1;
var tab_id_post="#"+click_num_post.toString();
$(tab_id_post).hide();
click_num++;
now_num=click_num*number;
document.getElementById('now').innerHTML ="This is "+(click_num-1)*number.toString()+" to "+now_num.toString()+" out of "+total;
$.cookie('pn',(click_num-1)*number,{ expires: 1 });
}
function Pre()
{
if(click_num<=0)
{ creatTab_10(0);}
else{
var click_num_pre=click_num-1;
var tab_id_now="#"+click_num_pre.toString();
$(tab_id_now).remove();
var click_num_post=click_num_pre-1;
var tab_id_post="#"+click_num_post.toString();
$(tab_id_post).show();
click_num=click_num-1;
now_num=click_num*number;
document.getElementById('now').innerHTML ="This is "+(click_num-1)*number.toString()+" to "+now_num.toString()+" out of "+total;
}
$.cookie('pn',(click_num-1)*number,{ expires: 1 });
}
</script >
<body>
<div class="container">
<?php include 'template/menu.php';?>

<div class="navbar"> 
   <button type="button" id="MR"  class="btn"><a href="ALL_tab.php?Number=10" id="Back_but">HOME</button> 
   <button type="button" class="btn" id="MR"><a href="MR_tab.php?Number=10" id="MR_but">MR Study</a></button>
   <button type="button" class="btn" id="CT"><a href="CT_tab.php?Number=10" id="CT_but">CT Study</a></button>
</div>
 <form id="form1"  formaction="ALL_tab.php" method="get">
 <input type="text" placeholder="Type StudyDescription" name="Description" >
<input type="text" placeholder="Type PatientID" name="PID" >
<input type="submit" class="btn btn-primary">
</form>
<div class="row">
<a onclick="javascript:Pre();" class="span1" style="cursor:pointer">Pre</a>
<div class="span2 offset8">
<a  onclick="javascript:changenum(this);" style="cursor:pointer">10</a>
<a onclick="javascript:changenum(this);" style="cursor:pointer">20 </a>
<a onclick="javascript:changenum(this);" style="cursor:pointer">50 </a>
</div>
<a onclick="javascript:Next()" class="span1" style="cursor:pointer">Next</a>


</div>
<p> The Total Number Of Results is : <?php echo $totalRows_Recordset1;?> </p>
<small id="now"></small>
<div id="addtable">
</div>
</div>
 </body>


<footer>
<div class="row">
<div class="span2 offset10"><?php echo date("Y-m-d");?></div>
<div class="span2 offset10"><a href="http://www.ipilab.org">Powered by IPI Lab</a></div>
</div>
<script type="text/javascript">
$(function(){
		$("input[type='submit']").addClass('btn btn_primary')
	
	});

$(document).ready(function() {
  $(window).keydown(function(event){
    if( event.keyCode == 13 ) {
      event.preventDefault();
      return false;
    }
  });
});

	$(function(){
	if($.cookie('pn')!=undefined)
		var pn=Math.floor($.cookie('pn')/number);
		while(pn>=1){
				Next();
				pn--;
			}
	});

</script>
</footer>


 </html>