<?php
	include("auth.php");
	include('../connect/db.php');
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
					<div class="col-lg-9">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vaccination Register</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form method="post" action="action/v_register.php" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Vaccine Name</label>
                                                <input class="form-control" name="vname" type="text" required>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Type</label>
                                                <input class="form-control" name="vtype" type="text" required>
                                            </div>  
                                            <div class="col-sm-4">
                                                <label class="control-label">Schedule</label>
                                                <input class="form-control" name="schedule" type="text" required>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Date</label>
                                                <input class="form-control" name="date" type="date" min="<?php echo date("Y-m-d");?>" />
                                            </div>
                                            <div class="col-md-4" style="float: right; margin-top: 20px;">
											<button class="form-control btn  btn-primary"  type="submit">Submit</button>
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