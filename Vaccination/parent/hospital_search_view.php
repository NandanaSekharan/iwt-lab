<?php
	include("auth.php");
	include('../connect/db.php');
	$name=$_GET['name'];
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
                                <h3 class="panel-title">SEARCH <?php echo strtoupper($name);?></h3>
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
                                            <th data-sort-initial="true" data-toggle="true">Name</th>
                                            <th data-hide="phone, tablet">Specialty</th>
                                            <th data-hide="phone, tablet">Experience</th>
                                            <th data-hide="phone, tablet">Location</th>
											<th data-hide="phone, tablet">Contact</th>
											<th data-hide="phone, tablet">Mail</th>
                                            <th data-sort-ignore="true" class="min-width">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>																				
                                        <?php 
										$result =$db ->prepare("SELECT * FROM hospital where name like'%".$name."%'");
										$result->execute();	
										for($i=0; $rows= $result->fetch(); $i++) { 
										$Log_Idh=$rows["Log_Id"];	
										?>
                                        <tr>
                                            <td><?php echo $rows['name']; ?></td>
                                            <td><?php echo $rows['specialty']; ?></td>
                                            <td><?php echo $rows['experience']; ?></td>
                                            <td><?php echo $rows['location']; ?></td>
											<td><?php echo $rows['contact_no']; ?></td>
											<td><?php echo $rows['email']; ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
												<a href="hospital_search_view_hospital.php<?php echo '?Log_Idh='.$Log_Idh; ?>" class="btn btn-primary fa fa-eye"></a>												
												</div>
                                            </td>
                                        </tr>
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