<?php
	session_start();
	session_destroy();
	header("location:sign.php?mes=<p>you are LogOut</p>"); 
	
	
?>