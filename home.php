<?php 
session_start();
include("dbconnection.php");
$username=$_SESSION['username'];
if(empty($_SESSION['username']))
header("Location:index.php");
//include("post.php");
?>
<head><title>home</title></head>
<link rel="stylesheet" type="text/css" href="page.css"/>
<body>

<div id="header"></div>
<div id="menubar">
<div id="boton">
<ul>
	<a href="home.php"><li>home</li></a>
	<a href='profile.php?name=<?php echo $username;?>'><li>profile</li></a>
	<a href="imgupload.php"><li>upload</li></a>
	<a href="logout.php"><li>logout</li></a>
</ul>
</div>
<div  height='20px'>
				<form action="search.php" method='get'>
				<input class="inputText" type="text" name="q" placeholder="Find people to add..." />
				<button class="inputButton" type="submit">Search</button>
				</form></div>
		
</div>
	<div class="bind">
	<div id="homeleft"></div> 
	<div id="home">
	<div id="status">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	
		<textarea id="input_text" name="text" cols='60' rows='3' placeholder="What's going on, <?php
			echo $_SESSION['username'];
			?>?" ></textarea>
		<br>
		
		<input type='file' name='myfile' id='input_photo' style='display: none' onclick="document.getElementById('input_text').placeholder = 'Say something about this photo...';" />
		
		<a href="#" onClick="document.getElementById('input_photo').style.display = 'inline'; this.style.display='none'; return false; ">Add a photo</a>
		<input name="post" type="submit" value="POST">
	</form>
	
	</div>
	
	<div id="photo">
	</div>
	
	<div id="post">
	<?php
		if( !include('post.php') ) echo 'ERROR';
	?></div></div>
	
	<div id="homeright"><div id="idcard">
		<div id="profylpic"><?php echo "<img src={$_SESSION['image']} width='120px' height='150px'>";?></div>
		<div id="profylinfo"><ul>
		<?php	
		echo "<li>name:{$_SESSION['username']}</li>";
		echo "<li>from:nepal</li>";
		echo "<li>gender:{$_SESSION['sex']}</li>";
		echo "<li>.....:</li>";
		?></div></div></div></div>

</body>
</html>
