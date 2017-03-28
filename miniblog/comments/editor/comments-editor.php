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

/********************************************************************/
// begin the REAL code for the editor

if ($_SESSION['limits'] == 0) {
    $_SESSION['limits'] = 20; // default comments per page display
}
if ($_POST['limit']) {
    $_SESSION['limits'] = $_POST['limit'];
}
$limit = $_SESSION['limits'];

$lims = array("5","10","20","30","40"); // comments per page displayed
$ro1 = "#fdfdfd"; // odd rows background
$ro2 = "#dddddd"; // even rows background

// function deals constructively with user inputs
include("../includes/clean_input.php");

/*****************************************************************************
comments editor - by Andy Bowers | http://www.halfadot.com | andy@halfadot.com
Version 6.0 - First Release (2006-09-14)

                 THERE NO NEED TO EDIT ANYTHING BELOW
				 
******************************************************************************/
include_once("editor-top.php");
include_once("../includes/db_conn.php");
include_once("edit_countries.php");
$db_table = "page_comments";
$ratings = array("0","1","2","3","4","5");

$page = $_GET['page'];
if ($page<1) { $page = 1; }
$editpage = $_POST['page'];
if ($editpage>0) { $page = $_POST['page']; }

$rec = $_GET['id'];
$doit = $_GET['action'];
$doit2 = $_POST['doit2'];

// Figure out the limit for the query based on the current page number. 
$from = $page * $limit - $limit;

mysql_connect($db_host, $db_user, $db_pass) or die ("Error: Unable to connect"); 
mysql_select_db($db_name) or die ("Error: Unable to open the database."); 

// Perform MySQL query on only the current page number's results 
$query = mysql_query("SELECT * FROM $db_table"); 
$total_results = mysql_num_rows($query) or die("Error: ". mysql_error(). " with query ". $query);
$total_pages = ceil($total_results / $limit); 

echo "<p>". $total_results. " comments displayed as ". $total_pages. " page";
if ($total_pages>1) {echo "s"; }
echo "</p>";

// DELETE RECORD
if ($doit=="del") {
	$query = "DELETE from $db_table WHERE id = '$rec'";
	$result = mysql_query($query);
	$doit = "";	
}

// EDIT RECORD - PART 1
if ($doit=="edit") {
	// edit part 1 displays the record data
	$query = "SELECT * from $db_table WHERE id = '$rec'";
	$result = mysql_query($query);
	$myrow = mysql_fetch_array($result);
	echo "<form action = '". $_SERVER['PHP_SELF']. "' method = 'post'>\n";
	echo "<input type = 'hidden' name = 'doit2' value = 'edit2' />\n";
	echo "<input type = 'hidden' name = 'page' value = '". $page. "' />\n";
	echo "<input type = 'hidden' name = 'rec' value = '". $myrow['id']. "' />\n";
	echo "<h2>Edit Record</h2>";
	echo "<table width='80%' cellpadding='2' style='border:1px solid #999; background-color:#eee;'><tr>";
	echo "<td><p>Name: <input type='text' name='name' value = '". $myrow['name']. "' /></p></td>\n";
	echo "<td><p>Location: <input type='text' name='location' value = '". $myrow['location']. "' /></p></td>\n";
	echo "<td><p>Flag: <select name='flag'>";
	for ($i=0;$i<=count($countries_list)-1; $i++) {	
		echo "<option value='". $countries_list[$i]. "'";
		if ($myrow['flag']==$countries_list[$i]) { echo " selected='selected' "; }
		echo ">". $countries_list[$i]. "</option>\n";
	}
	echo "</select></p></td>\n";
	$rating = $myrow['rating'];
	echo "<td><p>Rating: <select name='rating'>";
	for ($i=0;$i<=count($ratings)-1;$i++) {
		echo "<option value='".$i. "'";
		if ($rating == $i) { echo " selected='selected'";}
		echo ">". $i. "</option>\n";
	}
	echo "</select></p></td>";
	$is_approved = $myrow['is_approved'];
	echo "<td><p>Approved: <select name='is_approved'>";
	echo "<option value='1'";
	if ($is_approved==1) { echo "selected='selected'";}
	echo ">Yes</option>";
	echo "<option value='0'";
	if ($is_approved==0) { echo "selected='selected'";}
	echo ">No</option>";
	echo "</select></p></td>";	
	echo "</tr>";
	echo "<tr>";	
	echo "<td colspan='2'><p>Enter/Edit Comment</p>\n";
	echo "<textarea name = 'comments' cols='40' rows='5'>". $myrow['comments']. "</textarea></td>";
	echo "<td colspan='2'><p>Enter/Edit Administrator Comment</p>\n";
	echo "<textarea name = 'admin_comment' cols='40' rows='5'>". $myrow['admin_comment']. "</textarea></td>";
	echo "<td align='center'><input class='submit' type = 'submit' value = 'Update' /></td>";
	echo "</tr></table>";
	echo "</form><br/>";
	$doit = "";	
}

// EDIT RECORD - PART 2
if ($doit2=="edit2") {
	// add info for today using the clean_input function
	foreach ($_POST as $k=>$v) {
		${$k} = clean($v);
	}
	$name = strip_tags(trim($name));
	$location = strip_tags(trim($location));
	$comments = strip_tags(trim($comments));
	$admin_comment = strip_tags(trim($admin_comment));
	$query = "UPDATE $db_table SET name = '$name', location = '$location', flag = '$flag', comments = '$comments', admin_comment = '$admin_comment', rating = '$rating', is_approved = '$is_approved' WHERE id = '$rec' ";
	$result = mysql_query($query) or die("error: ". mysql_error(). " with query ". $query);
	$doit2 = "";
}

if ($doit=="show") {
	$query = "SELECT comments,admin_comment from $db_table WHERE id = '$rec'";
	$result = mysql_query($query);
	$myrow = mysql_fetch_array($result);
	$doit = "";
	echo "<h2>Selected Record</h2>";
	echo "<table width='80%' cellpadding='2' style='border:1px solid #999; background-color:#eee;'><tr><td>";
	echo "<p><strong>Full Comment</strong><br/>". nl2br($myrow['comments']);
	if ($myrow['admin_comment']!="") {
		echo "<br/><br/>Admin Comment<br/>". nl2br($myrow['admin_comment']). "</p>";
	}
	echo "</p></td></tr></table><br/>";
}

// DISPLAY PAGE OF RECORDS
$query = "SELECT * from $db_table ORDER by id DESC LIMIT $from, $limit";
$result = mysql_query($query);
$count = mysql_num_rows($result); 
if ($count>0) {
	echo "<table cellpadding='3' cellspacing='0' style='border:1px solid #ccc;' width='80%'>";
	echo "<tr bgcolor='#cccccc'><td>Page</td><td>Name</td><td>Location</td><td>Flag</td><td>Rating</td></td><td>Comment</td><td>Dated</td><td>OK?</td><td colspan='3' align='center'>- Action Options -</td></tr>";
	while($myrow = mysql_fetch_array($result)){
		$style = $style == $ro1 ? $ro2 : $ro1;
		if ($myrow['id']==$rec) {
			echo "<tr bgcolor='#ffff00'>";
		} else {
			echo "<tr bgcolor='". $style. "'>\n";
		}
		echo "<td>". $myrow['page_id']. "</td>";
		echo "<td>". $myrow['name']. "</td>";
		echo "<td>". $myrow['location']. "</td>";
		echo "<td>". $myrow['flag']. "</td>";
		echo "<td>". $myrow['rating']. "</td>";
		$comments = $myrow['comments'];
		if (strlen($comments)>60) {$comments = substr($comments,0,56). " .."; }
		echo "<td>". $comments. "</td>";
		$when = explode(" ",$myrow['dated']);
		echo "<td>". $when[0]. "</td>";
		$isOK = $myrow['is_approved'];
		$isOKimg = "approved";
		if ($isOK == 0) { $isOKimg = "unapproved";}
		echo "<td width='26'><img src='../images/editor/". $isOKimg. ".gif'></td>";

		// do you want to look - if there's an admin comment or long comment ...
		$see_me = "";
   	  	if ( ($myrow['admin_comment']!="") || (strlen($myrow['comments'])>60) ) {$see_me = 1;}
		echo "<td width='26'>"; 
		if ($see_me == 1) {
			echo "<a href='". $_SERVER['PHP_SELF']. "?id=". $myrow['id']. "&amp;action=show&amp;page=". $page. "'><img src='../images/editor/magnify3.gif' width='16' height='15' hspace='10' alt='show in full' border='0'/></a>";
		} else {
			echo "&nbsp;";
		}
		echo "</td>";
		echo "<td width='26'><a href='". $_SERVER['PHP_SELF']. "?id=". $myrow['id']. "&amp;action=edit&amp;page=". $page. "'><img src='../images/editor/edit.gif' width='16' height='15' hspace='10' alt='edit' border='0' /></a></td>";
		$cnf = "Are you sure you want to delete the post by ";
		if ($myrow['name']==""){
			$cnf.= "anonymous?";
		} else {
			$cnf.= $myrow['name']. "?";
		}
		echo "<td width='26'><a onclick=\"return confirm('". $cnf. "')\" href='". $_SERVER['PHP_SELF']. "?id=". $myrow['id']. "&amp;action=del&amp;page=". $page. "'><img src='../images/editor/delete.gif' width='16' height='15' hspace='10' alt='delete' border='0' /></a></td>";	
		echo "</tr>";
	}
	echo "</table><br/>";
}

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
?>
<br/><br/><a href="http://www.digitalmidget.com" target="_blank"><img src="../images/editor/powered-by-digitalmidget.gif" width="110" height="50" alt="" border="0/"></a>
</body>
</html>
<?php
// terminate the login stuff
}
?>