<?php
include('../../connect/db.php');

$user_id = $_GET['user_id'];

$statement = $db->prepare( "delete from child where user_id='$user_id'");
$statement->execute();

header('location: ../child_remove.php');
?>

