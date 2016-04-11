<?php
session_start();
include("dbconnection.php");
include("userdb.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="page.css">
</head>
<body>
<div id="header"></div>
<div class="bind">
<div id="homeright"><div id="idcard">
		<div id="profylpic"><?php echo "<img src={$_SESSION['image']} width='120px' height='150px'>";?>"</div>
		<div id="profylinfo"><ul>
		<?php
		echo 	"<li>name:{$_SESSION['username']}</li>";
		echo	"<li>from:nepal</li>";
		echo	"<li>gender:{$_SESSION['sex']}</li>";
		echo	"<li>.....:</li>";
		?>
</div></div></div></div>
			<div id="bigbox">
<?php
foreach($post as $row)
{
echo '<table>';
echo'<tr>';
echo $row;
//echo $ga;
//include("commentview.php");
echo'</tr>';
echo '</table>';
}
?>
</div>
</body>
</html>