<?php
/*
show country names for all visitors this month (when flag selected)
*/
$i = 0;
$yr = date("Y"); $mo = date("m");
$lm_end = date("Y-m-d", mktime(0,0,0,$mo,0,$yr));
$query = "SELECT distinct flag from page_comments WHERE flag!='blank' AND dated>'$lm_end' ORDER by flag";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	if (strlen($row['flag'])<4) {
		$country = strtoupper($row['flag']);
	} else {
		$country = ucwords(str_replace("_", " ",$row['flag']));
	}
	$img = "comments/images/flags/". $row['flag']. ".gif";
	$size = getimagesize($img);
	echo "<img src='". $img. "' ". $size[3]. " alt='". $row['flag']. "'/>&nbsp;&nbsp;";
	echo $country. "<br/>\n";
	$i++;
}
echo "<br/>You have received visitors from ". $i. " countries this month.";
?>