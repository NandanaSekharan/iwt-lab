<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_HOSPITAL_ID'];	
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
									<h3 class="panel-title">All Bookings</h3>
								</div>
								<div class="panel-body table-responsive">
                                    <table class="table table-hover table-vcenter" style="text-transform:uppercase">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
													<th>Age</th>
													<th>Gender</th>
                                                    <th>Contact No</th>
                                                    <th>Diseases</th>
                                                    <th>Vaccine</th>
                                                    <th>Date</th>  
													<th>Time</th>
													<th>Status</th> 
                                                    <th>Accept</th>  
                                                    <th>Cancel</th>                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
												$result = $db->prepare("select * from booking where HLog_Id='$Log_Id' and stat='Pending'");
												$result->execute();
												for($i=1; $row = $result->fetch(); $i++)
												{
												echo"<tr>";		
												    $booking_id=$row["booking_id"];						
													echo"<td>".$i."</td>";	
													echo"<td>".$row['cname']."</td>";	
													echo"<td>".$row['age']."</td>";	
													echo"<td>".$row['sex']."</td>";	
													echo"<td>".$row['contactno']."</td>";
													echo"<td>".$row['diseases']."</td>";	
													echo"<td>".$row['vname']."</td>";	
													echo"<td>".$row['dat']."</td>";	
													echo"<td>".$row['tme']."</td>";	
													echo"<td>".$row['stat']."</td>";
												?>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="book_accept.php<?php echo '?booking_id='.$booking_id; ?>" class="btn  btn-block btn-success fa fa-eye"></a>												
                                                    </div>
                                            	</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="action/book_cancel.php<?php echo '?booking_id='.$booking_id; ?>" class="btn  btn-block btn-danger fa fa-eye"></a>												
                                                    </div>
                                            	</td>
                                                <?php
												echo"</tr>";
														
												}
											?>                                                       
                                            </tbody>
                                        </table>
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