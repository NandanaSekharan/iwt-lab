<?php
include('../../connect/db.php');

$Log_Id = $_GET['Log_Id'];
$Log_Idh = $_GET['Log_Idh'];
$pname = $_GET['pname'];
$doc_name = $_GET['doc_name'];
$title = $_GET['title'];
$rating = $_GET['rating'];
$review = $_GET['review'];
$dat = date("Y-m-d");


$statement = $db->prepare( "INSERT INTO review(PLog_Id,HLog_Id,pname,doc_name,title,rating,review,dat)
VALUES('$Log_Id','$Log_Idh','$pname','$doc_name','$title','$rating','$review','$dat')" );
$statement->execute();

header("location: ../hospitals_search.php");
?>

