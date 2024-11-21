<?php
include('../../connect/db.php');

$fdk_id = $_POST['fdk_id'];
$reply = $_POST['reply'];

$dat = date("Y-m-d");


$statement = $db->prepare( "update feedback set reply='$reply',date='$dat' where fdk_id='$fdk_id'" );
$statement->execute();

header('location: ../feedback_view.php');
?>

