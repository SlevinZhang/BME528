<?php
// edit form style ONLY in the HTML section enclosed in comment tags below
include("includes/comments-config.php");
if ($commoff != 1) {
?>

<form action="comments/comments_process.php" method="post" style='margin-top:10px;'>
<?php
// get the page ID and URL and add to form as required inputs
$ret_url = "http://". $_SERVER['SERVER_NAME']. $_SERVER['REQUEST_URI'];
echo "<input type='hidden' name='ret_url' value='". $ret_url. "'/>"; 
echo "<input type='hidden' name='page_id' value='" .$page_id. "' />";
?>

<!--form style is taken from your page style - you MAY edit below here-->
<table cellpadding="3" cellspacing="1" style="border:1px dotted #666;">
<tr><td><p><?php echo $your_name;?></p></td><td align='right'><input type="text" name="name" size="24" maxlength="40" /></td></tr>
<tr><td><p><?php echo $your_location;?></p></td><td align='right'><input type="text" name="locn" size="24" maxlength="40"/></td></tr>

<?php
// this section provides the countries drop-down if 'show flags' is active
if ($show_flags == 1) { include("includes/show-countries.php"); }
?>

<?php
// this section provides a 'rating' dropdown input if 'art_rating' is active
if ($art_rating == 1) { include("includes/show-ratings.php"); }
?>

<tr><td colspan="2"><p><?php echo $your_comments;?></p></td></tr>
<tr><td colspan="2"><textarea cols="35" rows="5" name="comments"></textarea></td></tr>

<?php
// this section provides a captcha image and input if 'captchas' is active
if ($captchas == 1) {
   echo "<tr><td><p>Security check *</p><img src='comments/captcha/captcha_image.php' alt='security image' border='0'/></td>";
   echo "<td valign='top' align='right'><input type='text' name='secure_match' size='6' style='background-color:#eee;'/></td></tr>";
}

?>

<tr><td>&nbsp;</td><td align='right'>
<input style="margin:2px; background-color:#9999cc;" type="submit" name="submit" value="<?php echo $form_submit;?>" />
</td></tr></table>
</form>
<!--do not edit below here-->
<?
}
?>