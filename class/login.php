<?php

session_start();

require_once 'dbconnect.php';



if (isset($_SESSION['userSession'])!="") {

 header("Location: home.php");

 exit;

}



if (isset($_POST)) {

 

 $email = strip_tags($_POST['email']);

 $password = strip_tags($_POST['password']);

 

 $email = $DBcon->real_escape_string($email);

 $password = $DBcon->real_escape_string($password);

 
 

 $query = $DBcon->query("SELECT firstname, email, password, role FROM users WHERE email='$email'");

 $row = $query->fetch_array(MYSQLI_ASSOC);

 //$row = mysqli_fetch_array($query,MYSQLI_NUM);

 

 $count = $query->num_rows; // if email/password are correct returns must be 1 row

 

 if (password_verify($password, $row['password']) && $count==1 && $row['role']== 'User') {

	  $_SESSION['userSession'] = $row['firstname'];
$_SESSION['email'] = $row['email'];
	  
	  unset($_SESSION['login_error']);

	  header("Location: ../profile.php");

 } elseif (password_verify($password, $row['password']) && $count==1 && $row['role']== 'Admin') {

	  $_SESSION['userSession'] = $row['firstname'];
$_SESSION['email'] = $row['email'];
	  
	  unset($_SESSION['login_error']);

	  header("Location: ../admin/index.html");

 }
 else {

  	$_SESSION['login_error'] = "login failed. Try again....";

  	header("Location: ../join.php");

 }

 $DBcon->close();

}

?>