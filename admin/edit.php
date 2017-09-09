<?php
	require_once("../class/dbconnect.php");
	if (isset($_POST['submit'])) {		
		$sql = $DBcon->prepare("UPDATE users SET ID=?, FirstName=?,LastName=?,email=?,role=?,DOB=?,Gender=?,ContactNumber=?,Height=?,Weight=?,Membership=?,userid=?,profile=?,blood=?,created=? WHERE ID=?");
		$ID=$_POST['ID'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$email= $_POST['email'];
		$role=$_POST['role'];
		$DOB=$_POST['DOB'];
		$Gender=$_POST['Gender'];
		$ContactNumber=$_POST['ContactNumber'];
		$Height=$_POST['Height'];
		$Weight=$_POST['Weight'];		
		$Membership=$_POST['Membership'];
		$userid = $_POST['userid'];
		$profile= $_POST['profile'];
		$blood= $_POST['blood'];
		$created= $_POST['created'];		
		$sql->bind_param("sssssssssssssssi",$ID, $FirstName, $LastName, $email, $role, $DOB, $Gender,$ContactNumber,$Height,$Weight,$Membership, $userid, $profile, $blood, $created, $_GET["ID"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $DBcon->prepare("SELECT * FROM users WHERE ID=?");
	$sql->bind_param("i",$_GET["ID"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$DBcon->close();
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>Users edit </title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php" >Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Users Edit</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>ID</label></td>
			<td><input type="text" name="ID" class="txtField" value="<?php echo $row["ID"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>FirstName</label></td>
			<td><input type="text" name="FirstName" class="txtField" value="<?php echo $row["FirstName"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>LastName</label></td>
			<td><input type="text" name="LastName" class="txtField" value="<?php echo $row["LastName"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><input type="text" name="email" class="txtField" value="<?php echo $row["email"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>role</label></td>
			<td><input type="text" name="role" class="txtField" value="<?php echo $row["role"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>DOB</label></td>
			<td><input type="text" name="DOB" class="txtField" value="<?php echo $row["DOB"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Gender</label></td>
			<td><input type="text" name="Gender" class="txtField" value="<?php echo $row["Gender"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>ContactNumber</label></td>
			<td><input type="text" name="ContactNumber" class="txtField" value="<?php echo $row["ContactNumber"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Height</label></td>
			<td><input type="text" name="Height" class="txtField" value="<?php echo $row["Height"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Weight</label></td>
			<td><input type="text" name="Weight" class="txtField" value="<?php echo $row["Weight"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Membership</label></td>
			<td><input type="text" name="Membership" class="txtField" value="<?php echo $row["Membership"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>userid</label></td>
			<td><input type="text" name="userid" class="txtField" value="<?php echo $row["userid"]?>"></td>
		</tr>
		
		<tr class="table-row">
			<td><label>profiile</label></td>
			<td><input type="text" name="profile" class="txtField" value="<?php echo $row["profile"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Blood</label></td>
			<td><input type="text" name="blood" class="txtField" value="<?php echo $row["blood"]?>"></td>
		</tr>
		
		<tr class="table-row">
			<td><label>created</label></td>
			<td><input type="text" name="created" class="txtField" value="<?php echo $row["created"]?>"></td>
		</tr>
		
		<tr class="table-row">
			<td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>	
</table>
</form>
</body>
</html>