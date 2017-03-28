<?php require_once('Connections/dose.php'); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/auth.php');?>
<?php
$db_selected = mysql_select_db('doseimg',$dose);
$query = "SELECT dcm_StudyInstanceUID AS stu_uid,dcm_AccessionNumber AS acn,dcm_StudyDescription AS stu_des,dcm_StudyDate AS stu_date FROM studies";
$res = mysql_query($query) or die(mysql_error());
mysql_select_db($database_dose,$dose);

?>
<iframe src="/wado/www/admin" width="100%" height="1000px" frameBorder="0">
</iframe>
<table class="table table-striped">
<tr>
<th>Sujbect ID</th>
<th>Accessiont Number</th>
<th>Description</th>
<th>Date</th>
</tr>
<?php
while($row = mysql_fetch_array($res))
{
	$stu_uid = $row['stu_uid'];
echo "<tr><a href=\"wado/www/admin/study?site=IPILab&study_uid=$stu_uid\"></td><td></td><td><a href=\"wado/www/admin/study?site=IPILab&study_uid=$stu_uid\">".$row['acn']."</a></td><td><a href=\"wado/www/admin/study?site=IPILab&study_uid=$stu_uid\">".$row['stu_des']."</a></td><td><a href=\"wado/www/admin/study?site=IPILab&study_uid=$stu_uid\">".$row['stu_date']."</a></td></tr>";

}

?>
</table>