<?php
	error_reporting(0);
	include("auth.php");
	include('../connect/db.php');
	$name=$_GET['name'];
	$result = $db->prepare("select * from child where cname='$name'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$PLog_Id = $row['Log_Id'];	
		$name = $row['cname'];	
		$age = $row['age'];
		$addr = $row['addr'];	
		$sex = $row['sex'];
		$contactno = $row['cntno'];
		$aadharno = $row['aadharno'];
		
	}
	$HLog_Id=$_SESSION['SESS_HOSPITAL_ID'];
	$result = $db->prepare("select * from user where Log_Id='$HLog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$hname = $row['name'];		
	}
?>
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
									<h3 class="panel-title">Vaccination</h3>
								</div>
								<div class="panel-body">
                                   <div class="form-group">
                                     <form method="post" action="action/vaccination_save.php" autocomplete="off">
                                       	<div class="form-group">
                                            <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Name</label>
                                                <input name="PLog_Id" type="hidden" value="<?php echo $PLog_Id?>">
                                                <input name="HLog_Id" type="hidden" value="<?php echo $HLog_Id?>">
                                                <input class="form-control" name="name" type="text" value="<?php echo $name?>" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Age</label>
                                                <input class="form-control" name="age" type="text" value="<?php echo $age?>" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                            	<label class=" control-label mb-5">Gender</label>
                                                <input class="form-control" name="sex" type="text" value="<?php echo $sex?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Contact No</label>
                                                <input class="form-control" name="contact_no" type="text" value="<?php echo $contactno?>" readonly>
                                            </div>
                                             <div class="col-sm-4">
                                                <label class=" control-label mb-5">Address</label>
                                                <input class="form-control" name="address" type="text" value="<?php echo $addr?>" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Aadhar No</label>
                                                <input class="form-control" name="aadhar_No" type="text" value="<?php echo $aadharno;?>" readonly>                                            </div>
                                             <div class="col-sm-4">
                                                <label class="control-label">Hospital Name</label>
                                                <input class="form-control" name="hospital_name" type="text" value="<?php echo $hname;?>" readonly>
                                            </div>    
                                            <div class="col-sm-4">
                                                <label class="control-label">Vaccine</label>
                     <input list="vaccination_type" required class="form-control" name="vaccination_typen" placeholder="Search"  id="vcselect">
                                                <datalist id="vaccination_type">
                                                    <option value="">Select</option>
                                                        <?php
                                                            $result = $db->prepare("SELECT distinct(vname) FROM vaccine");
                                                            $result->execute();
                                                            $row_count =  $result->rowcount();
                                                            for($i=0; $rows = $result->fetch(); $i++)
                                                            {
                                                            echo '<option>'.$rows['vname'].'</option>';
                                                            }
                                                        ?>								
                                                </datalist>
                                            </div>   
                                             <div class="col-sm-4">
                                                <label class="control-label">Vaccination Group</label>
                    <textarea class="form-control" name="vaccination_typeg" rows="3" id="vaccination_typeg"></textarea>
                                                <!--
                                    <input list="vaccination_typeg" required class="form-control" name="vaccination_typeg" placeholder="Search">
                                                <datalist id="vaccination_typeg">
                                                    <option value="">Select</option>
                                                    <option>None</option>
                                                        <?php
                                                         /*   $result = $db->prepare("SELECT distinct(vname) FROM vaccinegroup");
                                                            $result->execute();
                                                            $row_count =  $result->rowcount();
                                                            for($i=0; $rows = $result->fetch(); $i++)
                                                            {
                                                            echo '<option>'.$rows['vname'].'</option>';
                                                            }
															*/
                                                        ?>								
                                                </datalist>
                                                -->
                                                
                                            </div>                                              
                                             <div class="col-sm-4">
                                                <label class="control-label">Date</label>
                                                <input class="form-control" name="date" type="date" value="<?php echo date("Y-m-d");?>" readonly>
                                            </div>   
                                              <div class="col-sm-4">
                                                <label class="control-label">Next Date</label>
                                                <input class="form-control" name="next_date" type="date" min="<?php echo date("Y-m-d");?>">
                                            </div>      
                                            <div class="col-sm-4">
                                                <label class=" control-label mb-5">Description</label>
                                                <textarea class="form-control" name="descp" rows="3"></textarea>
                                            </div>                                  
                                            <div class="col-md-4" style="float: right; margin-top: 20px;">
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
<script src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#vcselect').change(function()
	{
		var vcselect = $("#vcselect").val();
		$.ajax({				
			type:'POST',
			url:'vg_register_select.php',
			data:'vcselect='+vcselect,	
			dataType:"JSON",			
			success:function(data)
			{
			   $('#vaccination_typeg').val(data.vcvtype);   
			}				
		}); 						
	});			
});
</script>
</body>
</html>