<?php
$con = mysqli_connect('localhost','root','lifebuoy');
define("APIKEY","cg123");

if(!mysqli_connect_error())
{
	mysqli_select_db($con,"stormy");

}
?>