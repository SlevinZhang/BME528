<?php 
 $root = getenv("DOCUMENT_ROOT").DIRECTORY_SEPARATOR ; 
 require_once($root.'function/auth.php');
$role = $_SESSION['MM_UserGroup'];?>
<?php require_once($root.'Connections/dose.php'); ?>
<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">

<title>ICARE</title>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="/css/body.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<?php include $root.'template/menu.php';?>
<h3 class="offset4">ICARE News and Discussions</h3>
<h4 class="offset10"><a href="adm">Posts Admin/Edit</a></h4>
<div>
	<?=$miniblog_posts?>
</div>
	<div class="navigation">
		<? if(!$single) { ?>
			<? if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<? } ?>
			<? if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <? } ?>
		<? } ?>
		<? if($single) { ?>
			<p class="previous-link"><a href="<?=$config['miniblog-filename']?>">&laquo; return to posts</a></p>
		<? } ?>
		<div class="clear"></div>
	</div>
		<? if($single) {
		$page_id = $_GET['post'];; // for example
		
		include("comments/comments_show.php");
		include("comments/comments_form.php");
		}
		?>

<footer>
<div class="row">
<div class="span2 offset10"><?php echo date("Y-m-d");?></div>
<div class="span4 offset8">Powered by <a href="http://www.spyka.net/scripts/php/miniblog">miniblog</a> created by <a href="http://www.spyka.net">spyka Webmaster</a></div>
<div class="span2 offset10"><a href="http://www.ipilab.org">Powered by IPI Lab</a></div>
</div>
</footer>
</div>
<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
</body>
</html>
