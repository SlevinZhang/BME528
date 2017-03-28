<?php
function clean($data) {
		 $res = get_magic_quotes_gpc() ? stripslashes($data) : $data;   
		 $res = mysql_real_escape_string($res); // php 4.3 and higher
		 return $res;
}
?>