<?php
if (!isset($_SESSION)) {
  session_start();
}
function authG($Group,$User){
// *** Restrict Access To Page: Grant or deny access to this page
$MM_restrictGoTo = "/index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized($User,$Group,$_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
	echo "You don't have access to this page.<br/><a href='$MM_restrictGoTo'>Go Back</a>";
	die;
}
}
?>
