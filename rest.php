<?php
include_once "settings.php";

$return_ary = [];
$sql = "select * from localsensors order by id desc limit 0,1";



$rst = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($rst);
$return_ary = ["tstamp"=>$row["created_timestamp"],"t"=>$row["temperature"],"p"=>$row["pressure"],"h"=>$row["humidity"]];
	
	
	
mysqli_close($con);

	echo json_encode($return_ary);
	return;

	
?>