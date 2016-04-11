<?php
session_start();
include("dbconnection.php");
//to fetch information from the database..
include("userdb.php");
?>
<html>
<head>
</head>
<link rel="stylesheet" href="page.css" type="text/css">
<body>
<div id="header"></div>
<div class="bind">
<div id="homeright"><div id="idcard">
		<div id="profylpic"><?php echo "<img src={$_SESSION['image']} width='120px' height='150px'>";?>"</div>
		<div id="profylinfo"><ul>
		<?php
		echo "<li>name:{$_SESSION['username']}</li>";
		echo	"<li>from:nepal</li>";
		echo	"<li>gender:{$_SESSION['sex']}</li>";
		echo	"<li>.....:</li>";
		?>
</div></div></div></div>
			
			
<div id="bigbox">
<?php
foreach($rows as $row)
{
echo "<div id=box><image src={$row} width='200px'></div>";
}
?>
</div>
</body>
</html>