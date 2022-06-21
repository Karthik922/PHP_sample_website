<?php
	include("config.php");
	$name=$_POST["name"];
	$message=$_POST["message"];
	$sql="INSERT INTO chats (NAME,MESSAGE,LOGS) VALUES ('$name','$message',NOW())";
	if($name!=""&&$message!="")
	{
	if($con->query($sql))
	{
		echo "Message Posted";
	}
	else
	{
		echo "Error";
	}
	}
	else
	{
		echo "<b style='color:red;'>Please Type Messages</b>";
	}
?>