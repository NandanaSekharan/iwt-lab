<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];	
	$fdate=$_POST["fdate"];
	$tdate=$_POST["tdate"];
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
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Report  From <?php echo $fdate; ?> To <?php echo $tdate;?></h3>
								</div>
								<div class="panel-body table-responsive">
                                    <table id="demo-foo-addrow" class="table table-hover table-vcenter" style="text-transform:uppercase">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Licence</th>
                                                    <th>Speciality</th>
                                                    <th>Specialize</th>
                                                    <th>Experience</th> 
													<th>Date</th>                                                                                                                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
				$result = $db->prepare("select * from hospital where dat>='$fdate' and dat<='$tdate'");
												$result->execute();
												for($i=1; $row = $result->fetch(); $i++)
												{
												echo"<tr>";							
													echo"<td>".$i."</td>";	
													echo"<td>".$row['name']."</td>";	
													echo"<td>".$row['address']."</td>";
													echo"<td>".$row['contact_no']."</td>";		
													echo"<td>".$row['email']."</td>";	
													echo"<td>".$row['licence']."</td>";
													echo"<td>".$row['specialty']."</td>";
													echo"<td>".$row['specialize']."</td>";													
													echo"<td>".$row['experience']."</td>";
													echo"<td>".$row['dat']."</td>";														
												echo"</tr>";		
												}
											?>                                                       
                                            </tbody>
                                        </table>
                                        <div class="col-md-2" style="float: right; margin-top: 20px;">
                                        	<button class="form-control btn  btn-primary"  type="submit" onClick="window.print()">Print</button>
                                        </div>
                                                                        
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