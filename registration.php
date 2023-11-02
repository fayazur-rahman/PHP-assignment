<?php  
  include "conn.php";
  session_start();  
  if (isset($_SESSION["s_user_name"])) {
	 header("location: dashboard.php");
	}

  if(isset($_POST['savebtn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashed_password = md5($password);


	$check_email = "SELECT * FROM `user` WHERE `user_email`='$email'";
	$result = mysqli_query($con, $check_email);
	if (mysqli_num_rows($result) > 0) {
		$email_err = "This email address is already registered.";
	} else {
		$insert_user = "INSERT INTO `user`(`user_name`, `user_email`, `user_pass`) VALUES ('$username', '$email', '$hashed_password')";
		if (mysqli_query($con, $insert_user)) {
			$message = "Registration Successful!!";
		} else {
			echo "Error registering user.";
		}
	}
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
		background-color: #f2f2f2;
		font-family: Arial, sans-serif;
		}

		h1 {
		font-size: 36px;
		text-align: center;
		margin-top: 50px;
		}

		form {
		max-width: 500px;
		margin: 50px auto;
		background-color: #ffffff;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.3);
		}

		label {
		font-size: 18px;
		display: block;
		margin-bottom: 10px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: 1px solid #ccc;
		box-sizing: border-box;
		font-size: 16px;
		}

		input[type="submit"] {
		background-color: #4CAF50;
		color: white;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 18px;
		}

		button {
		background-color: #008CBA;
		color: white;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 18px;
		}

		button a {
		color: white;
		text-decoration: none;
		}

		.error-message {
		background-color: red;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin-bottom: 20px;
		}

		.success-message {
		background-color: green;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin-bottom: 20px;
		}

		span {
		color: red;
		font-size: 14px;
		margin-top: 5px;
		display: block;
		}

	</style>
</head>
<body>
<h1 align = "center" >User Registration Form</h1>
<form action="" method="post" onsubmit="return validate()">
	<label for="username">Username: </label> 
		<input type="text" name="username" required> <br> <br>
	
	<label for="email">Email Address: </label>	
		<input type="email" name="email" required> <br> <br>
		<?php if(isset($email_err)){ ?>
			<h1 style="background:red;color:black">  <?php echo $email_err; ?>  </h1> 
		<?php  } ?>

	<label for="password">Password: </label required> 
		<input type="password" id="pass" name="password" required> <br> <br>
		<span id="f4"></span> <br>
		
	<input type="submit" name="savebtn" value="Register"> 
	<p>Already Registered?</p>
	<button><a href="index.php"> Login </a></button>
	<?php if(isset($message)){ ?>
		<h1 style="background:green;color:white">  <?php echo $message; ?>  </h1> 
	<?php  } ?>
</form>
</body>
</html>

<script>
     function validate() {
            let data = document.getElementById("pass").value;
            const alpha = new RegExp('(?=.*[a-zA-z])');
            const num = new RegExp('(?=.*[0-9])');
            const spl = new RegExp('(?=.*[!@#\$%\^&\*])');
            const eight = new RegExp('(?=.{8,})');
            if (eight.test(data) && alpha.test(data) && num.test(data) && spl.test(data)) {
                document.getElementById("f4").innerHTML = "";
                return true;
            }
            else {
                document.getElementById("f4").innerHTML = "***length should be 8, should have uppercase and lowercase letters and numbers and special characters";
                return false;
            }
        }
</script>
 

