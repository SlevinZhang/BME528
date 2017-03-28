<?php
// verbose comments display - modify display as you see fit

include("includes/db_conn.php"); // connect to host and select db
mysql_connect($db_host, $db_user, $db_pass) or die("Connection Error: ". mysql_error());
mysql_select_db($db_name);

include("includes/comments-lang.php"); // language/words package

$id = $_GET['id'];
$query = "SELECT * from $db_table WHERE id = '$id'";
$result = @mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query);
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<title>Very Long Comment</title>
<style type="text/css">
body {
	 color:#000;
	 background-color:#fff;
	 font-family: arial, sans-serif;
	 font-size:12px; 
}
img {
	border:none;
}
</style>
</head>
<body>
<img src="images/responses/complete_comment.gif" width="132" height="128" alt=""/>
<?php 
echo "<p style='margin-left:150px'>". nl2br(stripslashes($myrow['comments']));
if ($myrow['admin_comment']) {
	echo "<br/><br/>". $admin_comment. "&nbsp;<em>". $myrow['admin_comment']. "</em>";
}
echo "</p>";
?>
<p style='margin-left:150px'><strong>&laquo;</strong>&nbsp;<a href="javascript:history.go(-1)">back</a></p>
</body>
</html>