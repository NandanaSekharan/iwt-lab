<?php
include('../../connect/db.php');

	$v_id=$_GET["v_id"];

	
	$statement = $db->prepare(" delete from vaccine where v_id='$v_id'");
	$statement->execute();

	header('location: ../v_search.php');
?>

