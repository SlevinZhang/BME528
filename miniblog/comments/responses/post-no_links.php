<?php
// display presentation variables
$title = "Links not permitted";
$image = "no_links.gif";
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

Using links in comments is not permitted.</p>

<?php echo "<p align='center'><a href='". $_SERVER['HTTP_REFERER']. "'>click here</a> to continue</p>"; ?>
</div>
</div>
</body>
</html>
