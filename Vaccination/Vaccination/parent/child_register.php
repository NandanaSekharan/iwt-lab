<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];	
		$addr = $row['addr'];
		$cntno = $row['cntno'];
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
					<div class="col-lg-10">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">New Child Register</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form action="action/public_save.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Name</label>
                                                <input class="form-control" name="cname" type="text" required pattern="[a-zA-Z1 _]{3,50}">
                                                 <input name="Log_Id" type="hidden" value="<?php echo $Log_Id?>">
                                                 <input name="location" type="hidden" value="<?php echo $location?>">
                                            </div>
                                              <div class="col-sm-4">
                                                <label class=" control-label mb-5">Age</label>
                                                <input class="form-control" name="age" type="number" required min="0" max="25">
                                            </div>
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Date Of Birth</label>
                                                <input class="form-control" name="dob" type="date" required max="<?php echo date("Y-m-d");?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Gender</label>
                                               		<select name="sex" class="form-control">
                                                    	<option value="">Select</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Address</label>
                                                <textarea class="form-control" name="addr" required rows="1" readonly/><?php echo $addr;?></textarea>
                                            </div>                                        
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Aadhar No</label>
                                                <input class="form-control" name="aadharno" type="text" required minlength="12" maxlength="12">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Parent Name</label>
                                                <input class="form-control" name="pname" type="text" required value="<?php echo $name;?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Contact No</label>
                                                <input class="form-control" name="cntno" type="text" required value="<?php echo $cntno;?>" readonly>
                                            </div>                                                                                       
                                             <div class="col-sm-4">
                                                <label class="control-label">Photo</label>
                                                <input class="form-control" name="photo" type="file" required/>
                                            </div>
                                             <div class="col-md-12">
                                                <label> About : </label>
                                                <textarea name="about" class="form-control" rows="4" placeholder="About Some Write " required></textarea>
                                            </div>
                                            <div class="col-md-3" style="float: right; margin-top: 20px;">
											<button class="form-control btn  btn-primary"  type="submit">Submit</button>
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