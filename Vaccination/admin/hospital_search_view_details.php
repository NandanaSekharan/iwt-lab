<?php
	error_reporting(0);
	include("auth.php");
	include('../connect/db.php');
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
                                                <td> www.<?php echo strtolower($name);?>.com</td>
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
                                      <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> General Details </a> </li>
                                    </ul>
                                    
                                    <!--Tabs Content-->
                                    <div class="tab-content" >
                                      <div id="demo-lft-tab-1" class="tab-pane fade active in"> 
                                      <!-- User COntents-->
										  <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row" style="margin-bottom: 18px;">
                                            <div class="col-md-3 col-xs-6 b-r" style="border-right: 1px solid #625B5B;"> <strong>Specialty</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $specialty;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r" style="border-right: 1px solid #625B5B;"> <strong>Specialize</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $specialize;?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r" style="border-right: 1px solid #625B5B;"> <strong>Experience</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $experience;?></p>
                                            </div>
                                        </div>
                                        <hr>
										<h4><strong>About  <?php echo $name;?></strong></h4><br>
                                        <p class="m-t-30"><?php echo $about;?>.</p>
                                        
                                        <h4 class="font-medium m-t-30" style="margin-top: 25px;">Rating Overview</h4>
										<h5>
												<?php
														$tot=0;
                                                        $result = $db->prepare("select * from review where HLog_Id='$Log_Idh' limit 1");
                                                        $result->execute();
                                                        for($i=0; $row = $result->fetch(); $i++)
                                                        {
														   $tot=$row["rating"];
                                                           echo $row["rating"];
                                                        }
                                                    ?> 
                                                    Rating with 
                                                    <?php
														$totc=0;
                                                        $result = $db->prepare("select count(*) from review where HLog_Id='$Log_Idh'");
                                                        $result->execute();
                                                        for($i=0; $row = $result->fetch(); $i++)
                                                        {
															$totc=$row['count(*)'];
                                                            echo"".$row['count(*)']."";
                                                        }
                                                ?>  
                                        Comments
                                        </h5>
                                        <hr>
										<div class="row">
                                        <div class="col-md-4">
											<h5><strong style="font-size: 25px; margin-left: 60px;"><?php echo $tot;?></strong></h5>
										<div class="star-rating">
										  <input type="radio" id="5-stars" name="rating" value="5" />
										  <label for="5-stars" class="star">&#9733;</label>
										  <input type="radio" id="4-stars" name="rating" value="4" />
										  <label for="4-stars"  class="star">&#9733;</label>
										  <input type="radio" id="3-stars" name="rating" value="3" />
										  <label for="3-stars" class="star">&#9733;</label>
										  <input type="radio" id="2-stars" name="rating" value="2" />
										  <label for="2-stars" class="star">&#9733;</label>
										  <input type="radio" id="1-star" name="rating" value="1" />
										  <label for="1-star" class="star">&#9733;</label>
										</div>
										</div>
										<div class="col-md-8" style="">
                                        <?php
											$result = $db->prepare("select * from review where HLog_Id='$Log_Idh' limit 1");
											$result->execute();
											for($i=0; $row = $result->fetch(); $i++)
											{
											$PLog_Id=$row["PLog_Id"];		
											echo"<p>".$row["review"]."</p>";
											}
										?>
                                        <br><p><strong>The overall rating for <?php echo $name;?> is <?php echo $tot;?> of 5.0 stars.</strong></p>	
										</div>	
									   </div>
										<hr/>
										<a href="hospitals_search_view_hospital_review_hospital.php<?php echo '?Log_Idh='.$Log_Idh; ?>" class="btn btn-sm btn-default" style="float: left;" >Read Reviews</a>                                                                 
										<hr/>									
                                            </div>
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