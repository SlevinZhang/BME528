<?php require_once('Connections/dosecon.php'); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/loginauth.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOSE</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<?php include 'template/menu.php';?>
<?php 
	if(isset($_GET['status'])&&$_GET['status']=='failed')
	echo '<div class="modal hide fade" id="fail">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Login Fail</h3>
  </div>
  <div class="modal-body">
    <p>Username and Password do not match our record.</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>';

?>
<section>
<hr/>
<form  class="well form-horizontal" ACTION="<?php echo $loginFormAction; ?>" id="loginform" name="loginform" method="POST">
<fieldset>
<div class="row">
	<div class="offset4">
    <label>Username:
    <input type="text" name="user" />
    </label>
    <label>Password:
      <input type="password" name="password" />
    </label>
	<label>
    <button type="submit" name="Submit" class="btn-primary" value="Login" >Log in</button>
	<a href="forgot_password.php">Reset Password?</a>
	</label>
	</div>
</div>
</fieldset>
</form>
<hr/>
</section>
</div>
<?php include('template/footer.html'); ?>
<script type="text/javascript">
	$('#fail').modal();
</script>
</body>
</html>