<?php
include_once 'dbconnect.php';
if(isset($_POST) & !empty($_POST)){
	$email = $DBcon->real_escape_string($_POST['email']);
	$sql = "SELECT * FROM `users` WHERE email = '$email'";
	$check_email = $DBcon->query("SELECT email FROM users WHERE email='$email'");
 	$count=$check_email->num_rows;

	if($count == 1){
		echo "Send email to user with password";
	}else{
		echo "User name does not exist in database";
	}
}

?>