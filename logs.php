<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	include("config.php");
	$sql="SELECT * FROM chats ORDER BY ID DESC";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()){
		echo "<div id='cbox'>";
		echo "<div>
				<b id='uname'>{$row['NAME']}</b>
				<i id='time'>{$row['LOGS']}</i>
				<span id='cmsg'>{$row['MESSAGE']}</span>
				</div>";
		echo "</div>";
		}
	}
	else
	{
		echo "<p>No Chat Yet....</p>";
	}	
?>
</body>
</html>