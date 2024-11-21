<?php
include('../../connect/db.php');

$name=$_POST["name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$address=$_POST["address"];
$aadhar_No=$_POST["aadhar_No"];
$hospital_name=$_POST["hospital_name"];
$contact_no=$_POST["contact_no"];
$vaccination_typen=$_POST["vaccination_typen"];
$vaccination_typeg=$_POST["vaccination_typeg"];
$next_date=$_POST["next_date"];
$date=$_POST["date"];
$PLog_Id=$_POST["PLog_Id"];
$HLog_Id=$_POST["HLog_Id"];
$descp=$_POST["descp"];
$statvtk='Accept';

$statement = $db->prepare( "update booking set statvtk='Accept' where cname='$name' and statvtk='Pending'");
$statement->execute();


$statement = $db->prepare( "INSERT INTO vaccination (name,age,sex,address,aadhar_No,hospital_name,contact_no,vaccination_type,vaccination_gp,next_date,date,PLog_Id,HLog_Id,descp)
VALUES('$name','$age','$sex','$address','$aadhar_No','$hospital_name','$contact_no','$vaccination_typen','$vaccination_typeg','$next_date','$date','$PLog_Id','$HLog_Id','$descp')" );
$statement->execute();
header('location:../vaccination_search.php');

?>

