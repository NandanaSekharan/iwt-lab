<?php
include('../../connect/db.php');

$PLog_Id = $_POST['PLog_Id'];
$HLog_Id = $_POST['HLog_Id'];
$pname = $_POST['pname'];
$doc_name = $_POST['doc_name'];
$contactno = $_POST['contactno'];
$diseases = $_POST['diseases'];
$dat = $_POST["dat"];
$cname = $_POST["name"];

$vname = $_POST["vname"];
$tme = $_POST["tme"];

$typ="hospital";
$stat="Pending";
$statvtk="Pending";

	$result = $db->prepare("select * from child where cname='$cname' and Log_Id='$PLog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{		
		$age = $row['age'];
		$sex = $row['sex'];		
	}

	$result = $db->prepare("select * from vaccinegroup where vname='$vname'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{		
		$amt = $row['amt'];		
	}


$statement = $db->prepare( "INSERT INTO booking(PLog_Id,HLog_Id,pname,doc_name,contactno,diseases,typ,stat,dat,cname,vname,tme,age,sex,amt,statvtk)
VALUES('$PLog_Id','$HLog_Id','$pname','$doc_name','$contactno','$diseases','$typ','$stat','$dat','$cname','$vname','$tme','$age','$sex','$amt','$statvtk')" );
$statement->execute();

header("location: ../book_payment.php");

?>

