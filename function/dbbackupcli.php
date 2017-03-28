<?php
$role = "auto"?>
<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dose = "localhost";
$database_dose = "doseimg";
$username_dose = "icare";
$password_dose = "\$icare_Lab";
$dose = mysql_pconnect($hostname_dose, $username_dose, $password_dose) or trigger_error(mysql_error(),E_USER_ERROR); 
$dose_i = mysqli_connect($hostname_dose,$username_dose,$password_dose,$database_dose) or trigger_error(mysql_error,E_USER_ERROR);

?>


<?php require_once('GetSQLValueString.php');
?>
<?php
backup_tables('case_report,fabric');
function backup_tables($tables = '*')
{
    $return="";

 	$hostname_dose = "localhost";
	$database_dose = "doseimg";
	$username_dose = "icare";
	$password_dose = "\$icare_Lab";
	$dose = mysql_pconnect($hostname_dose, $username_dose, $password_dose) or trigger_error(mysql_error(),E_USER_ERROR);  
  $link = $dose;
  $host = $hostname_dose;
  $user = $username_dose;
  $pass = $password_dose;
  $name = $database_dose;
  mysql_select_db($name,$link);
  
  //get all of the tables
  if($tables == '*')
  {
    $tables = array();
    $result = mysql_query('SHOW TABLES');
    while($row = mysql_fetch_row($result))
    {
      $tables[] = $row[0];
    }
  }
  else
  {
    $tables = is_array($tables) ? $tables : explode(',',$tables);
  }
  
  //cycle through
  foreach($tables as $table)
  {
    $result = mysql_query('SELECT * FROM '.$table);
    $num_fields = mysql_num_fields($result);
    $return.= 'DROP TABLE IF EXISTS '.$table.';';
    $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
    $return.= "\n\n".$row2[1].";\n\n";
    
    for ($i = 0; $i < $num_fields; $i++) 
    {
      while($row = mysql_fetch_row($result))
      {
        $return.= 'INSERT INTO '.$table.' VALUES(';
        for($j=0; $j<$num_fields; $j++) 
        {
          $row[$j] = addslashes($row[$j]);
          $row[$j] = ereg_replace("\n","\\n",$row[$j]);
          if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
          if ($j<($num_fields-1)) { $return.= ','; }
        }
        $return.= ");\n";
      }
    }
    $return.="\n\n\n";
  }
  //save file
  try{
	 $fname = '/home/pacsproxy/www/sqlbackup/db-backup-'.time().'.sql';
  $handle = fopen($fname,'w+');
  fwrite($handle,$return);
  fclose($handle);
  

	require_once('/home/pacsproxy/www/PHPMailer/class.phpmailer.php');
	$bodytext = "icare case-report backup:".date('Y-m-d');
	$email = new PHPMailer();
	$email->From      = 'database_backup@icare.usc.edu';
	$email->FromName  = 'webmaster@icare.usc.edu';
	$email->Subject   = $bodytext;
	$email->Body      = $bodytext;
	$email->AddAddress( 'xmwalex@gmail.com' );
	
	$file_to_attach = $fname;
	
	$email->AddAttachment( $fname , 'ICARE case report--'.date('Y-m-d') );
	
	return $email->Send();
	  }
  catch(Exception $e)
  {
	echo $e->getMessage();
	}
}

?>