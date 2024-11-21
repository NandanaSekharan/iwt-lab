<?php
	include("auth.php");
	include('../connect/db.php');
	$name=$_GET['name'];
	$result = $db->prepare("select * from child where cname='$name'");
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
	
	$resultv = $db->prepare("select * from vaccination where name='$name'");
	$resultv->execute();
	for($i=0; $rowv = $resultv->fetch(); $i++)
	{		
		$hospital_name=$rowv["hospital_name"];
		$vaccination_type=$rowv["vaccination_type"];
		$vaccination_gp=$rowv["vaccination_gp"];
		$next_date=$rowv["next_date"];
		$date=$rowv["date"];
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
        <style>
			h1
			{
				margin:0;
				padding:0;
			}
			.vcrt
			{
				font-family:Vivaldi, "Vladimir Script";
				font-size:25px;
				letter-spacing:5px;
				font-weight:bold;
				text-align:center;				
			}
		</style>
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
					<div class="col-lg-8">
						<div class="panel">  
                        	                      
                            <div class="certfcat">
                                <div class="vcrt">Vaccination Certificate</div>
                                <div class="vcrt">Pondichery</div>
                                <div class="vcrt">Health Department</div>
                                <div class="vcrt"><u>Phone : 0491-2545365</u></div>
                            </div>
                            <div class="panel-body">
                            	 
                            	<div class="col-lg-4">
                                	<h4>Date : <?php echo date("d-m-Y");?></h4>
                                </div>
                            	<div class="col-lg-4">
                                	<h4>Hospital : <?php echo $hospital_name;?></h4>
                                </div>
                                <div class="col-lg-4">
                                	<h4>Place : <?php echo "Pondichery";?></h4>
                                </div>
                                
                               <div class="col-lg-8">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $name;?></th>
                                        </tr>                                      
                                        <tr>
                                            <th>Age</th>
                                            <th><?php echo $age;?></th>
                                        </tr>
                                        <tr>
                                            <th>Date Of Birth</th>
                                            <th><?php echo $dob;?></th>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <th><?php echo $sex;?></th>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <th><?php echo $addr;?></th>
                                        </tr>
                                        <tr>
                                            <th>Aadhar No</th>
                                            <th><?php echo $aadharno;?></th>
                                        </tr>
                                        <tr>
                                            <th>Parent Name</th>
                                            <th><?php echo $pname;?></th>
                                        </tr>
                                        <tr>
                                            <th>Contact No</th>
                                            <th><?php echo $cntno;?></th>
                                        </tr>
                                         <tr>
                                            <th>Address</th>
                                            <th><?php echo $addr;?></th>
                                        </tr>
                                         <tr>
                                            <th>Vccination Type</th>
                                            <th><?php echo $vaccination_type;?></th>
                                        </tr>
                                         <tr>
                                            <th>Vaccination Group</th>
                                            <th><?php echo $vaccination_gp;?></th>
                                        </tr>
                                         <tr>
                                            <th>Vaccine Date</th>
                                            <th><?php echo $date;?></th>
                                        </tr>
                                         <tr>
                                            <th>Next Date</th>
                                            <th><?php echo $next_date;?></th>
                                        </tr>
                                    </table>
                                </div>      
                                            <input type="submit" value="Print" class="btn btn-primary pull-right" style="margin-top:470px; width:200px" onClick="window.print()">            
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