<?php
session_start();

if (!isset($_SESSION['userSession'])) {
 header("Location: ../index.php");
} else if (isset($_SESSION['userSession'])!="") {
 header("Location: ../profile.php");
}

if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 unset($_SESSION['email']);
 header("Location: ../index.php");
}
?>