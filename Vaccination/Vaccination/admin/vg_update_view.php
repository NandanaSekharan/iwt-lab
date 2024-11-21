<?php
	include("auth.php");
	include('../connect/db.php');
	$v_id=$_GET['v_id'];
	$result = $db->prepare("select * from vaccinegroup where v_id='$v_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$vname = $row['vname'];	
		$vtype = $row['vtype'];
		$vusage = $row['vusage'];	
		$schedule = $row['schedule'];
		$date = $row['date'];
		$vaccine = $row['vaccine'];
		$amt = $row['amt'];
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
					<div class="col-lg-6">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vaccine Update</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form method="post" action="action/vg_update.php" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-6">
                                                <label class=" control-label mb-5">Vaccine Name</label>
                                                <input class="form-control" name="vname" type="text"  value="<?php echo $vname;?>">
                                                <input name="v_id" type="hidden" value="<?php echo $v_id;?>">
                                            </div>
                                             <div class="col-sm-6">
                                                <label class=" control-label mb-5">Type</label>
                                                <input class="form-control" name="vtype" type="text"  value="<?php echo $vtype;?>">
                                            </div>
                                             <div class="col-sm-6">
                                                <label class=" control-label mb-5">Usage</label>
                                                <input class="form-control" name="vusage" type="text"  value="<?php echo $vusage;?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Schedule</label>
                                                <input class="form-control" name="schedule" type="text"  value="<?php echo $schedule;?>">
                                            </div>
											<div class="col-sm-6">
                                                <label class="control-label">Amount</label>
                                                <input class="form-control" name="amt" type="text"  value="<?php echo $amt;?>">
                                            </div>
                                             <div class="col-sm-6">
                                                <label class="control-label">Date</label>
                                                <input class="form-control" name="date" type="date"  value="<?php echo $date;?>" />
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="control-label">Vaccine</label>
                                                <textarea name="vaccine" class="form-control" rows="4"><?php echo $vaccine;?></textarea>
                                            </div>
                                            <div class="col-md-4" style="float: right; margin-top: 8px;">
											<button class="form-control btn  btn-primary"  type="submit">Update</button>
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