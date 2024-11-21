<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$resultp = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$resultp->execute();
	for($ip=0; $rowp = $resultp->fetch(); $ip++)
	{
		$pname = $rowp['name'];		
		$contactno = $rowp['contactno'];		
	}
	$Log_Idd=$_GET['Log_Idd'];		
	$result = $db->prepare("select * from doctor where Log_Id='$Log_Idd'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];
		$designation = $row['designation'];
		$mail = $row['mail'];
		$phone = $row['phone'];
		$location = $row['location'];
		$under = $row['under'];
		$hospital_name = $row['hospital_name'];
		$education_name = $row['education_name'];
		$year_complete = $row['year_complete'];
		$college = $row['college'];
		$latest_study = $row['latest_study'];
		$w_hospital_name = $row['w_hospital_name'];
		$hospital_location = $row['hospital_location'];
		$specialty = $row['specialty'];
		$experience = $row['experience'];
		$departments = $row['departments'];
		$university = $row['university'];
		$education_location = $row['education_location'];
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
					<div class="col-lg-12">
						
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                             <div class="panel">
                                <div class="panel-body np"> <img src="../doctor/img/<?php echo $photo;?>" alt="Cover" class="img-responsive">
                                    <div class="text-center">
                                        <!-- panel body -->
                                        <h4 class="text-lg text-overflow mar-top">Dr.<?php echo $name;?></h4>
                                        <p class="text-sm"><?php echo $under;?> </p>
                                        <!--/ panel body -->
                                        <div class="pad-ver">
                                            <a title="" href="javascript:void(0)" class="btn btn-primary btn-icon btn-circle fa fa-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                                            <a title="" href="javascript:void(0)" class="btn btn-info btn-icon btn-circle fa fa-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                                            <a title="" href="javascript:void(0)" class="btn btn-danger btn-icon btn-circle fa fa-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                                            <a title="" href="javascript:void(0)" class="btn btn-warning btn-icon btn-circle fa fa-envelope icon-lg add-tooltip" data-original-title="Email" data-container="body"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="panel">
                                <div class="panel-body pad-no"> 

                                  <!--Default Tabs (Left Aligned)--> 
                                  <!--===================================================-->
                                  <div class="tab-base"> 
                                    
                                    <!--Nav Tabs-->
                                    <ul class="nav nav-tabs" style="margin-bottom: 12px;">
                                      <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> Tell Us About Your Visit </a> </li>
                                      
                                    </ul>
                                    
                                    <!--Tabs Content-->
                                    <div class="tab-content" >
                                      <div id="demo-lft-tab-1" class="tab-pane fade active in"> 
                                      <!-- User COntents-->
										  <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        
										 <h4 class="font-medium m-t-30" style="margin-top: 25px;">Booking</h4>
										
                                        <hr>
										<div class="row">
                                
                                      <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="action/booking.php" method="post">
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-10">
                                                	<input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                    <input type="hidden" name="Log_Idd" value="<?php echo $Log_Idd;?>">
                                                    <input type="hidden" name="doc_name" value="<?php echo $name;?>">
                                                    <input type="hidden" name="pname" value="<?php echo $pname;?>">
                                                    <input type="hidden" name="contactno" value="<?php echo $contactno;?>">                                                	
                                                </div>                                                
                                            </div>
                                         
                                            <div class="position-relative row form-group">
                                            	<label for="exampleText" class="col-sm-2 col-form-label">Diseases</label>
                                                <div class="col-sm-10">
                                                	<textarea name="diseases" id="exampleText" rows="5" class="form-control" placeholder="Write Your Symptoms" required></textarea>
                                                </div>
                                                 <div class="col-sm-4">
                                                 	<label>Date</label>
                                                    <input type="date" name="dat" class="form-control"  min="<?php echo date("Y-m-d");?>" required>
                                                 </div>
                                                  <div class="col-sm-3">
                                                 	<label>&nbsp;</label>
                                                    <br>
                                                   <button class="btn btn-primary" style="float: right; margin-right: 13px;" type="submit">Book</button>                                                
                                                 </div>
                                            </div>                                        
                                        </form>
                                    </div>
                                </div>
                           
                                    </div>
                                  </div>
                                  <!--===================================================--> 
                                  <!--End Default Tabs (Left Aligned)--> 
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->

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