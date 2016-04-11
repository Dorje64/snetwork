<?php
session_start();
include("dbconnection.php");
@$s=$_GET['q'];
$sql = "SELECT * FROM snetwork WHERE username LIKE '$s%' OR firstname LIKE '$s%' ORDER BY username DESC LIMIT 0, 30";
//die($sql);

$resource=mysql_query($sql) or die("error: " .mysql_error());

$rows_num=  mysql_num_rows($resource);
if($rows_num==0)
{
echo "no match found";
}
else
{ 	
	echo '<div style="text-align:center width:250px">';
	while($row=mysql_fetch_assoc($resource))
	{
	
	echo '<table>';
	echo '<tr>';
	echo "<td> <img src={$row['image']} width='50px'/> </td>";
	echo "<td><a href='profile.php?name={$row['username']}'>{$row['username']}</a></td>";
	echo '</tr>';
	echo '</table>';
}
    echo'</div>';
}
?>