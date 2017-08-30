<?php

if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}

require_once 'dbconnect.php';

if(isset($_POST['role_update'])) {
	$firstname = strip_tags($_POST['firstname']);
	$lastname = strip_tags($_POST['lastname']);
	$email = strip_tags($_POST['email']);
	
	$firstname = $DBcon->real_escape_string($firstname);
	$lastname = $DBcon->real_escape_string($lastname);
	$email = $DBcon->real_escape_string($email);
	
	$query = "UPDATE users SET firstname ='$firstname', lastname='$lastname' WHERE email='$email'";
	if ($DBcon->query($query)) { 
		header("Location: ../profile.php");
	}
}
$DBcon->close();
?>