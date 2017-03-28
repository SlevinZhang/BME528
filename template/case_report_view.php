<?php include 'preedit.php'; ?>
<?php include 'predisplay.php'; ?>
<?php
session_start();
$hostname_dose = "127.0.0.1";
$database_dose = "dose";
$username_dose = "icare";
$password_dose = "\$icare_Lab";
$dose = mysql_pconnect($hostname_dose, $username_dose, $password_dose) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_dose, $dose); 
$Study_uid=$_GET['Study_uid'];
$Restricted="SELECT * from case_report where Study_uid='".$_GET['Study_uid']."' AND Study_id='".$_GET['Study_id']."' AND Reviewer='".$_GET['Reviewer']."'";
$result=mysql_query($Restricted,$dose) or die(mysql_error());
$row=mysql_fetch_array($result);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">

<title>Case Report</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<style>
td.mul
{text-align:center;
font-weight:bolder;
}
td{
width:150px;
}
td input{
width:80px;
}
td select{
width:80px;
}
</style>
</head>
<body>
<h1>Case Report</h1>
<div id="update">
<form action="case_report_edit.php" method="post">
<table class="table table-bordered" style="solid:black" >

<div class="form-group" >
    <label for="Study_id">Subject_ID</label>
    <input type="text" class="form-control" name="Study_id" value="<?php echo $_GET['Study_id'];?>">
  </div>
  <div class="form-group" >
    <label for="Reviewer">Reviewer Initial</label>
    <input type="text" class="form-control" name="Reviewer" value="<?php echo $_SESSION['MM_Username'];?>">
  </div>

<tr><td rowspan="2">Imaging Modality</td><td colspan="2" class="mul">Timing of Scan</td><td rowspan="2">Stroke Type</td></tr>
<tr><td>Date of MRI or CT used for analysis</td><td>Date of symptom onset</td></tr>
<tr><td><select name="Modality"><option value="CT">CT</option><option value="MRI">MRI</option></select></td>
<td><input type="text" name="M_MR"/></td>
<td><input type="text" name="D_sy"/></td>
<td><select name="Stroke_type"><option value="Ischemic">Ischemic</option><option value="Hemorrhagic">Hemorrhagic</option><option value="Stroke_not_identified">Stroke not identified</option></select></br><span >Problems with scan</span></br><input type="text" name="S_problem"/> <td></tr>
<tr><td colspan="4" class="mul">Index Lesion Size</td></tr>
<tr><td>Max Axial Diameter</td><td>Estimated Volume</td><td>Planimetric Vol</td><td>Image Used</td></tr>
<tr><td><input type="text" name="M_Axial_D"/></td>
<td><input type="text" name="Est_vol"/></td>
<td><input type="text" name="Pla_vol"/></td>
<td><select name="Image_used"><option value="DWI">DWI</option><option value="FLAIR">FLAIR</option><option value="GRE">GRE</option><option value="CT">CT</option></select></td></tr>
<tr><td >Index Lesion Location</td><td>Vascular Template</td><td>ACA</td><td>ACA Ant</td></tr> 
<tr><td><select name="Index_lesion_location"><option value="Right">Right</option><option value="Left">Left</option><option value="Midline">Midline</option><option value="Cortical">Cortical</option><option value="Subcortical">Subcortical</option><option value="Both">Both</option></select></td>
<td><select name="vascular_template"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
<td><select name="ACA"><option value="Y">Y</option><option value="N">N</option></select></td>
 <td><select name="ACA_ant"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>ACA Post</td><td>PCA</td><td>MCA</td><td>MC1, MC2</td></tr>
 <tr><td><select name="ACA_post"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="PCA"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="MCA"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="MC1_MC2"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>MC3</td><td>MC4,MC5</td><td>Deep Hemispheric Structures?</td><td>HA</td></tr>
 <tr><td><select name="MC3"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="MC4_MC5"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="DHS"><option value="Y">Y</option><option value="N">N</option></select></td>
 <td><select name="HA"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>LS</td><td>lB</td><td>ACH</td><td>THP</td></tr>
 <tr><td><select name="LS"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="lB"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="ACH"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="THP"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>Brainstem / Cerebellar Involvement?</td><td>PCA</td><td>Basilar</td><td>Vertebral</td></tr>
 <tr><td><select name="Brainstem_Cerebellar"><option value="Y">Y</option><option value="N">N</option></select></td>
 <td><select name="PCA1"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="Basilar"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="Vertebral"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>Midbrain</td><td>Pons</td><td>Medulla</td><td>Cerebellar Hemisphere</td></tr>
 <tr><td><select name="Midbrain"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="Pons"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="Medulla"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
 <td><select name="Cerebellar_hemisphere"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td></tr>
 <tr><td>Cerebellar Vermis</td><td>Predominant Area</td><td>Vascular Territory</td><td>Perfusion Deficit</td></tr>
 <tr> <td><select name="Cerebellar_vermis"><option value="Y">Y</option><option value="N">N</option><option value="<50%"><50%</option><option value=">=50%">>=50%</option></select></td>
<td><input type="text" name="Predominant_area"/> </td>
<td><select name="Vascular_territory"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal_MCA">Distal MCA </option><option value="ACA">ACA</option><option value="PCA">PCA</option><option value="ACH">ACH</option><option value="Basilar">Basilar</option><option value="Watershed">Watershed</option><option value="Vert">Vert</option></select></td>
<td><select name="Perfusion_deficit"><option value="Yes">Yes</option><option value="No">No</option><option value="PWI not performed">PWI not performed</option><option value="PWI uninterpretable">PWI uninterpretable<option></select></br><span>If yes</span></br><select name="Perfusion_deficit_yes"><option value="Obvious mismatch">Obvious mismatch</option><option value="DWI/PWI Match">DWI/PWI Match</option><option value="PWI not performed">PWI not performed</option><option value="Reverse MM">Reverse MM<option></select></br><span>Approximate volume of perfusion deficit</span></br><input type="text" name="vol_perfusion_deficit"/></td></tr>
<tr><td colspan="4" class="mul">New Non-Index Lesion or Lesions</td></tr>
<tr><td>Present</td><td>Number</td><td>Location</td><td>Vascular Territory</td></tr>
<tr><td><select name="Present"><option value="Yes">Yes</option><option value="No">No</option></select></td>
<td><select name="Number"><option value="1">1</option><option value="2">2</option><option value=">2">>2</option></select></td>
<td><select name="Location"><option value="Right">Right</option><option value="Left">Left</option><option value="Midline">Midline</option></select></td>
<td><select name="Vascular_territory1"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal MCA">Distal MCA</option><option value="PCA">PCA</option><option value="AChA">AChA</option><option value="Basilar">Basilar</option><option value="Vertebral">Vertebral</option><option value="Watershed">Watershed</option></select></td></tr> 
<tr><td colspan="2" class="mul">Index Lesion (Hemorrhagic Stroke)</td></tr>
<tr><td>Hemorrhage Type</td><td>Suspected Etiology Based on Imaging</td>
<td>Old Stroke</td><td>>3 Old Stroke</td></tr>
<tr><td><select name="Hemorrhage_type"><option value="ICH">ICH</option><option value="SAH">SAH</option><option value="SDH">SDH</option></select></td>
<td><select name="Suspected_etiology"><option value="Trauma">Trauma</option><option value="Aneurysm">Aneurysm</option><option value="HTN">HTN</option><option value="Cerebral amyloid angiopathy">Cerebral amyloid angiopathy</option><option value="Other">Other</option></select></td>
<td><select name="Old_stroke"><option value="Yes">Yes</option><option value="No">No</option></select></td>
<td><select name="more_3_old_stroke"><option value="Yes">Yes</option><option value="No">No</option></select></tr>
<tr><td colspan="4" class="mul">Old Stroke #1</td></tr>
<tr><td>Suspected Type</td><td>Location</td><td>Approximate Volume</td><td>Vascular Territory</td></tr>
<tr><td><select name="Suspected_type1"><option value="Ischemic">Ischemic</option><option value="Hemorrhagic">Hemorrhagic</option></select></td>
<td><select name="Location1_1"><option value="Right">Right</option><option value="Left">Left</option><option value="Midline">Midline</option></select></td>
<td><input type="text" name="Appro_vol1"/></td>
<td><select name="Vascular_territory1_1"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal MCA">Distal MCA</option><option value="PCA">PCA</option><option value="AChA">AChA</option><option value="Basilar">Basilar</option><option value="Vertebral">Vertebral</option><option value="Watershed">Watershed</option></select></td></tr>
 <tr><td colspan="4" class="mul">Old Stroke #2</td></tr>
<tr><td>Suspected Type</td><td>Location</td><td>Approximate Volume</td><td>Vascular Territory</td></tr>
<tr><td><select name="Suspected_type2"><option value="Ischemic">Ischemic</option><option value="Hemorrhagic">Hemorrhagic</option></select></td>
<td><select name="Location2_1"><option value="Right">Right</option><option value="Left">Left</option><option value="Midline">Midline</option></select></td>
<td><input type="text" name="Appro_vol2"/></td>
<td><select name="Vascular_territory2_1"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal MCA">Distal MCA</option><option value="PCA">PCA</option><option value="AChA">AChA</option><option value="Basilar">Basilar</option><option value="Vertebral">Vertebral</option><option value="Watershed">Watershed</option></select></td></tr>
 <tr><td colspan="4" class="mul">Old Stroke #3</td></tr>
<tr><td>Suspected Type</td><td>Location</td><td>Approximate Volume</td><td>Vascular Territory</td></tr>
<tr><td><select name="Suspected_type3"><option value="Ischemic">Ischemic</option><option value="Hemorrhagic">Hemorrhagic</option></select></td>
<td><select name="Location3_1"><option value="Right">Right</option><option value="Left">Left</option><option value="Midline">Midline</option></select></td>
<td><input type="text" name="Appro_vol3"/></td>
<td><select name="Vascular_territory3_1"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal MCA">Distal MCA</option><option value="PCA">PCA</option><option value="AChA">AChA</option><option value="Basilar">Basilar</option><option value="Vertebral">Vertebral</option><option value="Watershed">Watershed</option></select></td></tr>
 <tr><td>Leukoaraiosis (white matter disease)</td><td colspan="3">If yes</td></tr>
 <tr><td><select name="Leukoaraiosis"><option value="Yes">Yes</option><option value="No">No</option></select></td>
 <td><span>Frontal</span><select name="Frontal"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></br><span>Parieto-occipital</span><select name="Parieto_occipital"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></td>
<td><span>Temporal</span><select name="Temporal"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></br><span>Infratentorial</span><select name="Infratentorial"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></td>
 <td><span>InfratentorialBasal Ganglia</span></br><select name="Basal_ganglia"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></td></tr>
 <tr><td>Chronic microbleeds</td><td>If yes approximate numb</td><td>er</td><td>If > 10 are they lobar</td></tr>
<tr><td><select name="Chronic_microbleeds"><option value="Yes">Yes</option><option value="No">No</option><option value="GRE or SWI not performed">GRE or SWI not performed</option></select></td>
<td><select name="App_num"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></td>
<td><select name="er"><option value="1-5">1-5</option><option value="6-10">6-10</option><option value=">10">>10</option></select></td>
<td><select name="lobar"><option value="Yes">Yes</option><option value="No">No</option></select></td></tr>
 <tr><td>Hemorrhagic Conversion (Ischemic Stroke)</td><td>If yes grade</td><td>non-stroke lesion</td><td>If yes what is it</td></tr>
<tr><td><select name="Hemorrhagic_conversion"><option value="Yes">Yes</option><option value="No">No</option><option value="No GRE or SWI ">No GRE / SWI </option></select></td> 
<td><select name="grade"><option value="HI-1">HI-1</option><option value="HI-2">HI-1</option><option value="PH-1">PH-1</option><option value="PH-2">PH-2</option></select></td> 
 <td><select name="non_stroke_lesion"><option value="Yes">Yes</option><option value="No">No</option></select></td>
<td><input type="text" name="type"/></td></tr>
<tr><td colspan="4" class="mul">Vascular Imaging (ischemic stroke) </td></tr>
<tr><td>Date / time of MRA or CTA head</td><td>Intracranial Atherosclerosis</td><td>Date / time of MRA or CTA neck</td><td>Extracranial atherosclerosis / occlusion / dissection</td></tr> 
<tr><td><input type="text" name="MRA_CTA_head"/></td>
<td><select name="Intracranial_atherosclerosis"><option value="Yes">Yes</option><option value="No">No</option><option value="MRA or CTA not performed">MRA/CTA not performed</option></select></td> 
<td><input type="text" name="MRA_CTA_neck"/></td>
<td><select name="atherosclerosis_occlusion_dissection"><option value="Yes">Yes</option><option value="No">No</option><option value="MRA or CTA not performed">MRA/CTA not performed</option></select></br><span>If yes, which vessel: </span></br><select name="vessel"><option value="Carotid">Carotid</option><option value="Vertebral ">Vertebral </option></select></td></tr>
 <tr><td>Vessel Occlusion on MRA / CTA</td></tr>
<tr><td><select name="Vessel_occlusion"><option value="Yes">Yes</option><option value="No">No</option><option value="Not performed">Not performed</option></select></br><span>If yes, which vessel</span></br>
<select name="Vessel1"><option value="ICA">ICA</option><option value="M1">M1</option><option value="M2">M2</option><option value="Distal MCA branch">Distal MCA branch</option><option value="ACA">ACA</option><option value="PCA">PCA</option><option value="ACH">ACH</option><option value="Basilar">Basilar</option><option value="Vertebral">Vertebral</option></select></td></tr>
</table>
<input type="submit" value="Insert a new record"/>
</form>
</div>

<a  class="btn btn-primary" id="bt1" href="list_subject.php?study_uid=<?php echo $_GET['Study_uid'];?>&patientID=<?php echo $_GET['Study_id'];?>">Back to List</a>
<?php
if($_SESSION['MM_Username']==$row['Reviewer'])
{?>
<a  class="btn btn-primary" href="case_report_update.php?Study_uid=<?php echo $row['Study_uid'];?>&Study_id=<?php echo $row['Study_id'];?>&Reviewer=<?php echo $row['Reviewer'];?>">.Update this record</a>
<?php
}
?>

</body>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<?php predisplay($row);?>
</html>