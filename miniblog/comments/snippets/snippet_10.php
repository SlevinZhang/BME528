<?php
/*
show total comments posted since day 1
*/
$query = "SELECT COUNT(comments) from page_comments";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo "You have received ". $row['COUNT(comments)']. " comments in total.";
?>