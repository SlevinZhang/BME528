<?php require_once('Connections/dose.php'); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/auth.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>I&E Checklist</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<?php 
include "template/menutest.php";
?>
<fieldset><legend>Inclusion and Exclusion Criteria Checklist</legend>
<table border="1" class="table table-striped">
	<tr>
		<td></td>
		<td width="10%"align="center">Mark if Eligible</td>
	</tr>
	<tr>
		<td>1. Informed Consent</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>2. Diagnosis</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>3. Age</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>4. Hemiparesis</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>5. Sensation</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>6. Neglect</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>7. Cognition</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>8. Depression</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>9. Upper Extremity Function</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>10. Pre-stroke: autonomy</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>11. Medical Stability</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>12. Ability to participate</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>13. Drug or Alcohol Abuse</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>14. MRI eligibility</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
	<tr>
		<td>15. Transfers and balance</td>
		<td width="10%"align="center"><input type="checkbox"></td>
	</tr>
</table>
</fieldset>
</div>
</body>


















</html>