<?php
/*
show country flag for all visitors to date
$max = maximum # flags shown in a row
*/

$max = 10; // attempt to make the flags display orderly
$i = 0;
$query = "SELECT distinct flag from page_comments WHERE flag!='blank' ORDER by flag";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	  $img = "comments/images/flags/". $row['flag']. ".gif";
	  if (file_exists($img)) {
	  	 $i++;
	  	  $size = getimagesize($img);
	  	  echo "<img src='". $img. "' ". $size[3]. " alt='". $row['flag']. "'/>\n";
		  if ($max!=0) {
		  	 if ($i%$max==0) { echo "<br/>"; }
		}
	  }
}
echo "<br/>You have received visitors who identified their flag from ". $i. " countries.";
?>