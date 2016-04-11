<?php
include("dbconnection.php");
$username=$_GET['name'];
$sql="SELECT * FROM posts WHERE username='$username'";
$returned_resource=mysql_query($sql);
$num_row=mysql_num_rows($returned_resource);
if($num_row==0)
{
	echo "<h1> are you a new user to this site?</h1>";
}
while($row = mysql_fetch_assoc($returned_resource))
	{ 
	
	if($row['photo']!='')
	{
		$rows[] = $row['photo'];
	}
	if($row['post']!='')
	{
		$post[]=$row['post'];
		$postd[]=$row['id'];
	}
	
	}
?>