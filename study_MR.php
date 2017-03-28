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
<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script> 

<?php
if($_GET["Date"]==null ||$_GET["Date"]=='ASC_Date')
{
if($_GET["Description"]==null)
{
$Restrict="SELECT series.dcm_SeriesDate,series.dcm_SeriesTime,series.dcm_SeriesDescription,series.dcm_Modality,studies.dcm_StudyInstanceUID
FROM series,studies
WHERE series.status='active'  AND series.study_id='".$_GET["UID"]."' AND studies.id='".$_GET["UID"]."'  
ORDER BY series.dcm_SeriesDate ASC;";}
else
{$Restrict="SELECT series.dcm_SeriesDate,series.dcm_SeriesTime,series.dcm_SeriesDescription,series.dcm_Modality,studies.dcm_StudyInstanceUID
FROM series,studies
WHERE series.status='active'  AND series.study_id='".$_GET["UID"]."' AND studies.id='".$_GET["UID"]."' 
AND series.dcm_SeriesDescription LIKE '%" .$_GET["Description"]."%'
ORDER BY series.dcm_SeriesDate ASC;";}
}
else if($_GET["Date"]=='DESC_Date')
{
if($_GET["Description"]==null)
{
$Restrict="SELECT series.dcm_SeriesDate,series.dcm_SeriesTime,series.dcm_SeriesDescription,series.dcm_Modality,studies.dcm_StudyInstanceUID
FROM series,studies
WHERE series.status='active'  AND series.study_id='".$_GET["UID"]."' AND studies.id='".$_GET["UID"]."' 
ORDER BY series.dcm_SeriesDate DESC;";}
else
{$Restrict="SELECT series.dcm_SeriesDate,series.dcm_SeriesTime,series.dcm_SeriesDescription,series.dcm_Modality,studies.dcm_StudyInstanceUID
FROM series,studies
WHERE series.status='active'  AND series.study_id='".$_GET["UID"]."' AND studies.id='".$_GET["UID"]."' 
AND series.dcm_SeriesDescription LIKE '%" .$_GET["Description"]."%'
ORDER BY series.dcm_SeriesDate DESC ;";}
}
$result = mysql_query($Restrict,$con) or die(mysql_error());
$totalRows_Recordset = mysql_num_rows($result );
?>
<script>
 

  var click_num=1;
  var a = new Array();
  var pre=0;
  a['dcm_SeriesDate']=new Array();
  a['dcm_SeriesTime']=new Array();
  a['dcm_SeriesDescription']=new Array();
  a['dcm_Modality']=new Array();
  a['dcm_StudyInstanceUID']=new Array();
<?php
  $i=0;
   $strip=array("'","\n");
  $replace = array("\'","");
  while($row = mysql_fetch_array($result)){
  
   if($i<$totalRows_Recordset)
   { 
    $row['dcm_SeriesDescription']=str_replace($strip,$replace,$row['dcm_SeriesDescription']);
    echo "a['dcm_SeriesDate'][".$i."] = '" . $row['dcm_SeriesDate'] . "';"; 
    echo "a['dcm_SeriesTime'][".$i."] = '" . $row['dcm_SeriesTime'] . "';"; 
	echo "a['dcm_SeriesDescription'][".$i."]= '" . $row['dcm_SeriesDescription'] . "';"; 
	echo "a['dcm_Modality'][".$i."]= '" . $row['dcm_Modality'] . "';";
	echo "a['dcm_StudyInstanceUID'][".$i."]= '" . $row['dcm_StudyInstanceUID'] . "';";
	$i=$i+1;
  }
  }
?>
  var now_num=0;
 // var now=now_num.toString();
  var i=0;
  var UID="<?php echo $_GET["UID"];?>";
  var number="<?php echo $_GET["Number"];?>"; 
  var date="<?php echo $_GET["Date"];?>";
  var n="study_MR.php?UID="+UID+"&&Number="+number+"&&Date="+date+"&&Description=";
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
var total=<?php echo $totalRows_Recordset;?>;

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
var str1 ="study_MR.php?UID="+"<?php echo $_GET["UID"];?>"+"&Number="+"<?php echo $_GET["Number"];?>"+"&Description="+testform.Description.value+"&Date=";
var n = str1.concat(Date);
id.setAttribute("href",n);

}
function creatTab_10(num)
{ 
  var start=10*num;
  var num_id=num.toString();
  var end=10*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_Date(this)'>SeriesDate</a></th><th>SeriesTime</th><th>Description</th><th>Modality</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_Date="<a href="+study_url+">"+a['dcm_SeriesDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_SeriesTime'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_SeriesDescription'][m]+"</a>";
var newlink_Mod="<a href="+study_url+">"+a['dcm_Modality'][m]+"</a>";
tabstr = tabstr+"<tr><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Des+"</td><td>"+newlink_Mod+"</td></tr>";
  }  
$("#addtable").append(tabstr);
}
function creatTab_20(num)
{ 
  var start=20*num;
  var num_id=num.toString();
  var end=20*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_Date(this)'>SeriesDate</a></th><th>SeriesTime</th><th>Description</th><th>Modality</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_Date="<a href="+study_url+">"+a['dcm_SeriesDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_SeriesTime'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_SeriesDescription'][m]+"</a>";
var newlink_Mod="<a href="+study_url+">"+a['dcm_Modality'][m]+"</a>";
tabstr = tabstr+"<tr><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Des+"</td><td>"+newlink_Mod+"</td></tr>";
  }  
$("#addtable").append(tabstr);
}
function creatTab_50(num)
{ 
  var start=50*num;
  var num_id=num.toString();
  var end=50*(num+1);
	var tabstr = "<table class=\"table\" id="+num_id+"><tr><th><a onclick='Order_Date(this)'>SeriesDate</a></th><th>SeriesTime</th><th>Description</th><th>Modality</th></tr>";
  for(var m=start; m<end&&m<total;m++)
{var study_url="wado/www/admin/study?site=IPILab&study_uid="+a['dcm_StudyInstanceUID'][m];
var newlink_Date="<a href="+study_url+">"+a['dcm_SeriesDate'][m]+"</a>";
var newlink_Time="<a href="+study_url+">"+a['dcm_SeriesTime'][m]+"</a>";
var newlink_Des="<a href="+study_url+">"+a['dcm_SeriesDescription'][m]+"</a>";
var newlink_Mod="<a href="+study_url+">"+a['dcm_Modality'][m]+"</a>";
tabstr = tabstr+"<tr><td>"+newlink_Date+"</td><td>"+newlink_Time+"</td><td>"+newlink_Des+"</td><td>"+newlink_Mod+"</td></tr>";
  }  
$("#addtable").append(tabstr);
}
 function changenum(id)
{
var str1 ="study_MR.php?UID="+UID+"&&Description="+testform.Description.value+"&&Number=";
var str2 = id.innerHTML;
var n = str1.concat(str2);
id.setAttribute("href",n);


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
document.getElementById('now').innerHTML ="This is "+now_num.toString()+" out of "+total;

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
 //$("#now").append(now_num.toString());
}
}


 </script>

<body>
<div class="container">
<?php include 'template/menu.php';?>

<div class="navbar"> 
   <button type="button" id="MR"  class="btn"><a href="ALL_tab.php?Number=10" id="Back_but">HOME</button> 
   <button type="button" class="btn" id="MR"><a href="MR_tab.php?Number=10" id="MR_but">MR Study</a></button>
   <button type="button" class="btn" id="CT"><a href="CT_tab.php?Number=10" id="CT_but">CT Study</a></button>
   </br>
   </br>
  <form name="testform">
<input type="text" placeholder="Type SeriesDescription keywords" name="Description" />
<input type="button" value="Submit" onclick="window.location.replace(n+testform.Description.value)" class="btn btn-primary" />
</form>
</div>
<div class="row">
<a onclick="javascript:Pre();" class="span1">Pre</a>
<div class="span2 offset8">
<a  onclick="javascript:changenum(this);">10</a>
<a onclick="javascript:changenum(this);">20 </a>
<a onclick="javascript:changenum(this);">50 </a>
</div>
<a onclick="javascript:Next()" class="span1">Next</a>

</div>
<p> The Total Number Of Results is : <?php echo $totalRows_Recordset;?> </p>
<small id="now"></small>

<div id="addtable">
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
	
</script>
</footer>

</html>
 