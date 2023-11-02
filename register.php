<?php
  include "conn.php";

  if(isset($_POST['savebtn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];

	$check_email = "SELECT * FROM `users` WHERE `email`='$email'";
	$result = mysqli_query($con, $check_email);
	if (mysqli_num_rows($result) > 0) {
		$email_err = "This email address is already registered.";
	} else {
		$insert_user = "INSERT INTO `users`(`name`, `email`) VALUES ('$username', '$email')";
		if (mysqli_query($con, $insert_user)) {
			$message = "Registration Successful!!";
		} else {
			echo "Error registering user.";
		}
	}
  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
<h1 align = "center" >User Registration Form</h1>
<form action="" method="post">
	<label for="username">Username: </label> 
		<input type="text" name="username" required> <br> <br>
	
	<label for="email">Email Address: </label>	
		<input type="email" name="email" required> <br> <br>
		<?php if(isset($email_err)){ ?>
			<h1 style="background:red;color:black">  <?php echo $email_err; ?>  </h1> 
		<?php  } ?>
		
	<input type="submit" name="savebtn" value="Register"> 
    <?php if(isset($message)){ ?>
		<h1 style="background:green;color:white">  <?php echo $message; ?>  </h1> 
	<?php  } ?>
	
</form>
</body>
</html>
