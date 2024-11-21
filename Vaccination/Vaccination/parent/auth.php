<?php
session_start();
if(!isset($_SESSION['SESS_PARENT_ID']) || (trim($_SESSION['SESS_PARENT_ID']) == '')) {
	header("location:../");
	exit();
}

?>
