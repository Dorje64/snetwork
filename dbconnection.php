<?php
$connect = mysql_connect("localhost","root","") or die("not connected".mysql_error());

$db_select=mysql_select_db("dorje",$connect) or die("databse conn failed...".mysql_error());

?>