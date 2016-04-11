<?php
session_start();
?>
<html>
<head><title>singup</title></head>
<link type="text/css" rel="stylesheet" href="form.css"/>
<body>
<div id="form">
<font size=20>your information</font>
<form method="post" action="register.php"><br><br><br>
<table>
	<tr>
	<td>first name:</td>
	<td><input type="text" name="fname" size="20" style="margin-left:22px"></td>
	</tr>
</table>
<table>
	<tr>
	<td>last name:</td>
	<td><input type="text" name="lname" size="20" style="margin-left:24px"></td>
	</tr>
</table>
<table>
	<tr>
	<td>gender:</td>
	<td><input type="radio" name="sex" value="male" style="margin-left:37px">Male</td>
	<td><input type="radio" name="sex" value="female" style="margin-left:20px">Female</td>
	</tr>
</table>
<table>
	<tr>
	<td>e-mail:</td>
	<td><input type="text" name="email" size="20" style="margin-left:41px"></td>
	</tr>
</table>
<table>
	<tr>
	<td>username:</td>
	<td><input type="text" name="username" size="20" style="margin-left:21px"></td>
	</tr>
</table>
<table>
	<tr>
	<td>password:</td>
	<td><input type="password" name="pass1" size="20" style="margin-left:20px"></td>
	</tr>
</table>
<table>
	<tr>
	<td>re-password:</td>
	<td><input type="password" name="pass2" size="20" style="margin-left:18pxpx"></td>
	</tr>
</table>
<input type="submit"  name="submit" value="submit" style=" margin:30px 380px 50px ">
</form>
</div>
</body>
</html>