<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];	
		$age = $row['age'];
		$sex = $row['sex'];
		$addr = $row['addr'];
		$username = $row['username'];
		$password = $row['password'];	
		$cntno = $row['cntno'];
		$email = $row['email'];
		$location = $row['location'];
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>I- Vaccination</title>
	<link rel="shortcut icon" href="img/favicon.ico">
		<?php include('include/cs.php'); ?>
</head>
<body>
	<div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
		<?php include('include/header.php'); ?>		
		<div class="boxed">
			<div id="content-container">
				<div class="pageheader">
					<h3><i class="fa fa-home"></i> Dashboard </h3>
						<div class="breadcrumb-wrapper">
							<span class="label">You are here:</span>
							<ol class="breadcrumb">
								<li> <a href="#"> Home </a> </li>
								<li class="active"> Dashboard </li>
							</ol>
						</div>
				</div>
			
            <div id="page-content">                                                                 
				<div class="row">
					<div class="col-lg-9">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Profile Information</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form method="post" action="action/profile_update.php" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Name</label>
                                                <input name="Log_Id" type="hidden" value="<?php echo $Log_Id?>">
                                                <input class="form-control" name="name" type="text" value="<?php echo $name?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Age</label>
                                                 <input class="form-control" name="age" type="text" value="<?php echo $age?>">
                                            </div>
                                            <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Gender</label>
                                               	 <input class="form-control" name="sex" type="text" value="<?php echo $sex?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Contact No</label>
                                                <input class="form-control" name="cntno" type="text" value="<?php echo $cntno?>"> 
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Email</label>
                                                <input class="form-control" name="email" type="text" value="<?php echo $email?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Location</label>
                                                <input class="form-control" name="location" type="text" value="<?php echo $location?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Address</label>
                                                <input class="form-control" name="addr" type="text" value="<?php echo $addr?>">                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Username</label>
                                                <input class="form-control" name="username" type="text" value="<?php echo $username?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Password</label>
                                                <input class="form-control" name="password" type="password">
                                            </div>                                         
                                            <div class="col-md-4" style="float: right; margin-top: 20px;">
											<button class="form-control btn  btn-primary"  type="submit">Update</button>
											</div>
                                         </div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/sidebar.php'); ?>
		</div>
		<?php include('include/footer.php'); ?>
		<?php include('include/js.php'); ?>
	</div>
</body>
</html>