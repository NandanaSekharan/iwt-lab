<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_PARENT_ID'];
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
									<h3 class="panel-title">Vaccination Certificate</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form method="get" action="vaccination_certificate_issue.php" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-6">
                                              <label class="control-label mb-5">Name</label>
                                               <input list="name" required class="form-control" name="name" placeholder="Search">
                                                <datalist id="name">
                                                    <option value="">Select</option>
                                                        <?php
                                                            $result = $db->prepare("SELECT distinct(cname) FROM booking where stat='Accept' and statvtk='Accept' and PLog_Id='$Log_Id'");
                                                            $result->execute();
                                                            $row_count =  $result->rowcount();
                                                            for($i=0; $rows = $result->fetch(); $i++)
                                                            {
                                                            echo '<option>'.$rows['cname'].'</option>';
                                                            }
                                                        ?>								
                                                </datalist>
                                            </div>                                            
                                            <div class="col-md-3" style="margin-top: 25px;">
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
</div>    
</body>
</html>