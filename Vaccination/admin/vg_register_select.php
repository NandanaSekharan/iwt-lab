<?php
	include('../connect/db.php');	
							
	$vcselect=$_POST["vcselect"];	
	$result = $db->prepare("SELECT * FROM vaccine where vname='$vcselect'");
	$result->execute();
		for($i=0; $rows = $result->fetch(); $i++)
		{
			$data["vcvtype"] = $rows["vtype"];	
			$data["vcvusage"] = $rows["vusage"];	
			$data["vcschedule"] = $rows["schedule"];	
		}
		echo json_encode($data);
?>


                  		
                  								
                  							

                  								
                  							