<?php
include('../../connect/db.php');

$booking_id = $_POST['booking_id'];
$dat = $_POST['dat'];
$btime = $_POST['btime'];

$statement = $db->prepare( "update booking set stat='Accept',bdat='$dat',dat='$dat',btime='$btime' where booking_id='$booking_id'" );
$statement->execute();

header('location: ../booking_hospital.php');
?>

