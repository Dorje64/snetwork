<?php

	/* check if the email address is already registered */
	$sql_to_select = " SELECT * FROM snetwork WHERE email='$email' ";
	$returned_res = mysql_query( $sql_to_select );	
	
	// if any user with that email is found,
	// set $error_exists to true, and
	// create a error message to show to the user
	if( mysql_num_rows($returned_res) > 0 ){
		$error_exists = true;
		$message_displayed = 'That email address is already registered.<br />';
	}
	else{
		$error_exists = false;
		$message_displayed = null;
	}

	/* now check if the username is already taken */
	$sql_to_select = " SELECT * FROM snetwork WHERE username='$uname' ";
	$returned_res = mysql_query( $sql_to_select );
	
	if( mysql_num_rows($returned_res) > 0 ){
		$error_exists = true;
		$message_displayed = 'That username address is already taken.<br />';
	}
	else{
		$error_exists = false;
		$message_displayed = null;
	}
	
	if( $error_exists ){
		echo '<center><h3>';
		echo $message_displayed;
		echo '<a href="sing.php">Try again</a>';
		echo '</center></h3>';
		
		exit();
		}
?>