<?php
/*************/
//Form validation. If the field is required, add a attribute: fcheck="required" and fmsg="..." 
// fmsg is the message you want to display
//example: <input type="text" fcheck="required" fmsg='Name is required!'>
/************/
/***change parameters here**/
	$formtitle = "ICARE Structure Report";
	$submit = "xmlreport.php";
	$listpage = "formlist.php";
	$db_table = "Tech_usage";
	$entrytime = date('Y-m-d H:i:s');
	$lastmodifytime = date('Y-m-d H:i:s');
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $formtitle ?></title>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container">
<h3>
<?php echo $formtitle; ?>
</h3>
<hr/>
<form method="post" action="<?php echo $submit ?>" target="_new">
<div>
<!-- Put the Form html data here. The name of each input should match the database. -->


<table class="table table-striped">
<tr>
<td><input type="submit" name="submit" value="Download XML report" class="btn download"></td>
<td><input type="submit" name="preview" value="View XML report" class="btn preview">
</td>
</tr>
<tr>
  <td>Author</td>
  <td><input name="author" type="text" value="Jack" /></td>
  </tr>
<tr>
  <td>Patient information</td>
  <td></td>
  </tr>
<tr>
  <td>Contact</td><td></td>
</tr>
<tr>
  <td></td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>Phone</td><td><input name="phone" type="text" value="310-000-0000" /></td>
</tr>
<tr>
  <td>Email</td><td><input name="email" type="text" value="ximingwa@usc.edu" /></td>
</tr>
<tr>
  <td>Address</td><td><textarea name="address">734 W Adams Blvd Los Angeles
Los Angeles,
CA</textarea></td>
</tr>
<tr>
  <td></td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>Energency contact</td><td>&nbsp;</td>
</tr>
<tr>
  <td>Emergency contact name</td><td><input name="ecname" type="text" id="ecname" value="Mike" /></td>
</tr>
<tr>
  <td>Emergency contact relation</td>
  <td><input name="ecrelation" type="text" id="ecrelation" value="friend" /></td>
  </tr>
<tr>
  <td>Emergency contact phone</td>
  <td><input name="ecphone" type="text" id="ecphone" value="213-000-0000" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Demographic data</td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Date of birth</td>
  <td><input name="demo_dob" type="text" id="demo_dob" value="1980-1-1" /></td>
  </tr>
<tr>
  <td>Name</td>
  <td><input name="demo_name" type="text" id="demo_name" value="Johnson" /></td>
  </tr>
<tr>
  <td>City of residence</td>
  <td><input name="demo_city" type="text" id="demo_city" value="Los Angeles" /></td>
  </tr>
<tr>
  <td><p>Gender<br />
  </p></td>
  <td><input name="demo_gender" type="text" id="demo_gender" value="Male" /></td>
  </tr>
<tr>
  <td>ID<br /></td>
  <td><input name="demo_id" type="text" id="demo_id" value="ICARE-1-1" /></td>
  </tr>
<tr>
  <td>SSN<br /></td>
  <td><input name="demo_ssn" type="text" id="demo_ssn" value="123456789" /></td>
  </tr>
<tr>
  <td>Occupation<br /></td>
  <td><input name="demo_occupation" type="text" id="demo_occupation" value="Engineer" /></td>
  </tr>
<tr>
  <td>Country of residence<br /></td>
  <td><input name="demo_country" type="text" id="demo_country" value="USA" /></td>
  </tr>
<tr>
  <td>Employed</td>
  <td><input name="demo_employed" type="text" id="demo_employed" value="Yes" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>History</td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Medical Status</td>
  <td><textarea name="his_status" id="his_status">health</textarea></td>
  </tr>
<tr>
  <td>Event</td>
  <td></td>
  </tr>
<tr>
  <td><p>Cause of accident type <br />
  </p></td>
  <td><input name="his_event_type" type="text" id="his_event_type" /></td>
  </tr>
<tr>
  <td>Event time<br /></td>
  <td><input name="his_event_time" type="text" id="his_event_time" /></td>
  </tr>
<tr>
  <td>Event  description<br /></td>
  <td><input name="his_event_des" type="text" id="his_event_des" /></td>
  </tr>
<tr>
  <td>Body  location<br /></td>
  <td><input name="his_event_location" type="text" id="his_event_location" /></td>
  </tr>
<tr>
  <td>Functionality  before event<br /></td>
  <td><input name="his_event_before" type="text" id="his_event_before" /></td>
  </tr>
<tr>
  <td>Surgery<br /></td>
  <td><input name="his_event_surgery" type="text" id="his_event_surgery" /></td>
  </tr>
<tr>
  <td>Injury    </td>
  <td><input name="his_event_injury" type="text" id="his_event_injury" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Imaging</td>
  <td></td>
  </tr>
<tr>
  <td><p>Background</p></td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p>Previous study<br />
  </p></td>
  <td><input name="imag_prev" type="text" id="imag_prev" /></td>
  </tr>
<tr>
  <td>Previous  study reports<br /></td>
  <td><input name="imaging_prevreport" type="text" id="imaging_prevreport" /></td>
  </tr>
<tr>
  <td>pacemaker or any implanted metal<br /></td>
  <td><input name="imag_metal" type="text" id="imag_metal" /></td>
  </tr>
<tr>
  <td>implanted devices<br /></td>
  <td><input name="imag_device" type="text" id="imag_device" /></td>
  </tr>
<tr>
  <td>tattoos  or piercing on your upper body?</td>
  <td><input name="imag_tattoo" type="text" id="imag_tattoo" /></td>
  </tr>
<tr>
  <td>major surgeries<br /></td>
  <td><input name="imag_surgery" type="text" id="imag_surgery" /></td>
  </tr>
<tr>
  <td>claustrophobia<br /></td>
  <td><input name="imag_claus" type="text" id="imag_claus" /></td>
  </tr>
<tr>
  <td>pregnant&nbsp;</td>
  <td><input name="imag_preg" type="text" id="imag_preg" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Study</td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p> Modality<br />
  </p></td>
  <td><input name="imag_study_modality" type="text" id="imag_study_modality" /></td>
  </tr>
<tr>
  <td>Date<br /></td>
  <td><input name="imag_study_date" type="text" id="imag_study_date" /></td>
  </tr>
<tr>
  <td>Time<br /></td>
  <td><input name="imag_study_time" type="text" id="imag_study_time" /></td>
  </tr>
<tr>
  <td>AccessionNumber<br /></td>
  <td><input name="imag_study_accession" type="text" id="imag_study_accession" /></td>
  </tr>
<tr>
  <td>InstitutionName<br /></td>
  <td><input name="imag_study_institution" type="text" id="imag_study_institution" /></td>
  </tr>
<tr>
  <td>ReferringPhysicianName<br /></td>
  <td><input name="imag_study_physician" type="text" id="imag_study_physician" /></td>
  </tr>
<tr>
  <td>StationName<br /></td>
  <td><input name="imag_study_station" type="text" id="imag_study_station" /></td>
  </tr>
<tr>
  <td>StudyDescription<br /></td>
  <td><input name="imag_study_des" type="text" id="imag_study_des" /></td>
  </tr>
<tr>
  <td>ManufacturerModelName           <br /></td>
  <td><input name="imag_study_model" type="text" id="imag_study_model" /></td>
  </tr>
<tr>
  <td>PatientComments<br /></td>
  <td><input name="imag_study_patient" type="text" id="imag_study_patient" /></td>
  </tr>
<tr>
  <td>ProtocolName: <br /></td>
  <td><input name="imag_study_protocol" type="text" id="imag_study_protocol" /></td>
  </tr>
<tr>
  <td>PatientPosition: <br /></td>
  <td><input name="imag_study_patposition" type="text" id="imag_study_patposition" /></td>
  </tr>
<tr>
  <td>StudyInstanceUID</td>
  <td><input name="imag_study_uid" type="text" id="imag_study_uid" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Report</td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p> Lesion  Type<br />
  </p></td>
  <td><input name="imag_report_type" type="text" id="imag_report_type" /></td>
  </tr>
<tr>
  <td>Certainty<br /></td>
  <td><input name="image_report_certainty" type="text" id="image_report_certainty" /></td>
  </tr>
<tr>
  <td>Size <br /></td>
  <td></td>
  </tr>
<tr>
  <td>Max  Diameter<br /></td>
  <td><input name="imag_report_maxdiameter" type="text" id="imag_report_maxdiameter" /></td>
  </tr>
<tr>
  <td>Volume<br /></td>
  <td><input name="imag_report_volume" type="text" id="imag_report_volume" /></td>
  </tr>
<tr>
  <td>Location<br /></td>
  <td><input name="imag_report_location" type="text" id="imag_report_location" /></td>
  </tr>
<tr>
  <td>Lesion  Nature<br /></td>
  <td><input name="imag_location_nature" type="text" id="imag_location_nature" /></td>
  </tr>
<tr>
  <td>Side<br /></td>
  <td><input name="imag_report_side" type="text" id="imag_report_side" /></td>
  </tr>
<tr>
  <td>Diagnosis<br /></td>
  <td><input name="imag_report_dianosis" type="text" id="imag_report_dianosis" /></td>
  </tr>
<tr>
  <td>Physician  Comments<br /></td>
  <td><input name="imag_report_comment" type="text" id="imag_report_comment" /></td>
  </tr>
<tr>
  <td>ROI<br /></td>
  <td><input name="imag_report_roi" type="text" id="imag_report_roi" /></td>
  </tr>
<tr>
  <td>Annotation</td>
  <td><input name="imag_report_anno" type="text" id="imag_report_anno" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p>Rehabilitation Information</p></td>
  <td></td>
  </tr>
<tr>
  <td>Evaluation</td>
  <td></td>
  </tr>
<tr>
  <td><p>&nbsp;</p></td>
  <td></td>
  </tr>
<tr>
  <td>Events<br /></td>
  <td></td>
  </tr>
<tr>
  <td>Test name<br /></td>
  <td><p>
    <input name="rehab_eval_event_name" type="text" id="rehab_eval_event_name" />
  </p></td>
  </tr>
<tr>
  <td>Evaluation Date<br /></td>
  <td><input name="rehab_eval_event_date" type="text" id="rehab_eval_event_date" /></td>
  </tr>
<tr>
  <td>Stage <br /></td>
  <td><input name="Rehab_eval_event_stage" type="text" id="Rehab_eval_event_stage" /></td>
  </tr>
<tr>
  <td>Evaluator<br /></td>
  <td><input name="rehab_eval_event_evaluator" type="text" id="rehab_eval_event_evaluator" /></td>
  </tr>
<tr>
  <td>Visit  Number<br /></td>
  <td><input name="rehab_eval_event_visitnum" type="text" id="rehab_eval_event_visitnum" /></td>
  </tr>
<tr>
  <td>Tasks<br /></td>
  <td></td>
  </tr>
<tr>
  <td>Name</td>
  <td><input name="rehab_eval_task_name" type="text" id="rehab_eval_task_name" /></td>
  </tr>
<tr>
  <td>Result<br /></td>
  <td><input name="rehab_eval_task_result" type="text" id="rehab_eval_task_result" /></td>
  </tr>
<tr>
  <td>Comments<br /></td>
  <td><input name="rehab_eval_task_comment" type="text" id="rehab_eval_task_comment" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td>Event  Score</td>
  <td><input name="rehab_eval_event_score" type="text" id="rehab_eval_event_score" /></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p>Treatments </p></td>
  <td></td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td></td>
  </tr>
<tr>
  <td><p>Events <br />
  </p></td>
  <td></td>
  </tr>
<tr>
  <td>Date<br /></td>
  <td><input name="rehab_treat_event_date" type="text" id="rehab_treat_event_date" /></td>
  </tr>
<tr>
  <td>Stage </td>
  <td><input name="rehab_treat_event_stage" type="text" id="rehab_treat_event_stage" />    <br /></td>
  </tr>
<tr>
  <td>Therapist</td>
  <td><input name="rehab_treat_event_therapist" type="text" id="rehab_treat_event_therapist" />    <br /></td>
  </tr>
<tr>
  <td>Visit  Number</td>
  <td><input name="rehab_treat_event_visitnum" type="text" id="rehab_treat_event_visitnum" />    <br /></td>
  </tr>
<tr>
  <td>Pre-Training</td>
  <td><input name="rehab_treat_event_pre" type="text" id="rehab_treat_event_pre" />    <br /> </td>
  </tr>
<tr>
  <td>Tasks </td>
  <td></td>
  </tr>
<tr>
  <td> Name<br /></td>
  <td><input name="rehab_treat_event_task_name" type="text" id="rehab_treat_event_task_name" /></td>
  </tr>
<tr>
  <td>Start  Time<br /></td>
  <td><input name="rehab_treat_event_task_start" type="text" id="rehab_treat_event_task_start" /></td>
  </tr>
<tr>
  <td>End  Time<br /></td>
  <td><input name="rehab_treat_event_task_end" type="text" id="rehab_treat_event_task_end" /></td>
  </tr>
<tr>
  <td>Description<br /></td>
  <td><input name="rehab_treat_event_task_des" type="text" id="rehab_treat_event_task_des" /></td>
  </tr>
<tr>
  <td>Comments<br /></td>
  <td><input name="rehab_treat_event_task_comment" type="text" id="rehab_treat_event_task_comment" /></td>
  </tr>
<tr>
  <td>Post-Training</td>
  <td><input name="rehab_treat_event_post" type="text" id="rehab_treat_event_post" /></td>
  </tr>
<tr>
<td><input type="submit" name="submit" value="Download XML report" class="btn download">
</td>
<td><input type="submit" name="preview" value="View XML report" class="btn preview">
</td>
</tr>
</table>
<!-- End of the form html data -->
</div>
<input type="hidden" name="online" id="online" value="0">
</form>
<?php include('../template/footer.html'); ?>
</div>
</body>

<script type="text/javascript">
$(function(){
	$('.download').click(function(){
			$('#online').val(0);
		});

	$('.preview').click(function(){
			$('form').attr('action','preview.php');
		});
	$('form').submit(function(e){
		$.each($("[fcheck='required']"),function(){
				if($(this).val().length==0)
					{
						alert($(this).attr('fmsg'));
						e.preventDefault();
						$('#online').val(0);
					}
			});

		});
	});

</script>
</html>
