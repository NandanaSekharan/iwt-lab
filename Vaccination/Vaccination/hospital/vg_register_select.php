<?php
	include('../connect/db.php');	
							
	$vcselect=$_POST["vcselect"];	
	$result = $db->prepare("SELECT * FROM vaccinegroup where vname='$vcselect'");
	$result->execute();
		for($i=0; $rows = $result->fetch(); $i++)
		{
			$data["vcvtype"] = $rows["vaccine"];	
		}
		echo json_encode($data);
?>


                  		
                  								
                  							

                  								
                  							