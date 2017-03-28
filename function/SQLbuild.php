<?php require_once('../Connections/form.php'); ?>
<?php
function insbuild($formdata,$tblname,$PK='ID')
{
	$entrytime = date('Y-m-d H:i:s');
	$lastmodifytime = date('Y-m-d H:i:s');
	$fields = getfields($tblname);
	print_r($fields);
	$fieldstr="";
	$valstr = "";
	foreach($fields as $key=>$value)
	{
		if(in_array($value,array($PK,"entry_time","last_modify_time")))
			continue;
		$fieldstr .= $value.",";
		$valstr .=GetSQLValueString($formdata[$value],'text').",";
	}
	$fieldstr .= "entry_time,last_modify_time";
	$valstr .= "'$entrytime','$lastmodifytime'";
	$insertSQL = "INSERT INTO $tblname ($fieldstr) VALUES ($valstr)";
	return $insertSQL;
}

function updbuild($formdata,$tblname,$PK='ID')
{
	$lastmodifytime = date('Y-m-d H:i:s');
	$fields = getfields($tblname);
	print_r($fields);
	$updateSQL = "UPDATE $tblname SET ";
	foreach($fields as $key=>$value)
	{
		if(in_array($value,array($PK,"entry_time","last_modify_time")))
			continue;
		$updateSQL .= "$value=".GetSQLValueString($formdata[$value],'text').",";
	}
	$updateSQL .= "last_modify_time='$lastmodifytime' WHERE $PK=".GetSQLValueString($formdata[$PK],'text');
	return $updateSQL;
}


function getfields($tblname)
{
	$colSQL = "show columns in $tblname";
	mysql_select_db($database_form,$form);
	$colres = mysql_query($colSQL) or die(mysql_error());

	if (!$colres) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
     $fieldnames=array(); 
	if (mysql_num_rows($colres) > 0) {
		while ($row = mysql_fetch_assoc($colres)) {
          $fieldnames[] = $row['Field']; 
		}
	}
     return $fieldnames; 
	
}
?>