<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>DigitalMidget: Page Comments Editor</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="author" content="andy@halfadot.com" />
<meta name="owner" content="halfadot smallwebs - Andy Bowers" />
<meta name="copyright" content="Copyright 2000-2008, all rights reserved. No part of this code may be reproduced in any way, including graphics, text, coding, or presentation" />
<link rel="stylesheet" media="screen" href="edit_css.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>

<table width='80%' border='0'>
<tr>
<td colspan="2"><h1>Page Comments Editor</h1></td>
<td rowspan="2"><img align='right' src="../images/editor/legend.gif" width="352" height="65" alt=""/></td>
</tr>
<tr>
<td><form style="margin:0px;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Comments/page:
<select name="limit">
<?php
for ($i=0;$i<count($lims);$i++) {
    echo "<option value='". $lims[$i]. "'";
    if ($lims[$i]==$limit) { echo " selected"; }	
    echo ">". $lims[$i]. "</option>\n";
}
?>
</select>
<input type="submit" style="background:#f60; color:#000; border:1px solid #000;" value="CHANGE" /></p>
</form>
</td>
<td><p><img src="../images/editor/approved.gif" width="15" height="15" alt="" border="0" />&nbsp;<a href="bulk_approve.php">Bulk Approve/</a>&nbsp;|&nbsp;<a href="bulk_delete.php">Bulk Delete</a>&nbsp;<img src="../images/editor/delete.gif" width="15" height="15" alt="" border="0" /></p></td>
</tr>
</table>
