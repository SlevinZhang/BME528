<?php
/*
show ratings for pages
*/
$pages = array("", "Page I called 1", "The second page", "Page #3"); // modify to suit ALL the pages you have

$query = "SELECT distinct page_id from page_comments ORDER by page_id";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	  $page = $row['page_id'];
	  $query2 = "SELECT AVG(rating) from $db_table WHERE page_id='$page' AND is_approved = '1' AND rating>'0'";
	  $result2 = mysql_query($query2) or die("error ". mysql_error(). " with query ".$query2);
	  $row2 = mysql_fetch_array($result2);
	  $av_rating = number_format($row2['AVG(rating)'],2);	  
	  $rating = 0.5*round($av_rating*2+0.499);
	  $sortme[$i] = $rating. "|". $page;
	  $i++;
}
sort($sortme);
$sortme = array_reverse($sortme);
for ($i=0;$i<count($sortme);$i++) {
	list($rating,$page) = explode("|", $sortme[$i]);
	$star_img = "comments/images/stars/stars_". 10*$rating. ".gif";
	$size = @getimagesize($star_img);
	echo "<img src='". $star_img. "' ". $size[3]. " alt=''/> ". $pages[$page]. "<br/>";
}
?>