<?php
/*
show country names for all visitors to date (when flag selected)
*/
$i = 0;
$query = "SELECT distinct flag from page_comments WHERE flag!='blank' ORDER by flag";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	  if (strlen($row['flag'])<4) {
	  	 $country = strtoupper($row['flag']);
	} else {
	  $country = ucwords(str_replace("_", " ",$row['flag']));
	  }
	  echo $country. "<br/>\n";
	  $i++;
}
echo "<br/>You have received visitors from ". $i. " countries.";
?>
