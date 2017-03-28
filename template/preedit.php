<?php 
function preedit($row_result)
{
	foreach ($row_result as $key => $value)
	{
		$value = str_replace(array("\r\n", "\n", "\r"), ' ', $value);
		$value = addslashes($value);
		$value = htmlentities($value);
		echo "<script type=\"text/javascript\">
	  	var ekey = '".$key."';";
		if($value != null)
		echo "
		var evalue = '".$value."';";
		else
		echo "
		var evalue = '';";
		echo "
		$('select[name=\"'+ekey+'\"]>option[value=\"'+evalue+'\"]').attr('selected','selected');
		$(':radio[name=\"'+ekey+'\"][value=\"'+escape(evalue)+'\"]').attr('checked','checked');
		if(evalue != 'Null'&& evalue !='')
		{
			$(':checkbox[name=\"'+ekey+'\"]').attr('checked','checked');		
		}
		$(':text[name=\"'+ekey+'\"]').attr('value',evalue);
		$(':hidden[name=\"'+ekey+'\"]').attr('value',evalue);
		$('textarea[name=\"'+ekey+'\"]').html(evalue);
		</script>";

	}
}
?>  
