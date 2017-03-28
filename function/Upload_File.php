<?php require_once('Connections/dose.php'); ?>
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
$Target_folder = "upload/".$_POST["type"]."/".$_POST['ScreenID'];
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
$filelink=$Target_Location;
echo $filelink;
switch ($_POST['type']){
	case "HIPAA":
  $insertSQL = sprintf("INSERT INTO hipaa (ScreenID, File_Link) VALUES (%s, %s)",
                       GetSQLValueString($_POST['ScreenID'], "text"),
                       GetSQLValueString($filelink, "text"));
	break;
	case "Informed_Consent":
  $insertSQL = sprintf("INSERT INTO inform (ScreenID, File_Link) VALUES (%s, %s)",
                       GetSQLValueString($_POST['ScreenID'], "text"),
                       GetSQLValueString($filelink, "text"));
	break;
	case "MRI_Safety":
  $insertSQL = sprintf("INSERT INTO mri (ScreenID, File_Link) VALUES (%s, %s)",
                       GetSQLValueString($_POST['ScreenID'], "text"),
                       GetSQLValueString($filelink, "text"));
	break;
	case "Medical_Letter":
  $insertSQL = sprintf("INSERT INTO physician_consent (ScreenID, File_Link) VALUES (%s, %s)",
                       GetSQLValueString($_POST['ScreenID'], "text"),
                       GetSQLValueString($filelink, "text"));
	break;
}
echo $insertSQL;
  mysql_select_db($database_dose, $dose);
  $Result1 = mysql_query($insertSQL, $dose) or die(mysql_error());


  $insertGoTo = "screen_subject.php?ScreenID=".$_POST['ScreenID'];
  header(sprintf("Location: %s", $insertGoTo));

?>
