<?php

if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}

require_once 'dbconnect.php';

$email = $_SESSION['email'];
$query = $DBcon->query("SELECT * FROM users WHERE email='$email'");
$row = $query->fetch_array(MYSQLI_ASSOC);
return $row;
$DBcon->close();
?>