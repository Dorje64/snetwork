<?php
session_start();
require_once('dbconnection.php');

	if( (isset($_POST['text']) && trim($_POST['text']) != '' ) || ( isset($_FILES['myfile'])) && ( $_FILES['myfile']['name'] != '' ) )
	{
		// if there is text
		if( $_POST['text'] ){
			$text = mysql_real_escape_string(stripslashes($_POST['text']));
		}
		// and there might also be image
		if(
			$_FILES['myfile']['name'] &&
			(
				$_FILES['myfile']['type'] == 'image/jpeg' ||
				$_FILES['myfile']['type'] == 'image/gif' ||
				$_FILES['myfile']['type'] == 'image/png'
			)
		)
		{
			$rand = md5(microtime());
			$name = @$_FILES['myfile']['name'];
			$temp = @$_FILES['myfile']['tmp_name'];
			$location="photo/{$rand}_{$name}";
			move_uploaded_file($temp, $location) or die("Error");
			
			$location = mysql_real_escape_string($location);
		}
		else{ // this means, the photo doesn't exist
			$location = '';
		}
		$time=time();
		$sql = "INSERT INTO posts(username,posted,post,photo,profilepic) VALUE('{$_SESSION['username']}','{$time}','{$text}','{$location}','{$_SESSION['image']}')";
		
		mysql_query($sql)or die("error!!.".mysql_error());
	}
	
	header("Location: home.php");
	exit;
?>