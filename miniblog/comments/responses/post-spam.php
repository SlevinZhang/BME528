<?php
// display presentation variables
$title = "Dubious Content";
$image = "spam.gif";
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

Your comment contains words or 'links' that makes it look as if it's SPAM. I have no interest in getting spam posted here. Either be more careful or go away entirely!</p>
<p align="center"><a href="javascript: history.go(-1)">click here</a> to continue</p>
</div>
</div>
</body>
</html>
