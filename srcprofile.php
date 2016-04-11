<?php
session_start();
include("dbconnection.php");
$name=$_GET['name'];
$sql="SELECT * FROM snetwork WHERE username='{$name}'";
$returned_resource=mysql_query($sql);

$rows=mysql_fetch_assoc($returned_resource);

?>
<html>
<head><title>profile</title></head>
<link rel="stylesheet" href="page.css" type="text/css">
<body>
<div id="header"></div>
<div class="bind">
<div id="homeright"><div id="idcard">
		<div id="profylpic"><?php echo "<img src={$rows['image']} width='120px' height='150px'>";?>"</div>
		<div id="profylinfo"><ul>
		<?php
		echo "<li>name:{$rows['username']}</li>";
		echo	"<li>from:nepal</li>";
		echo	"<li>gender:{$rows['sex']}</li>";
		echo	"<li>.....:</li>";
		?>
			</div></div></div></div>
			<div id="bigbox">
			<ul>
			<li><div id="box"><a href="photos.php?name=$rows['username']"> photo </a></li>
			<li><div id="box"><a href="status.php"> posts </a></li>
			<li><div id="box"></li>
			</ul>
			</div></div>
</body>
</html>
