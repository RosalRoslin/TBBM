<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		$sql = $conn->prepare("INSERT INTO users (ID,FirstName,LastName,email,password,role,DOB,Gender,ContactNumber,Height,Weight,Membership,userid,profiile,created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");  
		$FirstName=$_POST['FirstName'];
		$LastName=$_POST['LastName'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$role=$_POST['role'];
		$DOB=$_POST['DOB'];
		$Gender=$_POST['Gender'];
		$ContactNumber=$_POST['ContactNumber'];
		$Height=$_POST['Height'];
		$Weight=$_POST['Weight'];		
		$Membership=$_POST['Membership'];
		$userid = $_POST['userid'];
		$profiile= $_POST['profiile'];
		$created= $_POST['created'];	
		$sql->bind_param("sss", $FirstName,$LastName,$email,$password,$role,$DOB,$Gender,$ContactNumber,$Height,$Weight,$Membership,$userid,$profiile,$created); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
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
			<th colspan="2" class="table-header">Add New User</th>
		</tr>
	</thead>
	<tbody>
<tr class="table-row">
			<td><label>FirstName</label></td>
			<td><input type="text" name="FirstName" class="txtField"></td>
		</tr>
<tr class="table-row">
			<td><label>LastName</label></td>
			<td><input type="text" name="LastName" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>email</label></td>
			<td><input type="text" name="email" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>password</label></td>
			<td><input type="text" name="password" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>role</label></td>
			<td><input type="text" name="role" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>DOB</label></td>
			<td><input type="text" name="DOB" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Gender</label></td>
			<td><input type="text" name="Gender" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>ContactNumber</label></td>
			<td><input type="text" name="ContactNumber" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>Height</label></td>
			<td><input type="text" name="Height" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>Weight</label></td>
			<td><input type="text" name="Weight" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Membership</label></td>
			<td><input type="text" name="Membership" class="txtField" ></td>
		</tr>
		<tr class="table-row">
			<td><label>userid</label></td>
			<td><input type="text" name="userid" class="txtField"></td>
		</tr>
		
		<tr class="table-row">
			<td><label>profiile</label></td>
			<td><input type="text" name="profiile" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>created</label></td>
			<td><input type="text" name="created" class="txtField" ></td>
		</tr>
	
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>