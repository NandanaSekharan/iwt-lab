<?php
include('../../connect/db.php');

	$v_id=$_POST["v_id"];
	$vname=$_POST["vname"];
	$vtype=$_POST["vtype"];
	$vusage=$_POST["vusage"];
	$schedule=$_POST["schedule"];
	$date=$_POST["date"];
	$vaccine=$_POST["vaccine"];
	$amt=$_POST["amt"];
	
	
	$statement = $db->prepare("update vaccinegroup set vname='$vname',vtype='$vtype',vusage='$vusage',schedule='$schedule',date='$date',vaccine='$vaccine',amt='$amt' where v_id='$v_id'");
	$statement->execute();

header('location: ../vg_search.php');
?>

