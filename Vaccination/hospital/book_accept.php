<?php
	include("auth.php");
	include('../connect/db.php');
	$booking_id=$_GET["booking_id"];	
	$result = $db->prepare("select * from booking where booking_id='$booking_id'");
	$result->execute();
	for($i=1; $row = $result->fetch(); $i++)
	{
		$booking_id=$row["booking_id"];	
		$dat=$row["dat"];	
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
									<h3 class="panel-title">Booking Confirm</h3>
								</div>
								<div class="panel-body">
                                     <form action="action/book_accept.php" method="post">
                                       	<div class="form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label mb-5">Date</label>
                                                <input name="booking_id" type="hidden" value="<?php echo $booking_id;?>">
                                                <input class="form-control" name="dat" type="date" value="<?php echo $dat?>" min="<?php echo $dat?>">
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="control-label">Time</label>
                                                <input class="form-control" name="btime" type="time" required>
                                            </div>
                                            <div class="col-md-3" style="float: right; margin-top: 20px;">
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