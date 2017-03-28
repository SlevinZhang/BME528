<?php 
session_start(); 
include('configpass.php'); 
if($_SESSION['loggedin']!==true) { 
	if($_POST['pass']==$password) { 
		$_SESSION['loggedin']=true; 
	} else { 
		include('loginform.php'); 
	} 
} 
if($_SESSION['loggedin']===true) {

	/*********************************************************/
	// begin the REAL code for the quick and dirty bulk delete
	$ro1 = "#fdfdfd"; // odd rows background
	$ro2 = "#eeeeee"; // even rows background
	$limit = 20;
	?>
<head>
<title>DigitalMidget: Page Comments Bulk Delete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="author" content="andy@halfadot.com" />
<meta name="owner" content="halfadot smallwebs - Andy Bowers" />
<meta name="copyright" content="Copyright 2000-2008, all rights reserved. No part of this code may be reproduced in any way, including graphics, text, coding, or presentation" />
<link rel="stylesheet" media="screen" href="edit_css.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<p><strong>&laquo;</strong>&nbsp;<a href='comments-editor.php'>back to editor</a></p>
<h1>Bulk Delete Comments</h1>
	<?php
	include_once("../includes/db_conn.php");
	mysql_connect($db_host, $db_user, $db_pass) or die ("Error: Unable to connect"); 
	mysql_select_db($db_name) or die ("Error: Unable to open the database."); 

	if ($_POST['submit']=="Delete Selected") {
		$del = $_POST['del'];
		if (count($del)>0) {   
			foreach ($del as $f) {
				$query = "DELETE from $db_table WHERE id = '$f'";
				$result = mysql_query($query);
			}
		}
	}

	// Perform MySQL query on only the current page number's results 
	$query = "SELECT dated FROM $db_table";
	$result = mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query);
	$total_results = mysql_num_rows($result);
	if ($total_results > 0) {
		$total_pages = ceil($total_results / $limit); 
		$page = $_GET['page'];
		if ($page<1) { $page = 1; }
		// Figure out the limit for the query based on the current page number. 
		$from = $page * $limit - $limit;
		$query = "SELECT id, comments, is_approved, dated from $db_table ORDER by dated DESC,is_approved ASC  LIMIT $from, $limit";
		$result = mysql_query($query) or die("error ". mysql_error(). " with query ". $query);
		if (mysql_num_rows($result)>0) {
?>
<p><img style='float:left; padding:0 10px 0 0;' src="../images/responses/caution.gif" width="48" height="48" alt=""/>
Check each comment you wish to delete from those shown below.</p>
<p>Note that you can only delete entries from those shown below, i.e. if you select the next or previous page of comments then checked items return to unchecked.</p>
<br clear="all"/><br/>
<?php
			echo "<form name='delete' method='post' action=' ". $_SERVER['PHP_SELF']. "'>";
			echo "<table cellpadding='2' cellspacing='0' style='border:1px solid #ccc;' width='80%'><tr bgcolor='#cccccc'><td>&nbsp;<img src='../images/editor/delete.gif' width='15' height='15' alt=''/></td><td>Comment</td><td>OK?</td></td><td align='right' width='20'>Posted</td></tr>";
			while ($row = mysql_fetch_array($result)) {
				$when = explode(" ",$row['dated']);
				$style = $style == $ro1 ? $ro2 : $ro1;
				echo "<tr bgcolor='". $style. "'>\n";
				echo "<td valign='top'><input name='del[]' type='checkbox' value='". $row['id']. "'/></td>";
				echo "<td valign='top'>". $row['comments']. "</td>";
				echo "<td valign='top'>";
				if ($row['is_approved']==0) {$img ="unapproved";}
				else {$img = "approved";}
				echo "<img src='../images/editor/". $img. ".gif' width='15' height='15' alt=''/></td>";
				echo "<td valign='top' width='30'><nobr>". $when[0]."</nobr></td>";
				echo "</tr>\n";
			}
			echo "</table>";
			echo "<br/><input type='submit' class='submit' name='submit' value='Delete Selected'/>";	
			echo "</form>";
			// Pagination magic (of sorts)
			echo "<p><br/>Page:&nbsp;";
			for ($z=-5; $z<6;$z++) {
				$dapage = $page+$z;
				if (($dapage>0) && ($dapage<=$total_pages)) {
					if ($dapage==$page) {
						echo "-". $dapage. "-";
					} else {
						echo "<a class='pagelink' href='". $_SERVER['PHP_SELF']. "?page=". $dapage. "'>&nbsp;". $dapage. "&nbsp;</a>";
					}
					echo "&nbsp;&nbsp;";
				}			
			}
			echo "</p>";
		}
	} else {
		echo "There are no comments in the database.";
	}
echo "<p><br/><strong>&laquo;</strong>&nbsp;<a href='comments-editor.php'>back to editor</a></p>";
}

?>
</body>
</html>