<html>
<head>
<title>Digital Midget Comment Script Comments Editor</title>
<style type="text/css">
body {
	background-color: #eee;
	font-family: georgia, verdana, sans-serif; 
	font-size: 13px; 
	color: #333;
	padding-top:150px;
}
input {
	background-color:#eee;
	color:#000;
	border:1px solid #000;
}
img {
	border:none;
}
#box {
	 background:url('../images/editor/keys.jpg'); 
	 background-repeat: no-repeat; 
	 background-position: center right;
	 background-color: #fff;
	 width:400px; 
	 height:140px; 
	 border:3px double #999; 
	 padding:20px; 
	 margin:auto;
}
</style>
</head>
<body>
<!-- stupid IE -->
<table align="center"><tr><td>
<div id="box">
<form action="comments-editor.php" method="post">
<img src="../images/credits.gif" width="80" height="12" alt=""/><br/><br/>
Enter Password:&nbsp;<input type="password" name="pass" size="10" />
<input type="submit" name="submit" style="background:#f60; color:#000; border:1px solid #fcfcfc;" value="Log In" />
</form>
</div>
</td></tr></table>
</html>
</body>