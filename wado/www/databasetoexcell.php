<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 



?>
<?php

require_once '../kohana/icare/vendor/nanodicom/nanodicom.php';
ini_set('display_errors', 1);
set_time_limit(0);
/*
$dir = "./data/I010058AR/1.2.840.113970.3.57.1.4397683.769347336.20100902.1144356/1.3.12.2.1107.5.2.30.27019.2010090215094433518754443.0.0.0/";
$thick = getthick($dir);
echo $thick;*/
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
		$info['thick'] = $dicom->value(0x0018, 0x0050);
		$info['name'] = $dicom->value(0x0010, 0x0010);
		$info['studydate'] = $dicom->value(0x0008, 0x0020);
		$info['studytime'] = $dicom->value(0x0008, 0x0030);
		$info['modality'] = $dicom->value(0x0008, 0x0060);
		$info['studydes'] = $dicom->value(0x0008, 0x1030);
		$info['seriesdes'] = $dicom->value(0x0008, 0x103E);
		$info['num'] = $num_files;		
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
$workpath = '/home/pacsproxy/kohana/icare/data/DICOM/DICOMnew';
$allfolderpath = getfolders($workpath);

?>
<table border="1">
<tr>
<th>Patient ID
</th>
<th>Study Date
</th>
<th>Study Time
</th>
<th>Study Description 
</th>
<th>Series Description 
</th>
<th>Number of images per series
</th>
<th> modality
</th>
<th>Slice Thickness
</th>
</tr>
<?php 
//for($i=0;$i<1;$i++)
//for($i=0;$i<$totalRows_Recordset1;$i++)
//{
foreach($allfolderpath as $p1)
{
	foreach($p1 as $p2)
	{	foreach($p2 as $p3)
		{		
			if($p3!=='.'&&$p3!='..')
			{
			$info = getinfo($p3);
		//	print_r($info);
			
			
			echo "<tr>";
			echo "<td>".$info['name']."</td>";
			echo "<td>".$info['studydate']."</td>";
			echo "<td>".$info['studytime']."</td>";
			echo "<td>".$info['studydes']."</td>";
			echo "<td>".$info['seriesdes']."</td>";
			echo "<td>".$info['num']."</td>";
			echo "<td>".$info['modality']."</td>";
			if($info['thick'])
			echo "<td>".$info['thick']."</td></tr>";
			else
			echo "<td>"."postprocessed"."</td></tr>";
			}
		}
	}
		/*	if($['Description']==null)
			echo "No Descriptions";
			else
			echo $row_Recordset2['Description'];
			echo "</td>";
			echo "<td>";
			echo $row_Recordset2['number_of_images'];
			echo "</td>";
			echo "<td>";
			echo $row_Recordset1['Modality'];
			echo "</td>";
				$folder = "data/".$row_Recordset1['PatientID'].'/'.$row_Recordset1['StudyInstanceUID'].'/'.$row_Recordset2['SeriesInstanceUID'];
		//			echo $folder;
				$thickness = getthick($folder);
			echo "<td>";
		
			echo $thickness;
			echo "</td>";
			echo "</tr>";
			for($j=1;$j<$totalRows_Recordset2;$j++)
			{
				$row_Recordset2 = mysql_fetch_assoc($Recordset2);
		
				echo "<tr><td>";
				if($row_Recordset2['Description']==null)
				echo "NO Descriptions";
				else
				echo $row_Recordset2['Description'];
				
			//	echo $row_Recordset2['Description'];
				echo "</td>";
				echo "<td>";
				echo $row_Recordset2['number_of_images'];
				echo "</td>";
				echo "<td>";
				echo $row_Recordset1['Modality'];
				echo "</td>";
		
						$folder = "./data/".$row_Recordset1['PatientID'].'/'.$row_Recordset1['StudyInstanceUID'].'/'.$row_Recordset2['SeriesInstanceUID'];
						$thickness = getthick($folder);
			echo "<td>";
			if($thickness)
			echo $thickness;
			elseif($row_Recordset2['Description']=='dose report')
			echo "report";
			else
			echo "postprocessed";
			echo "</td>";
		
				echo "</tr>";
					
			}
		}
		*/
}?>
</table>
-->
</body>
</html>
