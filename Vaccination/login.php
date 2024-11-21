<?php
	//Start session
	session_start();
	include("connect/db.php");
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	$qry = $db->prepare("SELECT * FROM user WHERE username='$username' and password='$password' and utype='Admin'");
	$qry->execute();
	$count = $qry->rowcount();
	
	$qryh = $db->prepare("SELECT * FROM user WHERE username='$username' and password='$password' and utype='Hospital' and stats='Accept'");
	$qryh->execute();
	$counth = $qryh->rowcount();	

	$qryp = $db->prepare("SELECT * FROM user WHERE username='$username' and password='$password' and utype='Parent' and stats='Accept'");
	$qryp->execute();
	$countp = $qryp->rowcount();	
	
	//Check whether the query was successful or not
	if($count > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rows['Log_Id'];
		session_write_close();
		header("location:admin/index.php");
		exit();
	}
	else if($counth > 0) {
		//Login Successful
		session_regenerate_id();
		$rowh = $qryh->fetch();
		$_SESSION['SESS_HOSPITAL_ID'] = $rowh['Log_Id'];
		session_write_close();
		header("location:hospital/index.php");
		exit();
	}

	else if($countp > 0) {
		//Login Successful
		session_regenerate_id();
		$rowp = $qryp->fetch();
		$_SESSION['SESS_PARENT_ID'] = $rowp['Log_Id'];
		session_write_close();
		header("location:parent/index.php");
		exit();
	}
	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password.'); window.location='index.php'</script>";
		exit();
	}
?>
