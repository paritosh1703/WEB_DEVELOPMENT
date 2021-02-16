<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fetching Data From Databse</title>
</head>
<body>
	<?php
	$sql="SELECT * FROM `users`";
	$result=mysqli_query($conn, $sql);
    if($result->num_rows> 0) { ?>
	<table border="1px solid">
		<tr>
			<th>Username</th>
			<th>E-mail</th>
			<th>Gender</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
		while($row=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $row['username']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['city']?></td>
			<td><a href="edit.php?id=<?php echo $row['id']?>">
				<input type="button"  value="Edit"></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">
				<input type="button"  value="Delete"></td>
		</tr>
	<?php }?>
	</table>
<?php
}
?>
</body>
</html>