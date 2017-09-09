<?php
	if (isset($_POST['submit'])) {
		require_once("../class/dbconnect.php");
		$sql = $DBcon->prepare("INSERT INTO users (ID,FirstName,LastName,email,role,DOB,Gender,blood) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");  
		$ID=$_POST['ID'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$email= $_POST['email'];
		$role=$_POST['role'];
		$DOB=$_POST['DOB'];
		$Gender=$_POST['Gender'];
		$blood=$_POST['blood'];
		$sql->bind_param("ssssssss", $ID, $FirstName, $LastName, $email, $role, $DOB, $Gender, $blood); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$DBcon->close();
	} 
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
	
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Add New Employee</title> 	
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php"> Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Add New Users</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>ID</label></td>
			<td><input type="text" name="ID" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>FirstName</label></td>
			<td><input type="text" name="FirstName" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>LastName</label></td>
			<td><input type="text" name="LastName" class="txtField"></td>
		</tr>
		
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><input type="text" name="email" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Role</label></td>
			<td><input type="text" name="role" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>DOB</label></td>
			<td><input type="text" name="DOB" class="txtField"></td>
		</tr>
		
		<tr class="table-row">
			<td><label>Gender</label></td>
			<td><input type="text" name="Gender" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Blood</label></td>
			<td><input type="text" name="blood" class="txtField"></td>
		</tr>
		
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>