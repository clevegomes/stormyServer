<?php


$con = mysqli_connect('localhost','root','lifebuoy');
define("APIKEY","cg123");

if(!mysqli_connect_error())
{
	mysqli_select_db($con,"stormy");

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

}


echo "failed";
return 0;


?>