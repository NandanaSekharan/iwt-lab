<?php
include('../../connect/db.php');

	$v_id=$_POST["v_id"];
	$vname=$_POST["vname"];
	$vtype=$_POST["vtype"];
	$vusage=$_POST["vusage"];
	$schedule=$_POST["schedule"];
	$date=$_POST["date"];
	
	$statement = $db->prepare("update vaccine set vname='$vname',vtype='$vtype',vusage='$vusage',schedule='$schedule',date='$date' where v_id='$v_id'");
	$statement->execute();

header('location: ../v_search.php');
?>

