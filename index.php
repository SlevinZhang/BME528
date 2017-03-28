<?php require_once('function/auth.php');
$role = $_SESSION['MM_UserGroup'];?>
<?php require_once('Connections/dose.php'); ?>
<?php require_once('function/GetSQLValueString.php');
header("Location:miniblog");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">

<title>ICARE</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<?php include 'template/menu.php';?>

</div>
<footer>
<div class="row">
<div class="span2 offset10"><?php echo date("Y-m-d");?></div>
<div class="span2 offset10"><a href="http://www.ipilab.org">Powered by IPI Lab</a></div>
</div>
</footer>
</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>