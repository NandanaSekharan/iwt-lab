<?php
include('../../connect/db.php');

	$vname=$_POST["vname"];
	$vtype=$_POST["vtype"];
	$vusage=$_POST["vusage"];
	$schedule=$_POST["schedule"];
	$date=$_POST["date"];
	$vaccine=$_POST["vaccine"];
	$amt=$_POST["amt"];
	
	
	$statement = $db->prepare( "INSERT INTO vaccinegroup (vname,vtype,vusage,schedule,date,vaccine,amt)
	VALUES('$vname','$vtype','$vusage','$schedule','$date','$vaccine','$amt')" );
	$statement->execute();

header('location: ../vg_search.php');
?>

