<?php
include('../../connect/db.php');

$user_id = $_POST['user_id'];

	$age=$_POST["age"];
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$about=$_POST["about"];

$targetFile = '../../admin/child_photo/' . basename($_FILES["photo"]["name"]);
$photo = basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

if($photo=="")
{
$statement = $db->prepare( "update child set age='$age',addr='$addr',cntno='$cntno',about='$about' where user_id='$user_id'");
$statement->execute();
}
else
{
$statement = $db->prepare( "update child set age='$age',addr='$addr',cntno='$cntno',photo='$photo',about='$about' where user_id='$user_id'");
$statement->execute();
}
header('location: ../child_search.php');
?>

