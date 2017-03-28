<?php include 'preedit.php'; ?>
<?php include 'predisplay.php'; ?>
<?php
$hostname_dose = "127.0.0.1";
$database_dose = "doseimg";
$username_dose = "icare";
$password_dose = "\$icare_Lab";
$dose = mysql_pconnect($hostname_dose, $username_dose, $password_dose) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_dose, $dose); 
session_start();
//print_r($_SESSION);
?>
<?php 
$Study_uid=$_GET['study_uid'];
$Study_id=$_GET['patientID'];
$sql="SELECT  c.Study_id,c.Reviewer,c.ID,c.last_modify_time as date from case_report c where c.Study_uid='".$Study_uid."' ORDER BY c.last_modify_time ASC";
$sql1="SELECT  c.Study_id,c.Reviewer,c.ID,c.last_modify_time as date from case_report c where c.Study_uid='".$Study_uid."' ORDER BY c.last_modify_time DESC";
$result=mysql_query($sql,$dose) or die(mysql_error());
$result1=mysql_query($sql1,$dose) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">

<title>Case Reports List</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<style>
table, th, td
{
border: 1px solid black;
}
a
{color:black;}
</style>
<body><h1>Case Report List</h1>
<table class="table" id="table_asc">

<tr><th>Subject ID</th><th> Reviewer</th><th ><a id="data_asc">Date</a></th></tr>
<?php
mysql_data_seek($result, 0);
while($row=mysql_fetch_array($result))
{
echo "<tr><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row['Study_id']."&Reviewer=".$row['Reviewer']."&ID=".$row['ID']."'/>".$row['Study_id']."</td><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row['Study_id']."&Reviewer=".$row['Reviewer']."&ID=".$row['ID']."'/>".$row['Reviewer']."</td><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row['Study_id']."&Reviewer=".$row['Reviewer']."&ID=".$row['ID']."'/>".$row['date']."</td></tr>";
//print_r($row);
}
?>
</table>
<table class="table" id="table_desc" style="display:none">

<tr><th>Subject ID</th><th> Reviewer</th><th ><a id="data_desc">Data</a></th></tr>
<?php
mysql_data_seek($result, 0);

while($row1=mysql_fetch_array($result1))
{
echo "<tr><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row1['Study_id']."&Reviewer=".$row1['reviewer']."&ID=".$row1['ID']."'/>".$row1['Study_id']."</td><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row1['Study_id']."&Reviewer=".$row1['Reviewer']."&ID=".$row1['ID']."'/>".$row1['Reviewer']."</td><td><a href='CaseReportForm.php?Study_uid=".$Study_uid."&Study_id=".$row1['Study_id']."&Reviewer=".$row1['Reviewer']."&ID=".$row1['ID']."'/>".$row1['date']."</td></tr>";
//print_r($row);
}
?>
</table>
<a class="btn btn-primary" id="add_new" href="CaseReportForm.php?Study_uid=<?php echo $Study_uid;?>&Study_id=<?php echo $Study_id;?>">Add New Record</a>
</body>
<script>
<?php
mysql_data_seek($result, 0);
while($row11=mysql_fetch_array($result))
{ if($row11['Reviewer']==$_SESSION['MM_Username']){
?>
$('#add_new').click(function(e){
e.preventDefault();
alert("You have a record in the list, Please go to the list to find it for updating");});
<?php
}}
?>

</script>
<script>
$('#data_asc').click(function(){
$('#table_desc').show();
$('#table_asc').hide();
})
$('#data_desc').click(function(){
$('#table_asc').show();
$('#table_desc').hide();
})
</script>

</html>