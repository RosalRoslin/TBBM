<?php 
	require_once("../class/dbconnect.php");
	
	$sql = $DBcon->prepare("DELETE  FROM users WHERE ID=?");  
	$sql->bind_param("i", $_GET["ID"]); 
	$sql->execute();
	$sql->close(); 
	$DBcon->close();
	header('location:tables.php');		
?>
