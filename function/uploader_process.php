<?php
var_dump($_POST);
if($_POST['DB_flag']==true)
{
require_once("../Connections/dose.php");
$database = $database_dose;
 $conn = $dose;
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
}
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
$Target_folder = $_POST['target']."/".$_POST['ID'];

if(!file_exists($Target_folder))
	{
		mkdir($Target_folder);	
	}
$Target_Location = $Target_folder."/".$_FILES["file"]["name"];
if (file_exists($Target_Location))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {

      move_uploaded_file($_FILES["file"]["tmp_name"],
      $Target_Location);
      echo "Stored in: " . $Target_Location;
      }
$path=$Target_Location;
echo $path;

if($_POST['DB_flag']==true)
{
  $insertSQL = sprintf("INSERT INTO upload (StudyID,Description,Path) VALUES (%s, %s,%s)",
                       GetSQLValueString($_POST['ID'], "text"),
                       GetSQLValueString($_POST['Description'], "text"),
					   GetSQLValueString($path,"text"));
  mysql_select_db($database, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());
}

  $insertGoTo = $_POST['insertGoTo'];
  header(sprintf("Location: %s", $insertGoTo));

?>
