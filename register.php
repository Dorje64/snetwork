<?php
	include('dbconnection.php');
	session_start();
	// to prevent mysql injection
	$fname=mysql_real_escape_string(stripslashes($_POST['fname']));
	$lname=mysql_real_escape_string(stripslashes($_POST['lname']));
	$sex=@$_POST['sex'];
	$email=mysql_real_escape_string(stripslashes($_POST['email']));
	$uname=mysql_real_escape_string(stripslashes($_POST['username']));
	$pass1=mysql_real_escape_string(stripslashes($_POST['pass1']));
	$pass2=$_POST['pass2'];
	
	if(!empty($fname)&&!empty($lname)&&!empty($sex)&&!empty($email)&&!empty($uname)&&!empty($pass1)&&!empty($pass2))
	{
	include("check.php");
	if($pass1==$pass2){
		$query="INSERT INTO snetwork (username,password,firstname,lastname,email,sex) VALUES ('$uname','$pass1','$fname','$lname','$email','$sex')";
		mysql_query($query,$connect) or die("not done".mysql_error());
		echo "<center>";
		echo "Success.";
		echo '<a href="index.php">log in now</a>';
	}
	else
	{
		echo "<center>PASSWORD NOT MATCH...";
		echo '<a href="sing.php">try again</a></center>';
	}
	}
	else
	{
		echo "FILL ALL THE FIELD... ";
		echo '<a href="sing.php">try again</a>';
	}
?>