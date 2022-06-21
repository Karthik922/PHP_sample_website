<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
	header("location:sign.php?mes=<p>Please Login Here</p>"); 
	}
?>
<html>
 <head>
 <title>Skk</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body bgcolor="#ffff00">
 <div id="header">
 <div id="logotxt"><h1> Mater Of Computer Applications</h1>
<h3>Learn More Be Smart </h3>
 </div>
 <div id="logo">
<img src="avc.jpg" width="100%" height="100%">
 </div>
 </div>
 <div id="nav">
 <center>
 <ul id="navul">
 <li> <a href="webdesign.php"> Home</a> </li>
 <li> <a href="product.php">Product </a> </li>
 <li> <a href="download.php">Downloads </a> </li>
 <li> <a href="about.php"> About us</a> </li>
 <li> <a href="contact.php">Contact us </a> </li>
 <li> <a href="blog.php">Blog </a> </li>
 <?php
 if(isset($_SESSION["name"]))
 {
	 echo '<li> <a href="logout.php">Log Out</a> </li>;';
 }
else
{
echo '<li> <a href="sign.php">Sign In</a> </li>';	
}
 ?>
 
 </ul>
 </center>
 
 </div>
 <div id="container">
 <div id="lftbx">
 <br><br>
 <ul id="lful">
 <li> <a href="#"> Project</a> </li>
 <li> <a href="#">samples</a> </li>
 <li> <a href="#">Programming </a> </li>
 <li> <a href="#">Web Design</a> </li>
 <li> <a href="#">Graphic Design </a> </li>
 <li> <a href="#">Social Act </a> </li>
 </ul>
 
 </div>
 <div id="rtbx"></div> 
 </div>
 <div id="footer">
 <center>Copyright &copy;2019 | Designed By Karthik </center>
 </div>
 </body>
</html>