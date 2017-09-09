<?php 
	require_once("../class/dbconnect.php");
	
	$sql = $DBcon->prepare("DELETE  FROM contact WHERE contactid=?");  
	$sql->bind_param("i", $_GET["contactid"]); 
	$sql->execute();
	$sql->close(); 
	$DBcon->close();
	header('location:contactdetails.php');		
?>