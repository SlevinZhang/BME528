<?php
	$seriesid = $_POST["sid"];
	$con = mysql_connect("localhost","icare","\$icare_Lab");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("doseimg", $con);

	$sql = "SELECT dcm_Thickness FROM series WHERE dcm_SeriesInstanceUID = '$seriesid'";

	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
		$sliceThickness = $row['dcm_Thickness'];
	}
	echo $sliceThickness;	
	mysql_close($con);
	
	
?>