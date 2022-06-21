<?php
$con=new mysqli("localhost","root","","website");

if($con->connect_error)
{
	echo $con->connect_error;
	die("sorry Database Connection Failed");
}
//else
//{
	//echo "Database Connected";
//}
?>