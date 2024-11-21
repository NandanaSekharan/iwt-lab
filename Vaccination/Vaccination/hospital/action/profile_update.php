<?php
include('../../connect/db.php');

$Log_Id = $_POST['Log_Id'];
$name = $_POST['name'];
$address = trim($_POST[ 'address']);
$location = $_POST[ 'location' ];
$contact_no = $_POST[ 'contact_no' ];
$contact1 = $_POST[ 'contact1' ];
$email = $_POST[ 'email' ];
$licence = $_POST[ 'licence' ];
$specialty = $_POST[ 'specialty' ];
$specialize = $_POST[ 'specialize' ];
$experience = $_POST[ 'experience' ];

$password = $_POST[ 'password' ];

$about = $_POST[ 'about' ];

$targetFile = '../../admin/hosptal_photo/' . basename($_FILES["photo"]["name"]);
$file_name = basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
if($file_name=="")
{
$statement = $db->prepare( "UPDATE hospital
 SET name='$name', address='$address', location='$location', contact_no='$contact_no', contact1='$contact1', email='$email', licence='$licence', specialty='$specialty', specialize='$specialize', experience='$experience',about='$about' WHERE Log_Id='$Log_Id'" );
$statement->execute();

$statement = $db->prepare( "UPDATE user
 SET name='$name', cntno='$contact_no', email='$email', location='$location', password='$password' WHERE Log_Id='$Log_Id'" );
$statement->execute();
}
else
{
$statement = $db->prepare( "UPDATE hospital
 SET name='$name', address='$address', location='$location', contact_no='$contact_no', contact1='$contact1', email='$email', licence='$licence', specialty='$specialty', specialize='$specialize', experience='$experience', photo='$file_name',about='$about' WHERE Log_Id='$Log_Id'" );
$statement->execute();
$statement = $db->prepare( "UPDATE user
 SET name='$name', cntno='$contact_no', email='$email', location='$location', password='$password' WHERE Log_Id='$Log_Id'" );
$statement->execute();	
}
header('location: ../index.php');
?>

