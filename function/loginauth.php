<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['user'])) {
  $loginUsername=$_POST['user'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "Level";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login.php?status=failed";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_dose, $dose);
  	
  $LoginRS__query=sprintf("SELECT * FROM doseuser WHERE Username=%s AND Password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $dose) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'Level');
    $loginUserID = mysql_result($LoginRS,0,'UserID');
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      
	$_SESSION['UserID'] = $loginUserID;	      
	if(isset($_POST['redirect'])&&strlen($_POST['redirect'])>0)
		$MM_redirectLoginSuccess = $_POST['redirect'];
	else
			$MM_redirectLoginSuccess = "index.php";
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>