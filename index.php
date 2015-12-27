<?php
include_once "settings.php";

	if(isset($_REQUEST["apikey"]) && $_REQUEST["apikey"] == APIKEY)
	$sql = "insert into localsensors
			SET
			temperature = '{$_REQUEST["temp"]}',
			humidity = '{$_REQUEST["hum"]}',
			pressure = '{$_REQUEST["psure"]}',
			apikey = '{$_REQUEST["apikey"]}'
			";


	if(mysqli_query($con,$sql))
	{
		echo "success";
		return 1;
	}
	mysqli_close($con);

 


echo "failed";
return 0;


?>