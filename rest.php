<?php
include_once "settings.php";

$return_ary = [];
$sql = "select * from localsensors order by id desc limit 0,1";

if($rst = mysqli_query($con,$sql))
	{
		 $return_ary[$rst["id"] = ["t"=>$rst["temperature"],
									"p"=>$rst["pressure"],
									"h"=>$rst["humidity"]];			
	}
	echo json_decode(return_ary);				
	return;
?>