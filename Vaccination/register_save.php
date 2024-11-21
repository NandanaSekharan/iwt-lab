<?php
include 'connect/db.php';

     $name=$_POST["name"];
	 $cntno=$_POST["cntno"];
	 $email=$_POST["email"];
	 $location=$_POST["location"];
	 $username=$_POST["username"];
	 $password=$_POST["password"];
	 $utype=$_POST["utype"];

	 $dat = date("Y-m-d");

	$Log_Id="LOG".rand(786321000044,0);


	if($utype=="Hospital")
	{
	$statement = $db->prepare( "INSERT INTO user (Log_Id,name,cntno,email,location,username,password,utype,stats,dat)
	VALUES('$Log_Id','$name','$cntno','$email','$location','$username','$password','$utype','Pending','$dat')" );
	$statement->execute();
	
	$statement = $db->prepare( "INSERT INTO hospital (Log_Id,name,contact_no,email,location,dat)
	VALUES('$Log_Id','$name','$cntno','$email','$location','$dat')" );
	$statement->execute();
	}	
	else
	{	
	$statement = $db->prepare( "INSERT INTO user (Log_Id,name,cntno,email,location,username,password,utype,stats,dat)
	VALUES('$Log_Id','$name','$cntno','$email','$location','$username','$password','$utype','Pending','$dat')" );
	$statement->execute();	
	}
	header('location: index.php');
?>

