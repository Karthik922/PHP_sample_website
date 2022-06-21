
<?php
	session_start();
	include("config.php");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Skk</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="blogcss.css">
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
 <div id="comments">
 <h1>Blog </h1>
 <img src="ball.jpg" id="blog_img">
  <p id="para1">
	<b>About online Help</b>
Adobe Systems, Inc. provides complete documentation in the Adobe PDF Help system.
The Help system includes information on all the tools, commands, and features for both
Windows and Mac OS. The PDF format is designed for easy navigation online, and support
for third-party screen readers compatible with Windows. The Help can also be printed as a
desktop reference.<br>
<b>Navigating in Help</b>
The Help will open in an Acrobat window with the bookmark pane open. If the bookmark
pane is not open choose Window > Bookmarks. You can also navigate using the
navigation bar, the index, or search the document.
At the top and bottom of each page is a navigation bar. Click Using Help to return to this
introduction. Clicking Contents, or Index will take you to that section.
The Next Page and the Previous Page arrows let you move through the pages
sequentially. Click Back to return to the last page you viewed. You can also use the
navigation arrows in the Acrobat toolbar.
  </p>
  <fieldset id="user_login">
			<legend> Post Comments Here</legend>
				<form action="blog.php" method="post" autocomplete="off">
					<table id="user_table">
						<tr> <td>Name </td>
						<?php
						if(isset($_SESSION["name"]))
						{
							echo '<td><input type="text" value="'.$_SESSION["name"].'" name="name" readonly required> </td>';
						}
						else
						{
							echo "<td><a href='sign.php'>Please Login Here </a></td>";
							$_POST["name"]="";
						}
						?>
						</tr>
						<tr> <td>Comments</td><td><textarea name="comment" required></textarea></td>
						</tr>
						<tr>
						<td colspan="2"><input type="submit" value="Post Comment" name="submit" id="comm"> </td>
						
						</tr>
						
					</table>
				</form>
			
		</fieldset>
				<?php
				if(isset($_POST["submit"]))
				{
					$name=$_POST["name"];
					$comment=$_POST["comment"];
					if($name!="" && $comment!="")
					{
					$sql="INSERT INTO comments(NAME,COMMENT,LOGS) VALUES('$name','$comment',NOW())";
					$con->query($sql);
					}
					else
					{
						echo "<p style='color:red;'>Please Fill All The Details And Must Login Here</p>";
					}
				}
				$sql="SELECT * FROM comments ORDER BY ID DESC";
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						echo "<p><b style='color:lime;'>{$row["NAME"]}</b>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i style='color:orange;'>{$row["LOGS"]}</i></p><p style='color:white;'>{$row["COMMENT"]}</p><hr>";
					}
				}
				else
				{
				echo "<p> No Commnts yrt....</p>";	
				}
				?>
  
 </div>
 <div id="footer">
 <center>Copyright &copy;2019 | Designed By Karthik </center>
 </div>
 </body>
</html>