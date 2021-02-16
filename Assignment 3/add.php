<?php
include('config.php');
?>

<?php
if(isset($_POST['submit']))
{
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	
	$sql="INSERT INTO `users`( `username`, `email`, `gender`, `city`) VALUES ('$username','$email','$gender','$city')";
	mysqli_query($conn,$sql);
}
else
{
	echo "Please provide input";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML FORMS</title>
</head>
<body>
   <form method="post" action="add.php">
   	Username<input type="text" name="username" required><br>
   	E-Mail<input type="email" name="email" required><br>
   	Gender:
   	Male<input type="radio" name="gender" value="Male">
   	Female<input type="radio" name="gender" value="Female">
   	Others<input type="radio" name="gender" value="Others"><br>
   	City<select name="city">
   		<option value="Dehradun">Dehradun</option>
   		<option value="Delhi">Delhi</option>
   		<option value="Jaipur">Jaipur</option>
   		<option value="Chandigarh">Chandigarh</option>
   		<option value="Banglore">Banglore</option>

   	</select><br>
   	<input type="submit" name="submit" value="Click Here to Submit">
   	   </form>
</body>
</html>