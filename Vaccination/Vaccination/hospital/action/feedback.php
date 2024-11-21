<?php
include('../../connect/db.php');

$Log_Id = $_POST['Log_Id'];
$name = $_POST['name'];
$contact = $_POST[ 'contact'];
$subject = $_POST[ 'subject' ];

$dat = date("Y-m-d");

$reply='Pending';

$statement = $db->prepare( "INSERT INTO feedback (Log_Id,name, contact, subject, dat,reply)
VALUES('$Log_Id','$name', '$contact',  '$subject', '$dat','$reply')" );
$statement->execute();

header('location: ../feedback_view.php');
?>

