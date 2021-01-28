
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="post" action="form.php">
		Name<input type="text" name="Name" required><br>
		E-mail<input type="email" name="E-mail" required><br>
		Contact<input type="text" name="Contact" maxlength="10" minlength="10" required><br>
		City<input type="text" name="City" required><br>
		Course<input type="text" name="Course"><br>
		Interests<br>
		Sports<input type="checkbox" name="Interests[]" value="Sports">
		Reading<input type="checkbox" name="Interests[]"value="Reading">
		Painting<input type="checkbox" name="Interests[]" value="Painting">
		Programming<input type="checkbox" name="Interests[]" value="Programming">
		Music<input type="checkbox" name="Interests[]" value="Music"><br>
		<input type="submit" name="SUBMIT">

	</form>
	<?php
	if(isset($_POST["SUBMIT"])){
		$name=$_POST["Name"];
		$email=$_POST["E-mail"];
		$contact=$_POST["Contact"];
		$city=$_POST["City"];
		$course=$_POST["Course"];
        $interest=$_POST["Interests"];
        	 }			
else
 echo "<br>No Input";
?>
<table border=solid style="border-collapse: collapse;">
  <tr>
  	<th>Name</th>
  	<th>E-mail</th>
  	<th>Contact</th>
  	<th>City</th>
  	<th>Course</th>
  	<th>Interest</th>
  </tr>
  <tr>
  	<td><?php echo $name; ?></td>
  	<td><?php echo $email; ?></td>
  	<td><?php echo $contact; ?></td>
  	<td><?php echo $city; ?></td>
  	<td><?php echo $course; ?></td>
  	<td><?php echo implode(",", $interest); ?></td>
  </tr>
</table>

</body>
</html>