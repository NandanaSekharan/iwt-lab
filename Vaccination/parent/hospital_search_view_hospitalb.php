<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_IdP=$_SESSION['SESS_PARENT_ID'];
	$resultp = $db->prepare("select * from user where Log_Id='$Log_IdP'");
	$resultp->execute();
	for($ip=0; $rowp = $resultp->fetch(); $ip++)
	{
		$pname = $rowp['name'];		
		$contactno = $rowp['cntno'];		
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
                                        <form action="action/bookingh.php" method="post" autocomplete="off">
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-10">
                                                	<input type="hidden" name="PLog_Id" value="<?php echo $Log_IdP;?>">
                                                    <input type="hidden" name="HLog_Id" value="<?php echo $Log_Idh;?>">
                                                    <input type="hidden" name="doc_name" value="<?php echo $name;?>">
                                                    <input type="hidden" name="pname" value="<?php echo $pname;?>">
                                                    <input type="hidden" name="contactno" value="<?php echo $contactno;?>">                                                	
                                                </div>                                                
                                            </div>
                                         
                                            <div class="position-relative row form-group">
                                            	<label for="exampleText" class="col-sm-2 col-form-label">Subject</label>
                                                <div class="col-sm-10">
                                                	<textarea name="diseases" id="exampleText" rows="5" class="form-control" placeholder="Write Your Description" required></textarea>
                                                </div>                                                
                                                  <div class="col-sm-4">
                                                    <label class="control-label mb-5">Child</label>                                                   
                                                    <input list="name" required class="form-control" name="name" placeholder="Search">
                                                        <datalist id="name">                                                          
                                                                <?php
                                                                    $result = $db->prepare("SELECT distinct(cname) FROM child where Log_Id='$Log_IdP'");
                                                                    $result->execute();                                                                   
                                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                                    {
                                                                    echo '<option>'.$rows['cname'].'</option>';
                                                                    }
                                                                ?>								
                                                        </datalist>
                                                    </div>  
                                                    <div class="col-sm-4">
                                                    <label class="control-label mb-5">Vaccine</label>
                                                    <input list="vname" required class="form-control" name="vname" placeholder="Search">
                                                        <datalist id="vname">                                                            
                                                                <?php
                                                                    $result = $db->prepare("SELECT distinct(vname) FROM vaccinegroup");
                                                                    $result->execute();                                                                 
                                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                                    {
                                                                    echo '<option>'.$rows['vname'].'</option>';
                                                                    }
                                                                ?>								
                                                        </datalist>
                                                    </div>  
                                                    <div class="col-sm-4">
                                                 	<label>Date</label>
                                                    <input type="date" name="dat" class="form-control"  min="<?php echo date("Y-m-d");?>" required>
                                                 </div>
                                                 <div class="col-sm-4">
                                                 	<label>Time</label>
                                                    <input type="time" name="tme" class="form-control"  min="<?php echo date("Y-m-d");?>" required>
                                                 </div>                      
                                                  <div class="col-sm-4">
                                                 	<label>&nbsp;</label>
                                                    <br>
                                                   <button class="btn btn-primary btn-block"  type="submit">Book</button>                                                
                                                 </div>
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