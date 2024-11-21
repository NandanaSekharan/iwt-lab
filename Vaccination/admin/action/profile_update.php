<?php
include('../../connect/db.php');
		 
	 $Log_Id=$_POST["Log_Id"];	 	
	 $cntno=$_POST["cntno"];
	 $email=$_POST["email"];
	 $password=$_POST["password"];
	   

if($password=="")
{	
	$sql = "update user set cntno='$cntno',email='$email' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
}
else
{
	$sql = "update user set cntno='$cntno',password='$password',email='$email' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
}
header("location:../index.php");
?>
