<?php
// display presentation variables
$title = "Thank You";
$image = "ok.gif";

include("includes/comments-config.php"); // is auto-approval on?
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo $title;?></title>
<link rel="stylesheet" media="screen" href="responses/response_style.css" type="text/css" />
</head>
<body>
<div align="center">
<div id="response">
<?php
$img = "../comments/images/responses/". $image;
$size = @getimagesize($img);
echo "<p><img class='right' src='". $img. "' ". $size[3]. "/>";
?>

<strong>Thank you for your comment.</strong></p>

<?php
if ($is_approved==0) {
   echo "<p>Your comment will be reviewed prior to posting.</p>";
}
echo "<p align='center'><a href='". $_SERVER['HTTP_REFERER']. "'>click here</a> to continue</p>"; 
?>
</div>
</div>
</body>
</html>