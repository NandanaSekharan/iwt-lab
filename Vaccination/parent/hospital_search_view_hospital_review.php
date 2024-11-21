<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$resultp = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$resultp->execute();
	for($ip=0; $rowp = $resultp->fetch(); $ip++)
	{
		$pname = $rowp['name'];		
	}
	$Log_Idh=$_GET['Log_Idh'];		
	$result = $db->prepare("select * from hospital where Log_Id='$Log_Idh'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];
		$address = $row[ 'address'];
		$location = $row[ 'location' ];
		$contact1 = $row[ 'contact_no' ];
		$contact2 = $row[ 'contact1' ];
		$email = $row[ 'email' ];
		$licence = $row[ 'licence' ];
		$specialty = $row[ 'specialty' ];
		$specialize = $row[ 'specialize' ];
		$experience = $row[ 'experience' ];
		$photo = $row[ 'photo' ];
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
                                <div class="panel-body np"> <img src="../admin/hosptal_photo/<?php echo $photo;?>" alt="Cover" class="img-responsive">
                                    <div class="text-center">
                                        <!-- panel body -->
                                        <h4 class="text-lg text-overflow mar-top"><?php echo $name;?></h4>
                                        <p class="text-sm"><?php echo $location;?> </p>
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
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user"> </i> User Information</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-external-link ph-5"></i></td>
                                                <td> URL </td>
                                                <td> www.google.com</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope-o ph-5"></i></td>
                                                <td> Email </td>
                                                <td><?php echo $email;?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone ph-5"></i></td>
                                                <td> Phone </td>
                                                <td> <?php echo $contact1;?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-skype ph-5"></i></td>
                                                <td> Location </td>
                                                <td> <?php echo $location;?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                        
										 <h4 class="font-medium m-t-30" style="margin-top: 25px;">Overall Rating (Required)</h4>
										
                                        <hr>
										<div class="row">
                                
                                      <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="action/reviewh.php" method="get">
                                            <div class="position-relative row form-group">
                                            <label for="exampleEmail" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                	<input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                    <input type="hidden" name="Log_Idh" value="<?php echo $Log_Idh;?>">
                                                    <input type="hidden" name="doc_name" value="<?php echo $name;?>">
                                                    <input type="hidden" name="pname" value="<?php echo $pname;?>">
                                                	<input name="title" id="exampleEmail" placeholder="Give your Comment Title"  class="form-control" type="text" required>
                                                </div>
                                            </div>
                                            
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Your Rating</label>
                                                <div class="col-sm-10">
													<select name="rating" id="exampleSelect" class="form-control" required>
													<option value="">Choose Rating</option>
													<option value="5" >Excelent</option>
													<option value="4">Average</option>
													<option value="3">Above Average</option>
													<option value="2">Below Average</option>
													<option value="1">Poor</option>
													</select></div>
                                            </div>
                                            
                                            <div class="position-relative row form-group">
                                            	<label for="exampleText" class="col-sm-2 col-form-label">Comment</label>
                                                <div class="col-sm-10">
                                                	<textarea name="review" id="exampleText" rows="5" class="form-control" placeholder="Write Your Comment" required></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="position-relative row form-check">
                                                
                                                    <button class="btn btn-primary" style="float: right; margin-right: 13px;" type="submit">Submit</button>
                                                
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