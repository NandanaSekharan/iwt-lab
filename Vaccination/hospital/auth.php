<?php
session_start();
if(!isset($_SESSION['SESS_HOSPITAL_ID']) || (trim($_SESSION['SESS_HOSPITAL_ID']) == '')) {
	header("location:../");
	exit();
}

?>
