<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_GET['user_id'];
	$result = $db->prepare("select * from child where user_id='$user_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$cname=$row["cname"];
		$age=$row["age"];
		$dob=$row["dob"];
		$sex=$row["sex"];
		$addr=$row["addr"];
		$aadharno=$row["aadharno"];
		$pname=$row["pname"];
		$cntno=$row["cntno"];
		$about=$row["about"];
		$photo=$row["photo"];
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
					<div class="col-lg-10">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">New Child Register</h3>
								</div>
								<div class="panel-body">
                                	<div class="col-lg-4">
                                    	<img src="../admin/child_photo/<?php echo $photo;?>" width="100%" height="175">
                                    </div>
                                   <div class="form-group">
                                     <form action="action/public_update.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Name</label>
                                                <input class="form-control" name="cname" type="text" value="<?php echo $cname;?>" readonly>
                                                 <input name="user_id" type="hidden" value="<?php echo $user_id?>">
                                            </div>
                                              <div class="col-sm-4">
                                                <label class=" control-label mb-5">Age</label>
                                                <input class="form-control" name="age" type="number" value="<?php echo $age;?>" >
                                            </div>
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Date Of Birth</label>
                                                <input class="form-control" name="dob" type="date" value="<?php echo $dob;?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Gender</label>
                                                 <input class="form-control" name="sex" type="text" value="<?php echo $sex;?>" readonly>                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Address</label>
                                                <textarea class="form-control" name="addr" required rows="1"><?php echo $addr;?></textarea>
                                            </div>                                        
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Aadhar No</label>
                                                <input class="form-control" name="aadharno" type="text" value="<?php echo $aadharno;?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Parent Name</label>
                                                <input class="form-control" name="pname" type="text" required value="<?php echo $pname;?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Contact No</label>
                                                <input class="form-control" name="cntno" type="text" required value="<?php echo $cntno;?>">
                                            </div>                                                                                       
                                             <div class="col-sm-4">
                                                <label class="control-label">Photo</label>
                                                <input class="form-control" name="photo" type="file"/>
                                            </div>
                                             <div class="col-md-12">
                                                <label> About : </label>
                                                <textarea name="about" class="form-control" rows="4"><?php echo $about;?></textarea>
                                            </div>
                                            <div class="col-md-3" style="float: right; margin-top: 20px;">
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