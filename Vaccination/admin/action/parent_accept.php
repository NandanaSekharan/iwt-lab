<?php
include('../../connect/db.php');

$user_id = $_GET['user_id'];

$statement = $db->prepare( "update user set stats='Accept' where user_id='$user_id'" );
$statement->execute();

header('location: ../parent_block.php');
?>

