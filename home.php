<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
	header("location:sign.php?mes=<p>Please Login Here</p>"); 
	}
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Skk</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="signcss.css">
 <link rel="stylesheet" type="text/css" href="homecss.css">
 <script src="jquery-3.4.1.min.js"></script>
 </head>
 <body>
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
 	<h1 align="center"> Home Page</h1>
	<p id="welcome">Hi &nbsp<?php echo $_SESSION["name"];?> Welcome to MCA Branch</p>
	<form name="frm" autocomplete="off">
		<input type="text" name="msg" id="msg" placeholder="Type Message Here">
		<input type="hidden" name="user" id="user" value="<?php echo $_SESSION["name"];?>">
			<button id="btn" style="margin-top:20px;margin-left:60px;width:250px;
	 height:30px;
	 border-radius:5px;
	 font-size:18px;
	 color:blue;">Post Message</button>
			<span id="status">.</span>
	
	</form>
		<div id="feedback">
		</div>
		
 
</div>
	<div id="footer">
	<center>Copyright &copy;2019 | Designed By Karthik </center>
	</div>
	<script>
		$(document).ready(function(){
			$("#msg").keypress(function(){
				$("#status").html("Typing Message..");
			});
			setInterval(function(){loadchats()},100);
			$("#btn").click(function(){
				var n=$("#user").val();
				var m=$("#msg").val();
				$.post("post.php",{name:n,message:m},function(data){
					$("#status").html(data);
					$("#msg").val("");
				});
			});
		});
		function loadchats()
		{
			$.ajax({url:"logs.php",success:function(result){
				$("#feedback").html(result);
			}});
		}
	</script>
	</body>
</html>