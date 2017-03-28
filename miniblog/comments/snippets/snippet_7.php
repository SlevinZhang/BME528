<?php
/*
show total comments posted today
*/
list($y,$m,$d) = explode("-", date("Y-m-d"));
$day_end = date("Y-m-d", mktime(0,0,0,$m,$d-1,$y));
$query = "SELECT COUNT(comments) from page_comments WHERE dated>'$day_end'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo "You have received ". $row['COUNT(comments)']. " comments today.";
?>
