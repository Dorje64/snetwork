<?php
session_start();
include("dbconnection.php");
if(!empty($_POST['user'])&&!empty($_POST['pass'])){
$username=@$_POST['user'];
$password=@$_POST['pass'];
			$sql_select = "SELECT * FROM snetwork WHERE username='$username'";
			$returned_resource = mysql_query( $sql_select);
			$number_of_rows = mysql_num_rows( $returned_resource);
		if( $number_of_rows != 0 ){
			$_SESSION=mysql_fetch_assoc( $returned_resource);
			if($_SESSION['username']==$username&& $_SESSION['password']==$password)
			{
			echo "<br>";
			print_r($_SESSION);
			header('Location:home.php');
			}
			else
			{ 
				die("<center><h1>username and password doesnot match</h1></center>".mysql_error());
			}
			}
		
		}
		else{
			echo "<center><h1>username and password are empty</h1></center>";
			header("Location:index.php");
			}
?>
