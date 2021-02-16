<!DOCTYPE html>
<html>
<head>
	<title>SUM OF TWO NUMBERS</title>
</head>
<body>
   <form method="post" action="sum.php">
   	First Number <input type="text" name="var1">
   	Second Number <input type="text" name="var2">
   	<input type="Submit" name="Submit">
   </form>
</body>
</html>

<?php
      if(isset($_POST['Submit'])){
      	if(empty($_POST['var1']) ||empty($_POST['var2'])){
      		echo "Please provide valid input";
      	}
      	$sum=$_POST['var1']+$_POST['var2'];
      	echo "The sum of two number is $sum";
      }
      else
      	echo "No Input Provided";
     ?>