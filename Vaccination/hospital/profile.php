<?php
	
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_HOSPITAL_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];	
		$username = $row['username'];
		$password = $row['password'];	
	}
	$result = $db->prepare("select * from hospital where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$address = $row['address'];	
		$location = $row['location'];
		$contact_no = $row['contact_no'];	
		$contact1 = $row['contact1'];
		$email = $row['email'];
		$licence = $row['licence'];
		$specialty = $row['specialty'];
		$specialize = $row['specialize'];
		$experience = $row['experience'];
		$photo = $row['photo'];
		$about = $row['about'];
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
									<h3 class="panel-title">Hospital Information</h3>
								</div>
								<div class="panel-body">
                                	<div class="col-lg-4">
                                    	<?php
											if($photo=="")
											{
										?>
                                    			<img src="../images/l6.jpg" width="100%">
                                        	<?php
											}
											else
											{
											?>
                                            	<img src="../admin/hosptal_photo/<?php echo $photo;?>" width="100%">
                                            <?php
											}
											?>
                                            
                                    </div>
                                   <div class="form-group">
                                     <form action="action/profile_update.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Name</label>
                                                <input name="Log_Id" type="hidden" value="<?php echo $Log_Id?>">
                                                <input class="form-control" name="name" type="text" value="<?php echo $name;?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Address</label>
                                                <input class="form-control" name="address" type="text" required value="<?php echo $address;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Location</label>
                                                <input class="form-control" name="location" type="text" required value="<?php echo $location;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Contact No</label>
                                                <input class="form-control" name="contact_no" type="text" required value="<?php echo $contact_no;?>" maxlength="10" minlength="10">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Contact No</label>
                                                <input class="form-control" name="contact1" type="text" required value="<?php echo $contact1;?>" maxlength="10" minlength="10">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Email</label>
                                                <input class="form-control" name="email" type="email" required value="<?php echo $email;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">License No</label>
                                                <input class="form-control" name="licence" type="text" required value="<?php echo $licence;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Specialty</label>
                                                <input class="form-control" name="specialty" type="text" required value="<?php echo $specialty;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Specialize</label>
                                                <input class="form-control" name="specialize" type="text" required value="<?php echo $specialize;?>">
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Experience</label>
                                                <input class="form-control" name="experience" type="text" required value="<?php echo $experience;?>">
                                            </div>                                           
                                             <div class="col-sm-4">
                                                <label class="control-label">Photo</label>
                                                <input class="form-control" name="photo" type="file"/>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Password</label>
                        <input class="form-control" name="password" type="password" required value="<?php echo $password;?>">
                                            </div>
                                             <div class="col-md-12">
                                                <label> About : </label>
          <textarea name="about" class="form-control" rows="4" placeholder="About Some Write" required><?php echo trim($about);?></textarea>
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