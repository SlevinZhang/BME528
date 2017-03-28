<?php
/**********configuration files here***********/
	require_once('../Connections/dose.php'); 
	require_once('../function/auth.php');
?>
<?php 
/***********Must include these files.****/
	require_once('../function/GetSQLValueString.php');
	require_once("SQLbuild.php");
?>
<?php
/*************/
//Form validation. If the field is required, add a attribute: fcheck="required" and fmsg="..." 
// fmsg is the message you want to display
//example: <input type="text" fcheck="required" fmsg='Name is required!'>
/************/
/***change parameters here**/
	$database_dose='doseimg';
	$formtitle = "ICARE Imaging Analysis Case Report Form";
	$self = basename($_SERVER['PHP_SELF']);
	$listpage = "list_subject.php";
	$db_table = "case_report";
	$entrytime = date('Y-m-d H:i:s');
	$lastmodifytime = date('Y-m-d H:i:s');
	$PK = "ID";
	if(isset($_GET['Study_uid']))
	{
	mysql_select_db("doseimg",$dose);
	$study_uid=$_GET['Study_uid'];
	$info_query="select * from info where dcm_StudyInstanceUID = '$study_uid'";
	//echo $info_query;
	$info_res = mysql_query($info_query) or die(mysql_error());
	$info_row = mysql_fetch_array($info_res);
	//var_dump($info_row);
	$time = $info_row['dcm_StudyTime'];
	$timess = substr($time,-2);
	$timemm = substr($time,-4,2);
	$timehh = substr($time,0,-4);
	}
	mysql_select_db($database_dose, $dose);
	
	if(isset($_GET['ID']))
	{
	$ID = $_GET['ID'];
	$check_query = "select * from $db_table where $PK = '$ID'";
	$check_res = mysql_query($check_query) or die(mysql_error());
	$check_row = mysql_fetch_array($check_res);
	}
	if(isset($_POST['submit']))
	{
		if($_POST['status']=='insert')
		{
/*****insert SQL query builder******/
	$insertSQL = insbuild($_POST,$db_table);
//	echo $insertSQL;
			mysql_select_db($database_dose, $dose);
		  $Result1 = mysql_query($insertSQL, $dose) or die(mysql_error());
			$insertID = mysql_insert_id();
		  $insertGoTo = $self."?ID=$insertID";

		  header(sprintf("Location: %s", $insertGoTo));
		}
		elseif($_POST['status']=='edit')
		{
/*****update SQL query builder******/
			$updateSQL = updbuild($_POST,$db_table,'ID');
			$ID = $_POST['ID'];
//	echo $updateSQL;
			// edit sql
		mysql_select_db($database_dose, $dose);
		  $Result1 = mysql_query($updateSQL, $dose) or die(mysql_error());
		
		  $insertGoTo = "$self?ID=$ID&status=confirm";
		  header(sprintf("Location: %s", $insertGoTo));
			
		}
	}
	else
	{
		if(isset($check_row["$PK"]))
		{
			if(isset($_GET['status'])&&$_GET['status']=='edit')
			$status = 'edit';
			elseif(isset($_GET['status'])&&$_GET['status']=='delete')
			{
				//delete action;	
				$delete_sql = "delete from $db_table where $PK='$ID'";
				mysql_query($delete_sql) or die(mysql_error());
				header("Location:list_subject.php?study_uid=".$check_row['Study_uid']."&patientID=".$check_row['Study_id']);
			}
			else
			{
					$status = 'confirm';
			}
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $formtitle ?></title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div class="container">

<?php
	if(isset($check_row['reviewer']))
	{
	if($_SESSION['MM_Username']!=$check_row['reviewer'])
	{
?>
	<a href="list_subject.php?study_uid=<?php echo $check_row['Study_uid'];?>&patientID=<?php echo $check_row['Study_id'];?>" class="btn">Back</a>
<?php 
	die("You don't have permission to view other's form");
	}
	}

	if($status=='confirm')
	{
?>

<div class="row">
<div class="span6">

<table><tr><td><a class="btn btn-primary" href="list_subject.php?study_uid=<?php echo $check_row['Study_uid'];?>&patientID=<?php echo $check_row['Study_id'];?>">Back to Worklist</a><?php }
else
{?>
<div class="row">
<div class="span6">

<table><tr><td><a class="btn btn-primary" href="list_subject.php?study_uid=<?php echo $_GET['Study_uid'];?>&patientID=<?php echo $_GET['Study_id'];?>">Back to Worklist</a>
		
<?php
}	if($status=='confirm')
	{
?></td><td>
<a href="<?php echo $self ?>?status=delete&ID=<?php echo $ID ?>" class="btn">Delete</a>
</td><td>
<a href="<?php echo $self ?>?status=edit&ID=<?php echo $ID ?>" class="btn">Edit</a>
</td></tr>
</table>
</div>
<div class="span3 offset3">
First Entry Time:<?php echo $check_row['entry_time'] ?><br/>
Last Modified Time:<?php echo $check_row['last_modify_time'] ?>
</div><br/>
</div>
<?php
	}
?>
<h3>
<?php echo $formtitle; ?>
</h3>
<hr/>
<form method="post" action="<?php echo $self ?>">
<input type="hidden" name="status" value="<?php if($status=='edit') echo 'edit'; else echo 'insert'; ?>">
<input type="hidden" name="ID" value="<?php echo $ID; ?>">
<input type="hidden"  name="Study_uid" value="<?php echo $_GET['Study_uid'];?>"/>


<div>
<!-- Put the Form html data here. The name of each input should match the database. -->
	<div class="inner"> 
		<table class="center">
			<tr>
				<td class="left">Subject ID</td>
				<td><input type="text" name="Study_id" value="<?php echo $_GET['Study_id'];?>"></td>
			</tr> 
			<tr>
				<td class="left">Reviewer initials</td>
				<td><input type="text" name="reviewer" size="5" value="<?php echo $_SESSION['MM_Username'];?>"></td>
			</tr>
		</table>
	</div>
	<div class="inner">	
		<table class="center">
			<tr>
				<th>Imaging Modality:</th>
				<td>
					<select name="modality">
						<option></option>
						<option value="CT">CT</option>
						<option value="MRI">MRI</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td class="gap" />
			</tr>
			<tr>
				<th>Timing of Scan:</th>
				<td></td>
			</tr>
			<tr>
				<td class="left">Date/time of MRI or CT used for analysis (yyyy-mm-dd)</td> 
				<td><input type="text" name="scandatetime" value="<?php echo $info_row['dcm_StudyDate']."--$timehh:$timemm:$timess" ?>"></td>
			</tr>
			<tr>
				<td class="left">Date/time of symptom onset (yyyy-mm-dd)</td> 
				<td><input type="text" name="sympdatetime" value="<?php echo $info_row['stroke_date'] ?>"></td>
			</tr>
			
			<tr>
				<td class="gap" />
			</tr>
			<tr>
				<th>Stroke Type:</th>
				<td>
					<select name="stroketype">
						<option></option>
						<option value="ischemic">Ischemic</option>
						<option value="hemorrhagic">Hemorrhagic</option>
						<option value="notIdentified">Stroke not identified</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="left">Problems with scan:</td>
				<td><input type="text" name="scan_problems"></td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="inner">
		<table class="center">
			<tr>
				<th style="text-align:center" colspan="2">Index Lesion Size:</th>
			</tr>
			<tr>
				<td class="left">Image used:</td>
				<td>
					<select name="imageUsed">
						<option></option>
						<option value="DWI">DWI</option>
						<option value="FLAIR">FLAIR</option>
						<option value="GRE">GRE</option>
						<option value="CT">CT</option>
					</select>
				</td>
			</tr>

			<tr>
				<td class="gap" />
			</tr>
			<tr>
				<td style="text-align:center" colspan="2">AREA 1:</td>
			</tr>
			<tr>
				<td>Dimensions:</td>
			</tr>				
			<tr>
				<td class="left">X(cm):</td>
				<td><input id="A1x" type="text" name="A1x" class="d1"></td>
			</tr> 
			<tr>
				<td class="left">Y(cm):</td>
				<td><input id="A1y" type="text" name="A1y" class="d1"></td>
			</tr>
			<tr>
				<td class="left">Z(cm):</td>
				<td><input id="A1z" type="text" name="A1z" class="d1"></td>
			</tr>
			<tr>
				<td></td>
				<td>Slice thickness (cm): <input id="A1zt" type="text"></td>
			</tr>
			<tr>
				<td></td>
				<td>Number of slices: <input id="A1zn" type="text"></td>
			</tr>
			<tr>
				<td class="left">Max Axial Diameter (cm)</td>
				<td><input id="A1Diameter" type="text" name="A1Diameter" readonly></td>
			</tr>
			<tr>
				<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
				<td><input type="text" name="A1EstVol" class="v1"></td>
			</tr>
			<tr>
				<td class="left">Planimetric Volume (cm<sup>3</sup>)</td>
				<td><input type="text" name="A1PlaniVol"></td>
			</tr>
				
			<tr>
				<td class="gap" />
			</tr>
			<tr>
				<td style="text-align:center" colspan="2">AREA 2:</td>
			</tr>
			<tr>
				<td>Dimensions:</td>
			</tr>
			<tr>
				<td class="left">X(cm):</td>
				<td><input id="A2x" type="text" name="A2x" class="d2"></td>
			</tr> 
			<tr>
				<td class="left">Y(cm):</td>
				<td><input id="A2y" type="text" name="A2y" class="d2"></td>
			</tr>
			<tr>
				<td class="left">Z(cm):</td>
				<td><input id="A2z" type="text" name="A2z" class="d2"></td>
			</tr>
			<tr>
				<td></td>
				<td>Slice thickness (cm): <input id="A2zt" type="text"></td>
			</tr>
			<tr>
				<td></td>
				<td>Number of slices: <input id="A2zn" type="text"></td>
			</tr>
			<tr>
				<td class="left">Max Axial Diameter (cm)</td>
				<td><input id="A2Diameter" type="text" name="A2Diameter" readonly></td>
			</tr>
			<tr>
				<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
				<td><input type="text" name="A2EstVol" class="v2"></td>
			</tr>
			<tr>
				<td class="left">Planimetric Volume (cm<sup>3</sup>)</td>
				<td><input type="text" name="A2PlaniVol"></td>
			</tr>
				
			<tr>
				<td class="gap" />
			</tr>
			<tr>
				<td style="text-align:center" colspan="2">AREA 3:</td>
			</tr>
			<tr>
				<td>Dimensions:</td>
			</tr>
			<tr>
				<td class="left">X(cm):</td>
				<td><input id="A3x" type="text" name="A3x" class="d3"></td>
			</tr> 
			<tr>
				<td class="left">Y(cm):</td>
				<td><input id="A3y" type="text" name="A3y" class="d3"></td>
			</tr>
			<tr>
				<td class="left">Z(cm):</td>
				<td><input id="A3z" type="text" name="A3z" class="d3"></td>
			</tr>
			<tr>
				<td></td>
				<td>Slice thickness (cm): <input id="A3zt" type="text"></td>
			</tr>
			<tr>
				<td></td>
				<td>Number of slices: <input id="A3zn" type="text"></td>
			</tr>
			<tr>
				<td class="left">Max Axial Diameter (cm)</td>
				<td><input id="A3Diameter" type="text" name="A3Diameter" readonly></td>
			</tr>
			<tr>
				<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
				<td><input type="text" name="A3EstVol" class="v3"></td>
			</tr>
			<tr>
				<td class="left">Planimetric Volume (cm<sup>3</sup>)</td>
				<td><input type="text" name="A3PlaniVol"></td>
			</tr>
			<tr />
		</table>
	</div>
	<hr>
	<div class="inner">
		<table class="center">
			<tr><th style="text-align:center" colspan="2">Index Lesion Location:</th></tr>
			<tr><td class="left">Choose one:</td>
				<td><table><tr>
					<td><input type="radio" name="index_lesion_location" value="left"> Left </td>
					<td><input type="radio" name="index_lesion_location" value="midline"> Midline </td>
					<td><input type="radio" name="index_lesion_location" value="right"> Right </td>
					<td><input type="radio" name="index_lesion_location" value="-1"> NA </td>
				</tr></table></td>
			</tr>
			<tr><td class="left" style="vertical-align:top">Choose all that apply:</td>
				<td>
					<input type="checkbox" name="depth_cortical" > Cortical<br>
					<input type="checkbox" name="depth_superficial"> Subcortical-Superficial<br>
					<input type="checkbox" name="depth_deep"> Subcortical-Deep
				</td>
			</tr>
			<tr><td class="left">Which vascular template?</td>
				<td><select name="vascularTemplate">
					<option></option>
					<option value="1">1</option>
					<option value="2" selected>2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
                    </select>
				</td>
			</tr>
		</table>

		<table id="templateAreas" class="center striped" width="90%">
			<thead>
				<tr>
					<td width="40%"><u>TEMPLATE AREAS INVOLVED:</u></td>
				</tr>
				<tr>
					<td />
					<td width="20%">Predominant</td>
					<td>&#60;50%</td>
					<td>&ge;50%</td>
					<td>NA</td>

				</tr>
			</thead>
			<tr>
				<th style="text-align:left">ACA</th>
			</tr>
			<tr>
				<td class="tab">AC0</td>
				<td><input type="radio" name="predominant" value="AC0"></td>
				<td><input type="radio" name="AC0_involvement" value="lt50"></td>
				<td><input type="radio" name="AC0_involvement" value="gt50"></td>
				<td><input type="radio" name="AC0_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">AC1</td>
				<td><input type="radio" name="predominant" value="AC1"></td>
				<td><input type="radio" name="AC1_involvement" value="lt50"></td>
				<td><input type="radio" name="AC1_involvement" value="gt50"></td>
				<td><input type="radio" name="AC1_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">AC2</td>
				<td><input type="radio" name="predominant" value="AC2"></td>
				<td><input type="radio" name="AC2_involvement" value="lt50"></td>
				<td><input type="radio" name="AC2_involvement" value="gt50"></td>
				<td><input type="radio" name="AC2_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">AC3</td>
				<td><input type="radio" name="predominant" value="AC3"></td>
				<td><input type="radio" name="AC3_involvement" value="lt50"></td>
				<td><input type="radio" name="AC3_involvement" value="gt50"></td>
				<td><input type="radio" name="AC3_involvement" value="-1" checked></td>
			</tr>
			<tr></tr>
			<tr>
				<th style="text-align:left">PCA</th>
			</tr>
			<tr>
				<td>PCA</td>
				<td><input type="radio" name="predominant" value="PCA"></td>
				<td><input type="radio" name="PCA_involvement" value="lt50"></td>
				<td><input type="radio" name="PCA_involvement" value="gt50"></td>
				<td><input type="radio" name="PCA_involvement" value="-1" checked></td>
			</tr>
			<tr><tr/>
			<tr>
				<th style="text-align:left">MCA</th>
			</tr>
			<tr>
				<td class="tab">MC1</td>
				<td><input type="radio" name="predominant" value="MC1"></td>
				<td><input type="radio" name="MC1_involvement" value="lt50"></td>
				<td><input type="radio" name="MC1_involvement" value="gt50"></td>
				<td><input type="radio" name="MC1_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">MC2</td>
				<td><input type="radio" name="predominant" value="MC2"></td>
				<td><input type="radio" name="MC2_involvement" value="lt50"></td>
				<td><input type="radio" name="MC2_involvement" value="gt50"></td>
				<td><input type="radio" name="MC2_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">MC3</td>
				<td><input type="radio" name="predominant" value="MC3"></td>
				<td><input type="radio" name="MC3_involvement" value="lt50"></td>
				<td><input type="radio" name="MC3_involvement" value="gt50"></td>
				<td><input type="radio" name="MC3_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">MC4</td>
				<td><input type="radio" name="predominant" value="MC4"></td>
				<td><input type="radio" name="MC4_involvement" value="lt50"></td>
				<td><input type="radio" name="MC4_involvement" value="gt50"></td>
				<td><input type="radio" name="MC4_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">MC5</td>
				<td><input type="radio" name="predominant" value="MC5"></td>
				<td><input type="radio" name="MC5_involvement" value="lt50"></td>
				<td><input type="radio" name="MC5_involvement" value="gt50"></td>
				<td><input type="radio" name="MC5_involvement" value="-1" checked></td>
			</tr>
			<tr></tr>
			<tr>
				<th style="text-align:left">Deep Hemispheric Structures</th>
			</tr>
			<tr>
				<td class="tab">HA (Heubner's Artery)</td>
				<td><input type="radio" name="predominant" value="HA"></td>
				<td><input type="radio" name="HA_involvement" value="lt50"></td>
				<td><input type="radio" name="HA_involvement" value="gt50"></td>
				<td><input type="radio" name="HA_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">LS (Lenticulostriates)</td>
				<td><input type="radio" name="predominant" value="LS"></td>
				<td><input type="radio" name="LS_involvement" value="lt50"></td>
				<td><input type="radio" name="LS_involvement" value="gt50"></td>
				<td><input type="radio" name="LS_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">IB (Insular Branches)</td>
				<td><input type="radio" name="predominant" value="IB"></td>
				<td><input type="radio" name="IB_involvement" value="lt50"></td>
				<td><input type="radio" name="IB_involvement" value="gt50"></td>
				<td><input type="radio" name="IB_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">ACH (Anterior Choroidal)</td>
				<td><input type="radio" name="predominant" value="ACH"></td>
				<td><input type="radio" name="ACH_involvement" value="lt50"></td>
				<td><input type="radio" name="ACH_involvement" value="gt50"></td>
				<td><input type="radio" name="ACH_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">THP (Thalamoperforating)</td>
				<td><input type="radio" name="predominant" value="THP"></td>
				<td><input type="radio" name="THP_involvement" value="lt50"></td>
				<td><input type="radio" name="THP_involvement" value="gt50"></td>
				<td><input type="radio" name="THP_involvement" value="-1" checked></td>
			</tr>
			<tr></tr>
			<tr>
				<th style="text-align:left">Brainstem / Cerebellar Involvement</th>
			</tr>
			<tr>
				<td class="tab">PCA (anterolateral midbrain)</td>
				<td><input type="radio" name="predominant" value="PCAam"></td>
				<td><input type="radio" name="PCAam_involvement" value="lt50"></td>
				<td><input type="radio" name="PCAam_involvement" value="gt50"></td>
				<td><input type="radio" name="PCAam_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Basilar</td>
				<td />
				<td><input type="radio" name="basilar_involvement" value="lt50"></td>
				<td><input type="radio" name="basilar_involvement" value="gt50"></td>
				<td><input type="radio" name="basilar_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Vertebral</td>
				<td />
				<td><input type="radio" name="vertebral_involvement" value="lt50"></td>
				<td><input type="radio" name="vertebral_involvement" value="gt50"></td>
				<td><input type="radio" name="vertebral_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Midbrain</td>
				<td><input type="radio" name="predominant" value="Midbrain"></td>
				<td><input type="radio" name="midbrain_involvement" value="lt50"></td>
				<td><input type="radio" name="midbrain_involvement" value="gt50"></td>
				<td><input type="radio" name="midbrain_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Pons</td>
				<td><input type="radio" name="predominant" value="Pons"></td>
				<td><input type="radio" name="pons_involvement" value="lt50"></td>
				<td><input type="radio" name="pons_involvement" value="gt50"></td>
				<td><input type="radio" name="pons_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Medulla</td>
				<td><input type="radio" name="predominant" value="medulla"></td>
				<td><input type="radio" name="medulla_involvement" value="lt50"></td>
				<td><input type="radio" name="medulla_involvement" value="gt50"></td>
				<td><input type="radio" name="medulla_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Cerebellar Hemisphere</td>
				<td><input type="radio" name="predominant" value="cereHemi"></td>
				<td><input type="radio" name="cereHemi_involvement" value="lt50"></td>
				<td><input type="radio" name="cereHemi_involvement" value="gt50"></td>
				<td><input type="radio" name="cereHemi_involvement" value="-1" checked></td>
			</tr>
			<tr>
				<td class="tab">Cerebellar Vermis</td>
				<td><input type="radio" name="predominant" value="cereVerm"></td>
				<td><input type="radio" name="cereVerm_involvement" value="lt50"></td>
				<td><input type="radio" name="cereVerm_involvement" value="gt50"></td>
				<td><input type="radio" name="cereVerm_involvement" value="-1" checked></td>
			</tr>
			<tr></tr>	
		</table>
		
		<table class="center">
			<tr>
				<td class="left">Vascular Territory (Ischemic Stroke)</td>
				<td>
					<select name="index_lesion_vascular_territory">
						<option></option>
						<option value="ICA">ICA</option>
						<option value="M1">M1</option>
						<option value="M2">M2</option>
						<option value="DistalMCA">Distal MCA</option>
						<option value="ACA">ACA</option>
						<option value="PCA">PCA</option>
						<option value="ACH">ACH</option>
						<option value="basilar">Basilar</option>
						<option value="vertebral">Vertebral</option>
						<option value="watershed">Watershed</option>
					</select>
				</td>
			</tr>
		</table>			
	</div>
	<hr>
	<div class="inner">
		<table class="center">
			<tr>
				<th>New Non-Index Lesion or Lesions (ischemic or hemorrhagic stroke):</th>
			</tr>	
			<tr>
				<td style="text-align:center">(acute lesion on DWI or CT in separate vascular territory)</td>
			</tr>
				
			<tr>
				<td> 
					<div style="text-align:center">
						Present: 
						<input type="radio" name="new_nonindex_lesions" value="yes"> Yes 
						<input type="radio" name="new_nonindex_lesions" value="no"> No 
						<input type="radio" name="new_nonindex_lesions" value="-1"> NA 
						</br></br>
					</div>
					<div>
						<table class="center" width="100%">
							<tr><td class="gap" /></tr>
							<tr>
								<td style="text-align:center" colspan="2">LESION 1:</td>
							</tr>				
							<tr>
								<td class="left">Type</td>
								<td>
									<select name="lesion1type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="lesion1_location" value="left"> Left </td>
										<td><input type="radio" name="lesion1_location" value="midline"> Midline </td>
										<td><input type="radio" name="lesion1_location" value="right"> Right </td>
										<td><input type="radio" name="lesion1_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="lesion1_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="lesion1x" type="text" name="lesion1x" class="l1"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="lesion1y" type="text" name="lesion1y" class="l1"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="lesion1z" type="text" name="lesion1z" class="l1"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="lesion1zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="lesion1zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="lesion1EstVol" class="lv1"></td>
							</tr>

							<tr><td class="gap" /></tr>
							<tr>
								<td style="text-align:center" colspan="2">LESION 2:</td>
							</tr>				
							<tr>
								<td class="left">Type</td>
								<td>
									<select name="lesion2type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="lesion2_location" value="left"> Left </td>
										<td><input type="radio" name="lesion2_location" value="midline"> Midline </td>
										<td><input type="radio" name="lesion2_location" value="right"> Right </td>
										<td><input type="radio" name="lesion2_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="lesion2_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="lesion2x" type="text" name="lesion2x" class="l2"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="lesion2y" type="text" name="lesion2y" class="l2"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="lesion2z" type="text" name="lesion2z" class="l2"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="lesion2zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="lesion2zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="lesion2EstVol" class="lv2"></td>
							</tr>

							<tr><td class="gap" /></tr>
							<tr>
								<td style="text-align:center" colspan="2">LESION 3:</td>
							</tr>				
							<tr>
								<td class="left">Type</td>
								<td>
									<select name="lesion3type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="lesion3_location" value="left"> Left </td>
										<td><input type="radio" name="lesion3_location" value="midline"> Midline </td>
										<td><input type="radio" name="lesion3_location" value="right"> Right </td>
										<td><input type="radio" name="lesion3_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="lesion3_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="lesion3x" type="text" name="lesion3x" class="l3"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="lesion3y" type="text" name="lesion3y" class="l3"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="lesion3z" type="text" name="lesion3z" class="l3"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="lesion3zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="lesion3zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="lesion3EstVol" class="lv3"></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="inner">
		<table class="center">
			<tr>
				<th style="text-align:center" colspan="2">Index Lesion (Hemorrhagic Stroke):</th>
			</tr>
			<tr>
				<td class="left">Hemorrhage Type</td>
				<td>
					<select name="hemorrhage_type">
						<option></option>
						<option value="ICH">ICH</option>
						<option value="SAH">SAH</option>
						<option value="SDH">SDH</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="left">Suspected Etiology Based on Imaging</td>
				<td>
					<select name="suspected_etiology">
						<option></option>
						<option value="trauma">Trauma</option>
						<option value="aneurysm">Aneurysm</option>
						<option value="HTN">HTN</option>
						<option value="CAA">CAA</option>
						<option value="AVM">AVM</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td />
				<td>
					<div>
						<input type="checkbox" name="other_etiology" value="true"> Other :
						<div><input type="text" name="suspected_etiology_other"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="left">Intraventricular Extension </td>
				<td><input type="checkbox" name="intraventricular_extension" value="true"></td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="inner">
		<table class="center">
			<tr><th style="text-align:center">Other Imaging Findings (ischemic or hemorrhagic stroke):</th></tr>
			<tr><td class="gap" /></tr>
			<tr><td style="text-align:center">OLD STROKES</br>(use FLAIR or CT)</td></tr>
			
			<tr>
				<td> 
					<div style="text-align:center">
						Present: 
						<input type="radio" name="old_stroke" value="yes"> Yes 
						<input type="radio" name="old_stroke" value="no"> No 
						<input type="radio" name="old_stroke" value="-1"> FLAIR/CT not performed / NA 
						</br></br>
					</div>
					<div>
						<table class="center" width="100%">
							<tr>
								<td style="text-align:center" colspan="2">OLD STROKE 1:</td>
							</tr>				
							<tr>
								<td class="left">Suspected Type</td>
								<td>
									<select name="oldstroke1type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="oldstroke1_location" value="left"> Left </td>
										<td><input type="radio" name="oldstroke1_location" value="midline"> Midline </td>
										<td><input type="radio" name="oldstroke1_location" value="right"> Right </td>
										<td><input type="radio" name="oldstroke1_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="oldstroke1_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="oldstroke1x" type="text" name="oldstroke1x" class="ol1"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="oldstroke1y" type="text" name="oldstroke1y" class="ol1"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="oldstroke1z"  type="text" name="oldstroke1z" class="ol1"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="oldstroke1zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="oldstroke1zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="oldstroke1EstVol" class="olv1"></td>
							</tr>

							<tr><td class="gap" /></tr>
							<tr>
								<td style="text-align:center" colspan="2">OLD STROKE 2:</td>
							</tr>				
							<tr>
								<td class="left">Suspected Type</td>
								<td>
									<select name="oldstroke2type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="oldstroke2_location" value="left"> Left </td>
										<td><input type="radio" name="oldstroke2_location" value="midline"> Midline </td>
										<td><input type="radio" name="oldstroke2_location" value="right"> Right </td>
										<td><input type="radio" name="oldstroke2_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="oldstroke2_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="oldstroke2x" type="text" name="oldstroke2x" class="ol2"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="oldstroke2y" type="text" name="oldstroke2y" class="ol2"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="oldstroke2z" type="text" name="oldstroke2z" class="ol2"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="oldstroke2zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="oldstroke2zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="oldstroke2EstVol" class="olv2"></td>
							</tr>

							<tr><td class="gap" /></tr>
							<tr>
								<td style="text-align:center" colspan="2">OLD STROKE 3:</td>
							</tr>				
							<tr>
								<td class="left">Type</td>
								<td>
									<select name="oldstroke3type">
										<option></option>
										<option value="ischemic">Ischemic</option>
										<option value="hemorrhagic">Hemorrhagic</option>
                                        </select>
								</td>
							</tr>
							<tr>
								<td class="left">Location:</td>
								<td>
									<table>
										<td><input type="radio" name="oldstroke3_location" value="left"> Left </td>
										<td><input type="radio" name="oldstroke3_location" value="midline"> Midline </td>
										<td><input type="radio" name="oldstroke3_location" value="right"> Right </td>
										<td><input type="radio" name="oldstroke3_location" value="-1"> NA</td>
									</table>
								</td>
							</tr>
							<tr>
								<td class="left">Vascular Territory (ischemic stroke)</td>
								<td>
									<select name="oldstroke3_vascular_territory">
										<option></option>
										<option value="ICA">ICA</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DistalMCA">Distal MCA</option>
										<option value="PCA">PCA</option>
										<option value="AChA">AChA</option>
										<option value="basilar">Basilar</option>
										<option value="vertebral">Vertebral</option>
										<option value="watershed">Watershed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Dimensions:</td>
							</tr>
							<tr>
								<td class="left">X(cm):</td>
								<td><input id="oldstroke3x" type="text" name="oldstroke3x" class="ol3"></td>
							</tr> 
							<tr>
								<td class="left">Y(cm):</td>
								<td><input id="oldstroke3y" type="text" name="oldstroke3y" class="ol3"></td>
							</tr>
							<tr>
								<td class="left">Z(cm):</td>
								<td><input id="oldstroke3z"  type="text" name="oldstroke3z" class="ol3"></td>
							</tr>
							<tr>
								<td></td>
								<td>Slice thickness (cm): <input id="oldstroke3zt" type="text"></td>
							</tr>
							<tr>
								<td></td>
								<td>Number of slices: <input id="oldstroke3zn" type="text"></td>
							</tr>
							<tr>
								<td class="left">Estimated Volume ((X*Y*Z)/2) (cm<sup>3</sup>)</td>
								<td><input type="text" name="oldstroke3EstVol" class="olv3"></td>
							</tr>
							<tr><td class="gap" /></tr>
						</table>
						More Than 3 Old Strokes: <input type="checkbox" step="any" name="gt3oldstrokes" value="true"> (Yes)
					</div>
				</td>
			</tr>
			<tr><td class="gap"><hr></td></tr>
			<tr><td style="text-align:center">LEUKOARAIOSIS (white matter disease &#62; 0.5 cm)</br>(use FLAIR or CT)</td></tr>
			<tr>
				<td>					 
					<div style="text-align:center">
						Present: 
						<input type="radio" name="leukoaraiosis" value="yes"> Yes 
						<input type="radio" name="leukoaraiosis" value="no"> No 
						<input type="radio" name="leukoaraiosis" value="-1"> FLAIR/CT not performed / NA 
						</br></br>
					</div>
					<div>
						<table id="leukoaraiosis" class="center striped" width="100%">
							<tr>
								<td class="left" />
								<td>0</td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
                                <td>NA</td>
							</tr>
							<tr>
								<td>Frontal</td>
								<td><input type="radio" name="frontal_leuk" value="0"></td>
								<td><input type="radio" name="frontal_leuk" value="1"></td>
								<td><input type="radio" name="frontal_leuk" value="2"></td>
								<td><input type="radio" name="frontal_leuk" value="3"></td>
								<td><input type="radio" name="frontal_leuk" value="-1"></td>
							</tr>
							<tr>
								<td>Parieto-occipital</td>
								<td><input type="radio" name="parieto_leuk" value="0"></td>
								<td><input type="radio" name="parieto_leuk" value="1"></td>
								<td><input type="radio" name="parieto_leuk" value="2"></td>
								<td><input type="radio" name="parieto_leuk" value="3"></td>
								<td><input type="radio" name="parieto_leuk" value="-1"></td>
							</tr>
							<tr>
								<td>Temporal</td>
								<td><input type="radio" name="temporal_leuk" value="0"></td>
								<td><input type="radio" name="temporal_leuk" value="1"></td>
								<td><input type="radio" name="temporal_leuk" value="2"></td>
								<td><input type="radio" name="temporal_leuk" value="3"></td>
								<td><input type="radio" name="temporal_leuk" value="-1"></td>
							</tr>
							<tr>
								<td>Infratentorial</td>
								<td><input type="radio" name="infratentorial_leuk" value="0"></td>
								<td><input type="radio" name="infratentorial_leuk" value="1"></td>
								<td><input type="radio" name="infratentorial_leuk" value="2"></td>
								<td><input type="radio" name="infratentorial_leuk" value="3"></td>
								<td><input type="radio" name="infratentorial_leuk" value="-1"></td>
							</tr>
							<tr>
								<td>Basal Ganglia</td>
								<td><input type="radio" name="basal_leuk" value="0"></td>
								<td><input type="radio" name="basal_leuk" value="1"></td>
								<td><input type="radio" name="basal_leuk" value="2"></td>
								<td><input type="radio" name="basal_leuk" value="3"></td>
								<td><input type="radio" name="basal_leuk" value="-1"></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr><td class="gap"><hr></td></tr>
	
			<tr><td style="text-align:center">CHRONIC MICROBLEEDS</br>(use GRE or SWI)</td></tr>
			<tr>
				<td> 
					<div style="text-align:center">
						Present: 
						<input type="radio" name="microbleeds_present" value="yes"> Yes 
						<input type="radio" name="microbleeds_present" value="no"> No 
						<input type="radio" name="microbleeds_present" value="-1"> GRE/SWI not performed / NA 
						</br></br>
					</div>
					<div>
						<table class="center" width="100%">
							<tr>
								<td class="left">Approximate number:</td>
								<td>
									<table>
										<tr>
											<td><input type="radio" name="microbleeds_number" value="1to5"> 1-5 </td>
											<td><input type="radio" name="microbleeds_number" value="6to10"> 6-10 </td>
											<td><input type="radio" name="microbleeds_number" value="gt10"> &#62;10 </td>
											<td><input type="radio" name="microbleeds_number" value="-1"> NA </td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>If &#62;10, are they lobar? </td>
								<td><input type="checkbox" name="microbleeds_lobar" value="true"> (Yes) </td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr><td class="gap"><hr></td></tr>
			
			<tr><td style="text-align:center">HEMORRHAGIC CONVERSION (ischemic stroke)</br>(use GRE, SWI, or CT)</td></tr>
			<tr>
				<td> 
					<div style="text-align:center">
						Present: 
						<input type="radio" name="hem_conversion" value="yes"> Yes 
						<input type="radio" name="hem_conversion" value="no"> No 
						<input type="radio" name="hem_conversion" value="-1"> GRE/SWI/CT not performed / NA 
						</br></br>
					</div>
					<div>
						<table class="center" width="100%">
							<tr>
								<td class="left">Grade:</td>
								<td>
									<select name="hem_conversion_grade">
										<option></option>
										<option value="HI1">HI-1</option>
										<option value="HI2">HI-2</option>
										<option value="PH1">PH-1</option>
										<option value="HI1">PH-2</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr><td class="gap"><hr></td></tr>
			
			<tr><td style="text-align:center">OTHER, NON-STROKE LESION</br>(use all imaging sequences available)</td></tr>
			<tr>	
				<td>					 
					<div style="text-align:center">  
						Present: 
						<input type="radio" name="other_lesion_present" value="yes"> Yes 
						<input type="radio" name="other_lesion_present" value="no"> No 
						<input type="radio" name="other_lesion_present" value="-1"> NA 
						</br></br>
					</div>
					<div>
						<table class="center" width="100%">
							<tr>
								<td class="left">What is it?</td>
								<td><input type="text" name="other_lesion_description"></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr><td class="gap" /></tr>
		</table>

<!-- End of the form html data -->
</div>
<input type="submit" name="submit" value="Save" class="btn">

</form>
<?php include('../template/footer.html'); ?>
</div>
</body>
<?php
	if($status=='confirm')
	{
			require_once('predisplay.php');
			predisplay($check_row);
	
	}
	elseif($status='edit')
	{
			require_once('preedit.php');
			preedit($check_row);				
	}
?>
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
$(function(){
	$('[name="scandatetime"]').datepicker({format:"yyyy-mm-dd"});
	$('[name="sympdatetime"]').datepicker({format:"yyyy-mm-dd"});

	
	$('form').submit(function(e){
		$.each($("[fcheck='required']"),function(){
				if($(this).val().length==0)
					{
						alert($(this).attr('fmsg'));
						e.preventDefault();
					}
			});
		});
	});

	$('.l1').keyup(function(){
		s=1;
		$('.l1').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.lv1').val(s.toFixed(2));
	});
	$('.l2').keyup(function(){
		s=1;
		$('.l2').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.lv2').val(s.toFixed(2));
	});
	$('.l3').keyup(function(){
		s=1;
		$('.l3').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.lv3').val(s.toFixed(2));
	});
	$('.d1,#A1zt,#A1zn').keyup(function(){
		s=1;
		$('.d1').each(function(){
		s =s*$(this).val();
		});
		s = s/2;
		$('.v1').val(s.toFixed(2));
	});
	$('.d2').keyup(function(){
		s=1;
		$('.d2').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.v2').val(s.toFixed(2));
	});
	$('.d3').keyup(function(){
		s=1;
		$('.d3').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.v3').val(s.toFixed(2));
	});
	$('.ol1').keyup(function(){
		s=1;
		$('.ol1').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.olv1').val(s.toFixed(2));
	});
	$('.ol2').keyup(function(){
		s=1;
		$('.ol2').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.olv2').val(s.toFixed(2));
	});
	$('.ol3').keyup(function(){
		s=1;
		$('.ol3').each(function(){
		s=s*$(this).val();
		});
		s = s/2;
		$('.olv3').val(s.toFixed(2));
	});
/*	$('[name="predominant"]').change(function(){
		$('[name="predominant"]').each(function(){
			var ops=$(this).parents("td").next().find("[type='radio']");
			if(!$(this).attr("checked")&&($(ops[0]).attr("checked")||$(ops[1]).attr("checked")))
			{
				ask = confirm("Do you want to clear the options for "+$(this).val());
				if(ask)
				$(this).parents("td").next().find("[type='radio']").attr("checked",false);
			}
			});
		});
		*/
	
	$('#A1x,#A1y').keyup(function(){
		var X = parseFloat($('#A1x').val());
		var Y = parseFloat($('#A1y').val());
		/*var DIAMETER = $('#A1Diameter').val();*/
		if (X >= Y) {
			var max = X;
		} 
		else {
			max = Y;
		}
		$('#A1Diameter').val(max);
	});

	$('#A2x,#A2y').keyup(function(){
		var X = parseFloat($('#A2x').val());
		var Y = parseFloat($('#A2y').val());
		/*var DIAMETER = $('#A1Diameter').val();*/
		if (X >= Y) {
			var max = X;
		} 
		else {
			max = Y;
		}
		$('#A2Diameter').val(max);
	});
	
	$('#A3x,#A3y').keyup(function(){
		var X = parseFloat($('#A3x').val());
		var Y = parseFloat($('#A3y').val());
		/*var DIAMETER = $('#A1Diameter').val();*/
		if (X >= Y) {
			var max = X;
		} 
		else {
			max = Y;
		}
		$('#A3Diameter').val(max);
	});


	$('#A1zt,#A1zn').keyup(function(){
		var t = parseFloat($('#A1zt').val());
		var n = parseFloat($('#A1zn').val());
		var z = t*n;
		$('#A1z').val(z);
		var s = 0.5*z*parseFloat($('#A1x').val())*parseFloat($('#A1y').val());
		$('.v1').val(s.toFixed(2));
	});
	$('#A2zt,#A2zn').keyup(function(){
		var t = parseFloat($('#A2zt').val());
		var n = parseFloat($('#A2zn').val());
		var z = t*n;
		$('#A2z').val(z);
		var s = 0.5*z*parseFloat($('#A2x').val())*parseFloat($('#A2y').val());
		$('.v2').val(s.toFixed(2));
	});
	$('#A3zt,#A3zn').keyup(function(){
		var t = parseFloat($('#A3zt').val());
		var n = parseFloat($('#A3zn').val());
		var z = t*n;
		$('#A3z').val(z);
		var s = 0.5*z*parseFloat($('#A3x').val())*parseFloat($('#A3y').val());
		$('.v3').val(s.toFixed(2));
	});
	$('#lesion1zt,#lesion1zn').keyup(function(){
		var t = parseFloat($('#lesion1zt').val());
		var n = parseFloat($('#lesion1zn').val());
		var z = t*n;
		$('#lesion1z').val(z);
		var s = 0.5*z*parseFloat($('#lesion1x').val())*parseFloat($('#lesion1y').val());
		$('.lv1').val(s.toFixed(2));
	});
	$('#lesion2zt,#lesion2zn').keyup(function(){
		var t = parseFloat($('#lesion2zt').val());
		var n = parseFloat($('#lesion2zn').val());
		var z = t*n;
		$('#lesion2z').val(z);
		var s = 0.5*z*parseFloat($('#lesion2x').val())*parseFloat($('#lesion2y').val());
		$('.lv2').val(s.toFixed(2));
	});
	$('#lesion3zt,#lesion3zn').keyup(function(){
		var t = parseFloat($('#lesion3zt').val());
		var n = parseFloat($('#lesion3zn').val());
		var z = t*n;
		$('#lesion3z').val(z);
		var s = 0.5*z*parseFloat($('#lesion3x').val())*parseFloat($('#lesion3y').val());
		$('.lv3').val(s.toFixed(2));
	});
	$('#oldstroke1zt,#oldstroke1zn').keyup(function(){
		var t = parseFloat($('#oldstroke1zt').val());
		var n = parseFloat($('#oldstroke1zn').val());
		var z = t*n;
		$('#oldstroke1z').val(z);
		var s = 0.5*z*parseFloat($('#oldstroke1x').val())*parseFloat($('#oldstroke1y').val());
		$('.olv1').val(s.toFixed(2));
	});
	$('#oldstroke2zt,#oldstroke2zn').keyup(function(){
		var t = parseFloat($('#oldstroke2zt').val());
		var n = parseFloat($('#oldstroke2zn').val());
		var z = t*n;
		$('#oldstroke2z').val(z);
		var s = 0.5*z*parseFloat($('#oldstroke2x').val())*parseFloat($('#oldstroke2y').val());
		$('.olv2').val(s.toFixed(2));
	});
	$('#oldstroke3zt,#oldstroke3zn').keyup(function(){
		var t = parseFloat($('#oldstroke3zt').val());
		var n = parseFloat($('#oldstroke3zn').val());
		var z = t*n;
		$('#oldstroke3z').val(z);
		var s = 0.5*z*parseFloat($('#oldstroke3x').val())*parseFloat($('#oldstroke3y').val());
		$('.olv3').val(s.toFixed(2));
	});

</script>
</html>

