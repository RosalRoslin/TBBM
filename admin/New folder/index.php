<?php 
require_once("dbconnect.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);	
$conn->close();		
?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Users</title>
</head>
<body>
	<div class="button_link"><a href="add.php">Add New</a></div>
	<table class="tbl-qa">	
		<thead>
			 <tr>
				<th class="table-header" width="20%">ID </th>
				<th class="table-header" width="20%"> FirstName </th>
				<th class="table-header" width="20%"> LastName </th>
				<th class="table-header" width="20%"> Email </th>
				<th class="table-header" width="20%"> password </th>
				<th class="table-header" width="20%"> role </th>
				<th class="table-header" width="20%"> DOB </th>
				<th class="table-header" width="20%"> Gender </th>
				<th class="table-header" width="20%"> ContactNumber </th>
				<th class="table-header" width="20%">Height </th>
				<th class="table-header" width="20%"> Weight </th>
				<th class="table-header" width="20%"> Membership</th>
				<th class="table-header" width="20%"> userid</th>
				<th class="table-header" width="20%"> profiile </th>
				<th class="table-header" width="20%"> created </th>
				<th class="table-header" width="20%" colspan="2">Action</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" ID="row-<?php echo $row["ID"]; ?>"> 
<td class="table-row"><?php echo $row["ID"]; ?></td>				
<td class="table-row"><?php echo $row["FirstName"]; ?></td>
				<td class="table-row"><?php echo $row["LastName"]; ?></td>
				<td class="table-row"><?php echo $row["email"]; ?></td>
				<td class="table-row"><?php echo $row["password"]; ?></td>
				<td class="table-row"><?php echo $row["role"]; ?></td>
				<td class="table-row"><?php echo $row["DOB"]; ?></td>
				<td class="table-row"><?php echo $row["Gender"]; ?></td>
				<td class="table-row"><?php echo $row["ContactNumber"]; ?></td>
				<td class="table-row"><?php echo $row["Height"]; ?></td>
				<td class="table-row"><?php echo $row["Weight"]; ?></td>
				<td class="table-row"><?php echo $row["Membership"]; ?></td>
				<td class="table-row"><?php echo $row["userid"]; ?></td>
				<td class="table-row"><?php echo $row["profiile"]; ?></td>
				<td class="table-row"><?php echo $row["created"]; ?></td>
				
				
<!-- action -->
				<td class="table-row" colspan="2"><a href="edit.php?ID=<?php echo $row["ID"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="delete.php?ID=<?php echo $row["ID"]; ?>" class="link"><img name="delete" ID="delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" src="icon/delete.png"/></a></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>