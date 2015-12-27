<?php
include_once "settings.php";

$return_ary = [];
$sql = "select * from localsensors order by id desc limit 0,1";


$rst = mysqli_query($con,$sql)
$row = mysqli_fetch_assoc($rst);
//$return_ary[$row["current_timestamp"]] = ["t"=>$row["temperature"],"p"=>$row["pressure"],"h"=>$rst["humidity"]];			
	
	
	


	echo $row["temperature"];		
	//echo json_encode($return_ary);		
	return;

	
?>