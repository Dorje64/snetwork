<?php
session_start();
?>
<html>

	<head><title>s_network</title></head>
	<link rel="stylesheet" type="text/css" href="page.css">
<body>
	<div id="header"><font size="5" align="center"></font></div><div id="menubar"></div>
	<div class="bind">
		<div id="right"><img src="mugu.jpg" width="660px"; height ="520px";></div> 
		<div id="left"><form method="post" action="login.php"> 
				<font size="5">username: </font>
				<input type="text" name="user" size="20">
				<br><br>
				<font size="5">password: </font>
			<input type="password" name="pass" size="20">
			<br><br>
			<input type ="submit" name ="submit" value="Log in">
			</div>
			<div id="left" style="margin-top:30px">
			for new user<br>
			<div id="click"><a href="sing.php">sign up</a></div>
</div>
</div>
<hr><br>
<center>&copy;dhojee</center>
</body>
</html>