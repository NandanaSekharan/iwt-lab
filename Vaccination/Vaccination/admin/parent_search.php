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
	  <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="plugins/fooTable/css/footable.core.css" rel="stylesheet">
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
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
                                <h3 class="panel-title">ALL PARENTS</h3>
                            </div>
                             <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 text-xs-center text-right" style="float: right">
                                                <div class="form-group">
                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th>#</th> 
                                            <th>Name</th>                                             
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php 
										$result =$db ->prepare("SELECT * FROM user where utype='Parent'");
										$result->execute();	
										for($i=1; $rows= $result->fetch(); $i++){
											$user_id=$rows["user_id"];	
										?>
										<tr>
											<td><?php echo $i; ?></td>
                                            <td><?php echo $rows['name']; ?></td>											
											<td><?php echo $rows['age']; ?></td>  
                                            <td><?php echo $rows['sex']; ?></td> 
                                            <td><?php echo $rows['addr']; ?></td> 
                                            <td><?php echo $rows['cntno']; ?></td>    
                                            <td><?php echo $rows['email']; ?></td> 
                                            
                                   <?php } ?>                                
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="text-right">
                                                    <ul class="pagination"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/sidebar.php'); ?>
             <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
		</div>
		<?php include('include/footer.php'); ?>
		 <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="plugins/fooTable/dist/footable.all.min.js"></script>
        <script src="plugins/screenfull/screenfull.js"></script>
        <script src="js/demo/jasmine.js"></script>
        <script src="js/demo/tables-footable.js"></script>
	</div>
    
</div>    
</body>
</html>