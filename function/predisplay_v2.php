<?php 
function predisplay($row_result)
{
		echo "<script type=\"text/javascript\">";
		
	foreach ($row_result as $key => $value)
	{
		echo "
		$(\"select[name='$key']>option[value='$value']\").attr('selected','selected');
		$(\"select[name='$key']\").attr('disabled','disabled');		
		$(\":radio[name='$key'][value='$value']\").attr('checked','checked').attr('disabled','disabled');
		if('$value')
		{
			$(\":checkbox[name='$key']\").attr('checked','checked').attr('disabled','disabled');		
		}
		$(\"input[name='$key']\").attr('value','$value').attr('disabled','disabled');
		$(\"textarea[name='$key']\").html('$value').attr('disabled','disabled');";

	}
	echo 		"$(\"input[type='submit']\").remove()</script>";

}
?>  
