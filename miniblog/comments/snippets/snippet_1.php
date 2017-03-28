<?php
/*
count visitor countries (where visitor selected a flag!)
*/
$query = "SELECT distinct flag from page_comments WHERE flag!='blank'";
$result = mysql_query($query) or die(mysql_error());
echo "You have received visitors from ". mysql_num_rows($result). " countries.";
?>