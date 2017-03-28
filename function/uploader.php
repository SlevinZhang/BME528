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

function upload_front($upload_process,$paras)
{
	$str = "
<form action=\"$upload_process\" method=\"post\"
enctype=\"multipart/form-data\">
<input type=\"file\" name=\"file\" id=\"file\" /> 
<br />";
	foreach($paras as $para)
	{
		$type = $para->type;
		$name = $para->name;
		$html = $para->html;
		$value = $para->value;
		if($type!='hidden')
		{
			$str.="$html  ";
		}
		$str.="<input type=\"$type\" name=\"$name\" value=\"$value\"><br/>";	
	}
	$str .="<input type=\"submit\" name=\"submit\" value=\"Submit\" /></form>";
	
	return $str;
}

function uploader_show($ID,$PK)
{
	
	mysql_select_db($database_dose, $dose);
	$query = sprintf("SELECT * FROM upload WHERE $PK = %s", GetSQLValueString($ID, "text"));
	$RS = mysql_query($query) or die(mysql_error());
	$str = "<table class='table table-striped'>";
	while($row = mysql_fetch_array($RS))
	{
		$str .= "<tr><td>".$row['Description']."</td><td><a href=".$row['path'].">Download</a></td></tr>";
	}
	$str .="</table>";
	return $str;
}

class uploadpara
{
	public $name="";
	public $type="";	
	public $value="";
	public $html="";
	
   function __construct($n,$t,$v,$h="")
	{
		$this->name = $n;
		$this->type = $t;
		$this->value = $v;
		$this->html = $h;
	}
}



?>