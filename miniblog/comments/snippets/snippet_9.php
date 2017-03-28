<?php
/*
show total comments posted year to date
*/
$yr = date("Y") -1;
$dec31 = date("Y-m-d", mktime(0,0,0,12,31,$yr));
$query = "SELECT COUNT(comments) from page_comments WHERE dated>'$dec31'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo "You have received ". $row['COUNT(comments)']. " comments this year.";
?>
