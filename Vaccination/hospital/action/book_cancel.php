<?php
include('../../connect/db.php');

$booking_id = $_GET['booking_id'];


$statement = $db->prepare( "update booking set stat='Cancel' where booking_id='$booking_id'" );
$statement->execute();

header('location: ../booking_hospital.php');
?>

