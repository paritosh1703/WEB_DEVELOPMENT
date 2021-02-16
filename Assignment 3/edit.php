<?php
include('config.php');
?>


<?php
$id=$_GET['id'];
$sql="SELECT * FROM `users` WHERE `id` =$id";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$username=$row['username'];
$email=$row['email'];
$gender=$row['gender'];
$city=$row['city'];
?>

<?php
if(isset($_POST['update'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $city=$_POST['city'];  

   $sql="Update `users` SET username='$username',email='$email',gender='$gender',city='$city' WHERE id='$id'";
   if(mysqli_query($conn,$sql)){
      echo "Updation Successful....";
      header("Location:changes.php");
   }
   else{
      echo "Updation failed";
   }




}
?>



<!DOCTYPE html>
<html>
<head>
	<title>HTML FORMS</title>
</head>
<body>
   <form method="post" action="edit.php?id=<?php echo "$id"?>">
   	Username<input type="text"  name="username" value=<?php echo "$username"?> required><br>
   	E-Mail<input type="email"  name="email" value=<?php echo "$email"?> required><br>
   	Gender:
   	Male<input type="radio" name="gender" value="Male" <?php if($gender=="Male"){echo "checked";} ?>>
   	Female<input type="radio" name="gender" value="Female" <?php if($gender=="Female"){echo "checked";} ?>>
   	Others<input type="radio" name="gender" value="Others" <?php if($gender=="Others"){echo "checked";} ?>><br>
   	City<select name="city">
   		<option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";} ?>>Dehradun</option>
   		<option value="Delhi"  <?php if($city=="Delhi"){echo "selected";} ?>>Delhi</option>
   		<option value="Jaipur"  <?php if($city=="Jaipur"){echo "selected";} ?>>Jaipur</option>
   		<option value="Chandigarh"  <?php if($city=="Chandigarh"){echo "selected";} ?>>Chandigarh</option>
   		<option value="Banglore"  <?php if($city=="Banglore"){echo "selected";} ?>>Banglore</option>

   	</select><br>
   	<input type="submit" name="update" value="Update">
   	   </form>
</body>
</html>