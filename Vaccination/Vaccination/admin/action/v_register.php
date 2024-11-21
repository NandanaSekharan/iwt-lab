<?php
include('../../connect/db.php');

	$vname=$_POST["vname"];
	$vtype=$_POST["vtype"];
	$vusage=$_POST["vusage"];
	$schedule=$_POST["schedule"];
	$date=$_POST["date"];
	
	$statement = $db->prepare( "INSERT INTO vaccine (vname,vtype,vusage,schedule,date)
	VALUES('$vname','$vtype','$vusage','$schedule','$date')" );
	$statement->execute();

header('location: ../v_search.php');
?>

