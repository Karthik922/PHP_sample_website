<?php
	session_start();
	include("config.php");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Skk</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="signcss.css">
 
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
 <br><br><center style="color:yellow">
			<?php
				if(isset($_GET["mes"]))
				{
					echo $_GET["mes"];
				}
			?>
			</center>
	<h1 align="center"></h1>
		<fieldset id="user_login">
			<legend> User Login</legend>
				<form action="sign.php" method="post" autocomplete="off">
					<table id="user_table">
						<tr> <td>Use Name </td><td><input type="text" name="name" required> </td>
						</tr>
						<tr> <td>Password  </td><td><input type="password" name="pass" required> </td>
						</tr>
						<tr>
						<td><input type="submit" value="Login" name="submit" id="sbtn"> </td>
						<td><input type="reset" value="Clear" id="rbtn"> </td>
						</tr><tr> 
							<td><a href="#"> Forget Password? </a></td>
							<td><a href="new_user.php">New User Registration  </a> </td>
						</tr>
					</table>
				</form>
			
		</fieldset>
		<?php
			if(isset($_POST["submit"]))
			{ 
				$name=$_POST["name"];
				$pass=$_POST["pass"];
				if($name!=""&&$pass!="")
				{
					$sql="SELECT ID,USERNAME,PASSWORD FROM 	user WHERE USERNAME='$name' AND PASSWORD='$pass'";
					$result=$con->query($sql);
					//print_r($result);
					if($result->num_rows==1)
					{
						$_SESSION["name"]=$name;
						header("location:home.php");
					}
					else{
						echo "<p> Invalid User or Password</p>";
					}
				}
				else
				{
					echo "<p style='color:red'> please Enter Details</p>";
					
				}
			}
			else
			{
				echo "<p>please Fill The Details For Complete Access </p>";
			}
		
		?>
 
</div>
	<div id="footer">
	<center>Copyright &copy;2019 | Designed By Karthik </center>
	</div>
	</body>
</html>