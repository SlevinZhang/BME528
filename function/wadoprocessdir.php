<?php
require_once '../wado/kohana/application/vendor/nanodicom/nanodicom.php';
require_once '../Connections/dose.php';
$targetDir = "../wado/kohana/application/data/upload";
$data_folder = '../wado/kohana/application/data/DICOM';


session_start();
$_POST['StudyID'] = $_POST['pat_id'];
$_SESSION['StudyID'] = $_POST['StudyID'];
	for($i=0;$i<$_POST['uploader_count'];$i++)
	{
		try
		{
			$fileidori="uploader_".$i."_name";
			$fileid="uploader_".$i."_tmpname";
			$filename=$targetDir.DIRECTORY_SEPARATOR.$_POST[$fileid];
			$file_patid="uploader_".$i."_patid";
			$anonymizing = strtoupper(str_replace('-', '', trim($_POST['StudyID'])));
			if(file_exists($filename))
			{
				$dicom = Nanodicom::factory($filename, 'anonymizer');
				$dicom->parse();
				if ( ! $dicom->is_dicom())
				{
					unlink($filename);
					// It is not DICOM (not even partial DICOM)
					continue;
				}
				$pat_id_f  = $anonymizing;
				if ($dicom->value(0x0004, 0x1220) === FALSE)
				{
					// This is an image file.
			
					// Study UID
					$stu_uid_f = trim($dicom->value(0x0020, 0x000D));
					// Series UID
					$ser_uid_f = trim($dicom->value(0x0020, 0x000E));
					// SOP UID
					$sop_uid_f = trim($dicom->value(0x0008, 0x0018));
				
				}
				else
				{
					// This is a DICOMDIR
					$DRS = $dicom->value(0x0004, 0x1220);
					
					// TODO: More robust way to find the uid values and to understand their meaning
					
					// Study UID
					$stu_uid_f = trim($dicom->dataset_value($DRS[0xFFFE][0xE000][1]['ds'], 0x0020, 0x000D));
					// Series UID
					$ser_uid_f = trim($dicom->dataset_value($DRS[0xFFFE][0xE000][2]['ds'], 0x0020, 0x000E));
					// SOP UID
					$sop_uid_f = 'DICOMDIR';
				}

				// Set the fields to anonymize
				$basic = array(
				array(0x0010,0x0010, $anonymizing),
				array(0x0010,0x0020, $anonymizing),
				);
				file_put_contents($filename, $dicom->anonymize($basic));
		}

		}
		catch( Exception $e){
			echo $e->getMessage();
		}
	}
	header("Location:/wado/www/testing");

function getfiles($path)  
{  
static $allfilepath=array();
static $i=0;

     if(!is_dir($path)) return;  
     $handle  = opendir($path);  
     while( false !== ($file = readdir($handle)))  
     {  
         if($file != '.'  &&  $file!='..')  
         {  
             $path2= $path.'/'.$file;  
             if(is_dir($path2))  
             {  
                 echo ' 
 ';  

                   
                getfiles($path2);  
             }else  
             {  
                echo ' 
 ';  

                 $allfilepath[$i++]=$path2;  
             }  
         }  
     }  
return $allfilepath;
}  


function using_ie() 
{ 
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
     
    $ub = False; 
    if(preg_match('/MSIE/i',$u_agent)) 
    { 
        $ub = True; 
    } 
    
    return $ub; 
} 




/*
function wadoprocess($dicom_path,$directory)
{
		$filenames = array();
		$files = new DirectoryIterator($directory);
		$count = 0;
		foreach ($files as $file)
		{
			echo 'Processing '.$directory.DIRECTORY_SEPARATOR.$file->getFilename()."\n";
			if ($file->isDot())
				continue;
				
			if ($file->isFile())
			{
				// It is a file
				$dicom = Nanodicom::factory($directory.DIRECTORY_SEPARATOR.$file->getFilename());
				// Parse the file (by default loads dictionaries)
				$dicom->parse();
				
				if ( ! $dicom->is_dicom())
				{
					unlink($directory.DIRECTORY_SEPARATOR.$file->getFilename());
					// It is not DICOM (not even partial DICOM)
					continue;
				}
				var_dump($dicom->PatientID);
				$patientid = Automodeler::factory('PatientID')->load(db::select()->where('dcm_PatientID', '=', trim($dicom->PatientID)));
				
				if ($patientid->loaded())
				{
					// PatientID exists
					$patient = new Model_Patient($patientid->patient_id);
				}
				else
				{
					$patient = New Model_Patient;
					$patient->name = trim($dicom->PatientName);
					$patient->birth_date = $dicom->PatientBirthDate;
					$patient->gender = trim($dicom->patientSex);
					try
					{
						$patient->save();
					}
					catch (Automodeler_Exception $e)
					{
						echo $dicom->extend('dumper')->dump();
						var_dump($e);
						exit;
					}
					
					$patientid->patient_id = $patient->id;
					$patientid->set_dicom_fields($dicom);
					try
					{
						$patientid->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
				}
				
				$study = Automodeler::factory('Study')->load(db::select()->where('dcm_StudyInstanceUID', '=', trim($dicom->StudyInstanceUID)));
				
				if ( ! $study->loaded())
				{
					$study->patientID_id = $patientid->id;
					$study->set_dicom_fields($dicom);
					try
					{
						$study->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
				}
				
				$series = Automodeler::factory('Series')->load(db::select()->where('dcm_SeriesInstanceUID', '=', trim($dicom->SeriesInstanceUID)));
				
				if ( ! $series->loaded())
				{
					$series->study_id = $study->id;
					$series->set_dicom_fields($dicom);
					try
					{
						$series->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}

					$study->total_series++;
					$study->save();
				}

				$image = Automodeler::factory('Image')->load(db::select()->where('dcm_SOPInstanceUID', '=', trim($dicom->SOPInstanceUID)));
				
				if ( ! $image->loaded())
				{
					$image->series_id = $series->id;
					$image->set_dicom_fields($dicom);
					try
					{
						$image->save();
						
						$frame = new Model_Frame;
						$frame->image_id = $image->id;
						$frame->set_dicom_fields($dicom);
						$frame->save();
					}
					catch (Automodeler_Exception $e)
					{
						var_dump($e);
						exit;
					}
					
					$series->total_images++;
					$series->save();
				}
				
				$moving_path = $dicom_path.$patient->id.DIRECTORY_SEPARATOR.$study->id
					.DIRECTORY_SEPARATOR.$series->id.DIRECTORY_SEPARATOR;
					
				if ( ! file_exists($moving_path))
				{
					mkdir($moving_path, 0777, TRUE);
					chmod($moving_path, 0777);
				}
				
				if ( ! file_exists($moving_path.$image->id))
				{
					//copy($directory.DIRECTORY_SEPARATOR.$file->getFilename(), $moving_path.$image->id);
					rename($directory.DIRECTORY_SEPARATOR.$file->getFilename(), $moving_path.$image->id.'.dcm');
				}
				
				//unlink($directory.DIRECTORY_SEPARATOR.$file->getFilename());

				unset($image, $series, $study, $patientid, $dicom);
				$count++;
				//$filenames[] = $file->getFilename();
			}
			
			if ($file->isDir())
			{
				//$filenames = array_merge($filenames, self::parse_directory($directory.DIRECTORY_SEPARATOR.$file->getFilename()));
				self::parse_directory($directory.DIRECTORY_SEPARATOR.$file->getFilename());
				rmdir($directory.DIRECTORY_SEPARATOR.$file->getFilename());
			}
		}
}
*/
?>