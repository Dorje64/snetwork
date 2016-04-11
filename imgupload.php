<?php
session_start();
require_once("dbconnection.php");
$username=$_SESSION['username'];
echo '<form action="imgupload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="myfile"><input type="submit" value="upload" name="submit"></form>';
$rand = md5(microtime());
	$name=@$_FILES['myfile']['name'];
	
	$temp = @$_FILES['myfile']['tmp_name'];
	if($name)
	{
		$location="photo/{$rand}_{$name}";
		
		move_uploaded_file($temp, $location) or die("Error");
		
		$query=mysql_query("UPDATE snetwork SET image='$location' WHERE username='$username'")or die("error!!.".mysql_error());
		
		die("photo has been uploaded ... <a href='home.php'>home</a>");
	}
?>