<?php
session_start();
require_once("dbconnection.php");
$id=$_GET['id'];

// TO POST COMMENT
if(isset($_POST['comment']) && trim($_POST['comment']) != '')
{ 
	echo $id;
	$comment=mysql_real_escape_string(stripslashes(@$_POST['comment']));
	$sql="INSERT INTO comment1(username,id_post,comment) VALUES('{$_SESSION['username']}','{$id}','{$comment}')";
	mysql_query($sql) or die("error: " .mysql_error() );
	//echo $id ;
	//echo $comment;
	 header("Location:home.php");
}

?>