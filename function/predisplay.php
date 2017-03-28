<?php 
function predisplay($row_result)
{
		echo "<script type=\"text/javascript\">";
	foreach ($row_result as $key => $value)
	{
		$value = str_replace(array("\r\n", "\n", "\r"), ' ', $value);
		$value = addslashes($value);
		$value = htmlentities($value);
		echo "var ekey = '".$key."';";
		if($value != null)
		echo "
		var evalue = '".$value."';";
		else
		echo "
		var evalue = '';";
		echo "
		$('select[name=\"'+ekey+'\"]>option[value=\"'+evalue+'\"]').attr('selected','selected');
		$(':radio[name=\"'+ekey+'\"][value=\"'+escape(evalue)+'\"]').attr('checked','checked').attr('disabled','disabled');
		if(evalue != null && evalue !='Null' && evalue !='')
		{
			$(':checkbox[name=\"'+ekey+'\"]').attr('checked','checked').attr('disabled','disabled');		
		}
		$(':text[name=\"'+ekey+'\"]').attr('value',evalue).attr('disabled','disabled');
		$('textarea[name=\"'+ekey+'\"]').html(evalue).attr('disabled','disabled');
		$('select[name=\"'+ekey+'\"]').attr('disabled','disabled');";

	}
	echo 		"$(\"input[type='submit']\").remove()</script>";
	echo "</script>";
}

?>  
