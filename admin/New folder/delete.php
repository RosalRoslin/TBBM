<?php 
	require_once("db.php");
	
	$sql = $conn->prepare("DELETE  FROM users WHERE ID=?");  
	$sql->bind_param("i", $_GET["ID"]); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:index.php');		
?>