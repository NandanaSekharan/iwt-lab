<?php
include('../../connect/db.php');

$PLog_Id = "CHLD".rand(1000024445,0);
$Log_Id = $_POST['Log_Id'];

	$cname=$_POST["cname"];
	$age=$_POST["age"];
	$dob=$_POST["dob"];
	$sex=$_POST["sex"];
	$addr=$_POST["addr"];
	$aadharno=$_POST["aadharno"];
	$pname=$_POST["pname"];
	$cntno=$_POST["cntno"];
	$about=$_POST["about"];

	$dat = date("Y-m-d");
	
	$location=$_POST["location"];

$targetFile = '../../admin/child_photo/' . basename($_FILES["photo"]["name"]);
$photo = basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

$statement = $db->prepare( "INSERT INTO child (Log_Id,cname,age,dob,sex,addr,aadharno,pname,cntno,photo,about,PLog_Id,location,dat)
VALUES('$Log_Id','$cname','$age','$dob','$sex','$addr','$aadharno','$pname','$cntno','$photo','$about','$PLog_Id','$location','$dat')" );
$statement->execute();

header('location: ../child_search.php');
?>

