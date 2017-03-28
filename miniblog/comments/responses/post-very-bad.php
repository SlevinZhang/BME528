<?php
// display presentation variables
$title = "Comments unacceptable and rejected";
$image = "stop_sign.gif";
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
$size = getimagesize($img);
echo "<p><img class='right' src='". $img. "' ". $size[3]. "/>";
?>

Your comments are unacceptable based on the preferences of this site's management <em>vis-a-vis swearing</em>.</p>
<p>Your comments, together with your IP address and the time/date of your posting, have been logged.</p>
<p>Please moderate your language in any future comments you add at this web site.</p>

<?php echo "<p align='center'><a href='". $_SERVER['HTTP_REFERER']. "'>click here</a> to continue</p>";?>
</div>
</div>
</body>
</html>
