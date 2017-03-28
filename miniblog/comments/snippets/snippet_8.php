<?php
/*
show total comments posted month to date
*/
$yr = date("Y"); $mo = date("m");
$lm_end = date("Y-m-d", mktime(0,0,0,$mo,0,$yr));
$query = "SELECT COUNT(comments) from page_comments WHERE dated>'$lm_end'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo "You have received ". $row['COUNT(comments)']. " comments this month.";
?>
