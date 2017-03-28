<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
try
{
$xmlstr = sprintf("<?xml version='1.0' encoding='UTF-8'?> <Structure_Report> <Author>%s</Author> <Patient_Information><Contact><Phone>%s</Phone>
<Email>%s</Email><Address>%s</Address><Emergency_contact_person><Name>%s</Name><Relation_to_subject>%s</Relation_to_subject><Phone>%s</Phone></Emergency_contact_person></Contact><Demographics><Date_of_Birth>%s</Date_of_Birth><Name>%s</Name><City_of_residence>%s</City_of_residence><Gender>%s</Gender><ID>%s</ID><SSN>%s</SSN><Occupation>%s</Occupation><Country_of_residence>%s</Country_of_residence><Employed>%s</Employed></Demographics><History><Medical_status>%s</Medical_status><Event><Cause_of_accident_type>%s</Cause_of_accident_type><Time>%s</Time><Description>%s</Description><Body_Location>%s</Body_Location><Functionality_before_event>%s</Functionality_before_event><Surgery>%s</Surgery><Injury>%s</Injury></Event></History></Patient_Information> <Imaging><Background><Previous_study>%s</Previous_study><Previous_reports>%s</Previous_reports><pacemaker>%s</pacemaker><implanted_devices>%s</implanted_devices><tattoos>%s</tattoos><surgeries>%s</surgeries><claustrophobia>%s</claustrophobia><pregnant>%s</pregnant></Background><Study><Modality>%s</Modality><Date>%s</Date><Time>%s</Time><AccessionNumber>%s</AccessionNumber><InstitutionName>%s</InstitutionName><ReferringPhysicianName>%s</ReferringPhysicianName><StationName>%s</StationName><StudyDescription>%s</StudyDescription><ManufactureModelName>%s</ManufactureModelName><PatientComments>%s</PatientComments><ProtocolName>%s</ProtocolName><PatientPosition>%s</PatientPosition><StudyInstanceUID>%s</StudyInstanceUID></Study><Report><Lesion_Type>%s</Lesion_Type><Certainty>%s</Certainty><Size><Max_Diameter>%s</Max_Diameter><Volume>%s</Volume></Size><Location>%s</Location><Lesion_Nature>%s</Lesion_Nature><Side>%s</Side><Diagnosis>%s</Diagnosis><Physician_Comments>%s</Physician_Comments><ROI>%s</ROI><Annotation>%s</Annotation></Report></Imaging><Rehabilitation_Information><Evaluation><Event><Name>%s</Name><Date>%s</Date><Stage>%s</Stage><Evaluator>%s</Evaluator><Visit_Number>%s</Visit_Number><Task><Name>%s</Name><Result>%s</Result><Comments>%s</Comments></Task><Event_Score>%s</Event_Score></Event></Evaluation><Treatment><Event><Date>%s</Date><Stage>%s</Stage><Therapist>%s</Therapist><Visit_Number>%s</Visit_Number><Pre_Training>%s</Pre_Training><Task><Name>%s</Name><Start>%s</Start><End>%s</End><Description>%s</Description><Comments>%s</Comments><Post_Training>%s</Post_Training></Task></Event></Treatment></Rehabilitation_Information></Structure_Report>",
		$_POST['author'],
		$_POST['phone'],
		$_POST['email'],
		$_POST['address'],
		$_POST['ecname'],
		$_POST['ecrelation'],
		$_POST['ecphone'],
		$_POST['demo_dob'],
		$_POST['demo_name'],
		$_POST['demo_city'],
		$_POST['demo_gender'],
		$_POST['demo_id'],
		$_POST['demo_ssn'],
		$_POST['demo_occupation'],
		$_POST['demo_country'],
		$_POST['demo_employed'],
		$_POST['his_status'],
		$_POST['his_event_type'],
		$_POST['his_event_time'],
		$_POST['his_event_des'],
		$_POST['his_event_location'],
		$_POST['his_event_before'],
		$_POST['his_event_surgery'],
		$_POST['his_event_injury'],
		$_POST['imag_prev'],
		$_POST['imaging_prevreport'],
		$_POST['imag_metal'],
		$_POST['imag_device'],
		$_POST['imag_tattoo'],
		$_POST['imag_surgery'],
		$_POST['imag_claus'],
		$_POST['imag_preg'],
		$_POST['imag_study_modality'],
		$_POST['imag_study_date'],
		$_POST['imag_study_time'],		
		$_POST['imag_study_accession'],
		$_POST['imag_study_institution'],		
		$_POST['imag_study_physician'],
		$_POST['imag_study_station'],		
		$_POST['imag_study_des'],
		$_POST['imag_study_model'],		
		$_POST['imag_study_patient'],
		$_POST['imag_study_protocol'],		
		$_POST['imag_study_patposition'],
		$_POST['imag_study_uid'],		
		$_POST['imag_report_type'],
		$_POST['image_report_certainty'],		
		$_POST['imag_report_maxdiameter'],
		$_POST['imag_report_volume'],		
		$_POST['imag_report_location'],
		$_POST['imag_location_nature'],		
		$_POST['imag_report_side'],
		$_POST['imag_report_dianosis'],		
		$_POST['imag_report_comment'],
		$_POST['imag_report_roi'],		
		$_POST['imag_report_anno'],
		$_POST['rehab_eval_event_name'],		
		$_POST['rehab_eval_event_date'],
		$_POST['Rehab_eval_event_stage'],		
		$_POST['rehab_eval_event_evaluator'],
		$_POST['rehab_eval_event_visitnum'],
		$_POST['rehab_eval_task_name'],
		$_POST['rehab_eval_task_result'],
		$_POST['rehab_eval_task_comment'],
		$_POST['rehab_eval_event_score'],
		$_POST['rehab_treat_event_date'],
		$_POST['rehab_treat_event_stage'],
		$_POST['rehab_treat_event_therapist'],
		$_POST['rehab_treat_event_visitnum'],
		$_POST['rehab_treat_event_pre'],
		$_POST['rehab_treat_event_task_name'],
		$_POST['rehab_treat_event_task_start'],
		$_POST['rehab_treat_event_task_end'],
		$_POST['rehab_treat_event_task_des'],
		$_POST['rehab_treat_event_task_comment'],
		$_POST['rehab_treat_event_post']);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}  
//echo $xmlstr;

?>
<?php
$xml = simplexml_load_string($xmlstr);

if($_POST['online']==1)
{
	header('Content-Type: text/xml'); 
}
else
{
	header('Content-type: "text/xml"; charset="utf8"');
	header('Content-disposition: attachment; filename="reports.xml"');
}
echo $xml->asXML();

?>