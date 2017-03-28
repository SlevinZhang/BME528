<?php

/************************************************************************************
Page Comments - Written by Andy Bowers | http://www.halfadot.com | andy@halfadot.com
Version 6.0 - release date 2008-02-28 [Original Version 1 release 2003-11-28]

You are free to use this script as long as the credits and notes are not removed.  If
you intend to distribute this script, make sure to include all of the files from the
original zip package.  Your use of this script is subject to the terms of the license
included in the zipped package as license.txt, and constitutes acceptance thereto.

Please e-mail me with any questions or comments - I may even respond :)
*/

/***********************************************************************************
There is no need to edit ANYTHING below this comment.  Almost EVERYTHING you need
to edit is contained in the comments-config.php file and comments-lang.php file. 
PLEASE READ THE DOCUMENTATION FILE!
************************************************************************************/

include("includes/comments-config.php"); // configuration parameters package
include("includes/comments-lang.php"); // language/words package

$comm_page = is_numeric($_GET['comm_page']) ? $_GET['comm_page'] : 1;
if ($comm_page<1) {
	$comm_page = 1;
}

// Figure out the limit for the query based on the current page number. 
$from = $comm_page * $comment_limit - $comment_limit;

include("includes/db_conn.php"); // connect to host and select db
mysql_connect($db_host, $db_user, $db_pass) or die("Connection Error: ". mysql_error());
mysql_select_db($db_name);

// construct page query to find out how many matches
$result=mysql_db_query($db_name,"select count(*) from $db_table WHERE page_id='$page_id' AND is_approved = '1'");
$count=mysql_result($result,0,"count(*)");
$total_pages = ceil($count / $comment_limit);

// and the average rating is ...
$query = "SELECT AVG(rating) from $db_table WHERE page_id='$page_id' AND is_approved = '1' AND rating>'0'";
$result = mysql_query($query) or die("error ". mysql_error(). " with query ".$query);
$row = mysql_fetch_array($result);
$av_rating = number_format($row['AVG(rating)'],2);

// construct page query to find out how many matches
$query = "SELECT * from $db_table WHERE page_id = '$page_id' AND is_approved = '1' ORDER by dated DESC LIMIT $from, $comment_limit";// what matches THIS page?
$result = mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query); 

// skip output if no comments exist
if (!$count) {
	echo "<p style='". $num_style. "'>". $no_comments. "</p>";
} else {
	echo "<p style='". $num_style. "'>". $comments_to_date. $count. $this_is_page. $comm_page. $page_of_page. $total_pages. ". ";
	if (($av_rating>0) && ($art_rating==1)) {
	   $stars = 5 * round($av_rating/0.5);
	   echo $average_rating. "<img src='comments/images/stars/stars_". $stars. ".gif' alt=''/>";
	}
	echo "</p>";
	// output comments
	echo "<table cellpadding='0' cellspacing='0' width='100%' border='0' align='center'>";
	while ($myrow = mysql_fetch_array($result)) // loop through all results
	{ 
		$style = $style == $ro1 ? $ro2 : $ro1; 
		echo "<tr bgcolor='". $style. "'>";
		echo "<td><p style='". $comm_style. "'><strong>";
		if (!$myrow['name']) {
			echo $unknown_poster;
		} else {
			echo $myrow['name'];
		}
		echo "&nbsp;&nbsp;&nbsp;";
		if (!$myrow['location']) {
			echo $unknown_location;
		} else {
			echo $myrow['location'];
		}
		if ($show_flags == 1) {
			$flag_image = "comments/images/flags/". $myrow['flag']. ".gif";
			if (file_exists($flag_image)) {
				$size = getimagesize($flag_image);
				echo "&nbsp;<img src='". $flag_image. "' ". $size[3]. " alt=''/>";
			}
		}
		echo "</strong></p></td>";
		echo "<td align='right'><p style='". $comm_style. "'>";
		niceday($myrow['dated']);
		if (($art_rating==1) && ($myrow['rating']>0) && ($visitor_rating==1)) {
		   $star_img = "comments/images/stars/stars_". 10*$myrow['rating']. ".gif";
		   $size = getimagesize($star_img);
		   echo "&nbsp;<img src='". $star_img. "' ". $size[3]. " alt=''/>";
		}

		echo "</p></td></tr>";
		echo "<tr bgcolor='". $style. "'>";
		echo "<td colspan='2' style='border-bottom:1px dotted ". $space_color. ";'><p style='". $comm_style. "'>";
		$comments = stripslashes($myrow['comments']);
		if (strlen($comments)>$maxshow_comments) {
		   $comments = substr($comments,0,$maxshow_comments). "... <a href='comments/showmore.php?id=". $myrow['id']. "'>". $show_more. "</a>&nbsp;<strong>&raquo;</strong>";
		}
		echo nl2br($comments);
		if ($myrow['admin_comment']) {
			echo "<br/><br/>". $admin_comment. "&nbsp;<span style='color:#c30;'><em>". $myrow['admin_comment']. "</span></em>";
		} 
		echo "</p></td></tr>\n";
	}
	// loop done
	echo "</table>\n";
}
// Pagination magic (of sorts)
if ($total_pages>1) {
			echo "<p><br/>Page:&nbsp;";
			for ($z=-5; $z<6;$z++) {
				$dapage = $comm_page+$z;
				if (($dapage>0) && ($dapage<=$total_pages)) {
					if ($dapage==$comm_page) {
						echo "-". $dapage. "-";
					} else {
						echo "<a class='pagelink' href='". $_SERVER['PHP_SELF']. "?comm_page=". $dapage. "'>&nbsp;". $dapage. "&nbsp;</a>";
					}
					echo "&nbsp;&nbsp;";
				}			
			}
			echo "</p>";
}
?>