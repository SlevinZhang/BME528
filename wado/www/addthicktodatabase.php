<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_icare = "localhost";
$database_icare = "doseimg";
$username_icare = "icare";
$password_icare = "\$icare_Lab";
$icare = mysql_pconnect($hostname_icare, $username_icare, $password_icare) or trigger_error(mysql_error(),E_USER_ERROR); 
echo 2;
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_icare, $icare);

?>

<?php

require_once '../kohana/application/vendor/nanodicom/nanodicom.php';
ini_set('display_errors', 1);
set_time_limit(0);
echo 1;
function getinfo($dir)
{	$dir = $dir.'/';
	$dirfiles = scandir($dir);
	$num_files = count($dirfiles)-2;
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if(substr(($file),-4)==".dcm")
				{
				$filename = $dir.$file;
				break;
				}
			}
			closedir($dh);
		}
	}
		$dicom = Nanodicom::factory($filename, 'simple');
		$dicom->parse()->profiler_diff('parse');
		$info['thick'] = trim($dicom->value(0x0018, 0x0050));
		$info['seriesInstanceUID'] = trim($dicom->value(0x0020, 0x000E));
		unset($dicom);
		return $info;
}
function getfolders($path)  
{  
static $allfolderpath=array();
static $i=0;

$path_1 = scandir($path);
//print_r($path_1);
$folders_1_length = sizeof($path_1);
//echo $folders_1_length;
for ($i=2;$i<$folders_1_length;$i++)
{
	$path_2[$i] = scandir($path.'/'.$path_1[$i]);
}
for ($i=2;$i<$folders_1_length;$i++)
{
	for($j=2;$j<sizeof($path_2[$i]);$j++)
	{
		$path_2[$i][$j]=$path.'/'.$path_1[$i].'/'.$path_2[$i][$j];
		$path_3[$i][$j]=scandir($path_2[$i][$j]);
		for($k=2;$k<sizeof($path_3[$i][$j]);$k++)
		{
			$path_3[$i][$j][$k]=	$path_2[$i][$j].'/'.$path_3[$i][$j][$k];
		}
	}
}

//print_r($path_3);
return $path_3;
}  



?>
<?php
$workpath = '/home/pacsproxy/www/wado/kohana/application/data/DICOM/DICOMe';
$allfolderpath = getfolders($workpath);

?>
<?php 
foreach($allfolderpath as $p1)
{
	foreach($p1 as $p2)
	{	foreach($p2 as $p3)
		{		
			if($p3!=='.'&&$p3!='..')
			{
			$info = getinfo($p3);
		//	print_r($info);
			
			if($info['thick'])
			$thick = $info['thick'];
			else
			$thick = "processed";
			$UID = $info['seriesInstanceUID'];
			echo $info['seriesInstanceUID']."<br/>";
			echo $thick;
			echo "<br/>";
			$updateSQL = sprintf("UPDATE series SET dcm_Thickness=%s WHERE dcm_SeriesInstanceUID=%s",
                       GetSQLValueString($thick, "text"),
                       GetSQLValueString($UID, "text"));
			echo $updateSQL."<br/>";
			mysql_select_db($database_icare, $icare);
			$Result1 = mysql_query($updateSQL, $icare) or die(mysql_error());
			echo $Result1;
			}
		}
	}
}?>

