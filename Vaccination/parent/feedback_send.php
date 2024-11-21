<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name = $row['name'];	
		$contact = $row['cntno'];		
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
					<div class="col-lg-8">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Feedback Send</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form action="action/feedback.php" method="post">
                                       	<div class="form-group">
                                            <div class="col-sm-6">
                                                <label class=" control-label mb-5">Name</label>
                                                <input name="Log_Id" type="hidden" value="<?php echo $Log_Id;?>">
                                                <input class="form-control" name="name" type="text" value="<?php echo $name?>" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Contact No</label>
                                                <input class="form-control" name="contact" type="text" value="<?php echo $contact?>" readonly>
                                            </div>
                                             <div class="col-sm-12">
                                                <label class="control-label">Subject</label>
                                                <textarea name="subject" rows="4" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-md-3" style="float: right; margin-top: 20px;">
											<button class="form-control btn  btn-primary"  type="submit">Send</button>
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