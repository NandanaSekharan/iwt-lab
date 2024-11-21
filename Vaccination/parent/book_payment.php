<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$result = $db->prepare("select * from booking where PLog_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$cname = $row['cname'];	
		$contactno = $row['contactno'];	
		$vname = $row['vname'];	
		$dat = $row['dat'];	
		$tme = $row['tme'];		
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
									<h3 class="panel-title">Online Payment</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form action="book_payment_transfer.php" method="post">
                                       	<div class="form-group">
                                            <div class="col-sm-6">
                                                <label class=" control-label mb-5">Name</label>                                               
                                                <input class="form-control" name="name" type="text" value="<?php echo $cname?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Vaccine</label>
                                                <input class="form-control" name="vname" type="text" value="<?php echo $vname?>">
                                            </div>
                                             <div class="col-sm-6">
                                                <label class="control-label">Contact No</label>
												<input class="form-control" name="contactno" type="text" value="<?php echo $contactno?>">
                                            </div>
											<div class="col-sm-6">
                                                <label class="control-label">Date</label>
                                                <input class="form-control" name="dat" type="text" value="<?php echo $dat?>">
                                            </div>
											<div class="col-sm-6">
                                                <label class="control-label">Time</label>
                                                <input class="form-control" name="tme" type="text" value="<?php echo $tme?>">
                                            </div>
											<div class="col-sm-6">
                                                <label class="control-label">Amount</label>
                                                <input class="form-control" name="amt" type="text" value="<?php echo $amt?>">
                                            </div>
											<div class="col-sm-6">
														<label>Card Type</label>
													<select required class="form-control">
														<option value="" disabled selected>Select</option>
														<option value="1">Master Card</option>
														<option value="2">Visa</option>
														<option value="3">American Express</option>
														<option value="2">Laser</option>
														<option value="2">Discover</option>
													</select>
											</div>
											<div class="col-sm-6">
													<label>Card Number</label>
												<input type="text" class="form-control" required pattern="[0-9]{6,6}" maxlength="6" minlength="6">                                                           
											</div>
											<div class="col-sm-6">
													<label>Expairy Date (DD/MM)</label>
												<input type="date" class="form-control" required min="<?php echo date("Y-m-d");?>">
												
											</div>
											<div class="col-sm-6">
													<label>CVV</label>
												<input type="number" class="form-control" required>
											</div>
											<div class="col-sm-6">
												<label for="pay-ca">Full name on a Card</label>
												<input id="pay-ca" type="text" class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
												
											</div>
                                            <div class="col-md-6" style="float: right; margin-top: 22px;">
											<button class="form-control btn btn-block  btn-danger"  type="submit">Pay</button>
											
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
</div>    
</body>
</html>