<?php

session_start();

if (isset($_SESSION['firstname'])!="") {

 header("Location: ../index.php");

}

require_once 'dbconnect.php';

if(isset($_POST)) {

 $firstname = strip_tags($_POST['firstname']);

 $email = strip_tags($_POST['email']);

 $website = strip_tags($_POST['website']);

 $message = strip_tags($_POST['message']);

 

 $firstname = $DBcon->real_escape_string($firstname);

 $website = $DBcon->real_escape_string($website);

 $email = $DBcon->real_escape_string($email);

 $message = $DBcon->real_escape_string($message);


 $check_email = $DBcon->query("SELECT email FROM contact WHERE email='$email'");

 $count=$check_email->num_rows;

 

 	if ($count==0 || $count!==0) {

		$query = "INSERT INTO contact(firstname,email, website,message) VALUES('$firstname','$email','$website','$message')";

		if ($DBcon->query($query)) { 

		  	require_once'../gmail.php';
		  	$_SESSION['contact_success'] = "Ur Comment Send Succesfully!";

			//echo("Comment Send Successfully!!!!!!!!!");
		  	header("location: ../index.php");

		 } else {

		  $_SESSION['contact_error'] = "Sry Ur Comment Not Send!..";

		  	header("location: ../index.php");

		 }	 

		 

	} else {

		 header("location: ../join.php");

	}

	$DBcon->close();

}

?>