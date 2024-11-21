<?php
	include("auth.php");
	include('../connect/db.php');
?>
<!DOCTYP
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
                                <h3 class="panel-title">Feedback Reply</h3>
                            </div>
                            <div class="panel-body"> 
                                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Reply</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   		<?php 
										$result =$db ->prepare("SELECT * FROM feedback where reply!='Pending'");
										$result->execute();	
										for($i=0; $rows= $result->fetch(); $i++){
										
										?>
										<tr>
											<td><?php echo $rows['name']; ?></td>
											<td><?php echo $rows['contact']; ?></td>
											<td><?php echo $rows['subject']; ?></td>
											<td><?php echo $rows['dat']; ?></td>
                                            <td><?php echo $rows['reply']; ?></td>
                                            <td><?php echo $rows['date']; ?></td>
										</tr>
                                   <?php } ?>
                                    </tbody>
                                </table>                            
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
</div>    
</body>
</html>