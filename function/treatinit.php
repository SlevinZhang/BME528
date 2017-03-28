<?php
	session_start();
	if(isset($_GET['StudyID']))
	$_SESSION['StudyID'] = $_GET['StudyID'];
	if(isset($_GET['weekno']))
	$_SESSION['weekno'] = $_GET['weekno'];
	$_SESSION['TreID']= $_SESSION['StudyID'].'-'.$_SESSION['weekno'];
	if(!isset($_SESSION['tasknum']))
	{
		$_SESSION['tasknum']=1;	
	}

?>