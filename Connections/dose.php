<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dose = "127.0.0.1";
$database_dose = "dose";
$username_dose = "icare";
$password_dose = "\$icare_Lab";
$dose = mysql_pconnect($hostname_dose, $username_dose, $password_dose) or trigger_error(mysql_error(),E_USER_ERROR); 

?>
