<?php
include('../../connect/db.php');
		 
	 $Log_Id=$_POST["Log_Id"];	 	
	 $cntno=$_POST["cntno"];
	 $age=$_POST["age"];
	 $sex=$_POST["sex"];
	 $addr=$_POST["addr"];
	 $email=$_POST["email"];
	 $password=$_POST["password"];
	 $location=$_POST["location"];
	   

if($password=="")
{	
	$sql = "update user set cntno='$cntno',email='$email',age='$age',sex='$sex',addr='$addr',location='$location' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
}
else
{
	$sql = "update user set cntno='$cntno',password='$password',email='$email',age='$age',sex='$sex',addr='$addr',location='$location' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
}
header("location:../index.php");
?>
