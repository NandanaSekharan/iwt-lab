<?php
	include("auth.php");
	include('../connect/db.php');	
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
									<h3 class="panel-title">Report From <?php echo $fdate; ?> To <?php echo $tdate;?></h3>
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
                                                    <th>Amount</th>   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											$tot=0;
								$result = $db->prepare("select * from booking where dat>='$fdate' and dat<='$tdate'");
												$result->execute();
												for($i=1; $row = $result->fetch(); $i++)
												{
												echo"<tr>";		
												    $tot=$tot+$row["amt"];						
													echo"<td>".$i."</td>";	
													echo"<td>".$row['cname']."</td>";	
													echo"<td>".$row['age']."</td>";	
													echo"<td>".$row['sex']."</td>";	
													echo"<td>".$row['contactno']."</td>";
													echo"<td>".$row['diseases']."</td>";	
													echo"<td>".$row['vname']."</td>";	
													echo"<td>".$row['dat']."</td>";	
													echo"<td>".$row['tme']."</td>";	
													echo"<td>".$row['amt']."</td>";	
												echo"</tr>";
														
												}
											?>      
											<tr>
												
												<th colspan="9">
													<h3 style="color:black; text-transform:none">
														Total
													</h3>
												</th>
												<th colspan="1"> 
													<h3 style="color:black; text-transform:none">
														Rs : <?php echo $tot;?>
													</h3>
												</th>
											</tr>
                                            </tbody>
                                        </table>      
                                        <br>
                                        <input type="submit" value="Print" class="bt btn-primary pull-right" onClick="window.print()">
                                                                        
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