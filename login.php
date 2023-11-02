<?php

if(isset($_POST['btn'])){
    include "conn.php";

    session_start();
            
            if (isset($_SESSION["s_user_name"])) {
                header("location: dashboard.php"); 
            }

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login_sql="SELECT * FROM `user` WHERE user_email='$email' and user_pass='$password'";

    $result=mysqli_query($con,$login_sql);
    $final_result=mysqli_fetch_assoc($result);
    if($final_result){
        session_start();
        $_SESSION["s_user_name"]= $final_result['user_name'];
        header('Location: dashboard.php');
    }else{
        $message = "user or pass error";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        text-align: center;
        }

        h1 {
            color: #444;
        }

        form {
            width: 350px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        span {
            color: red;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            width: 30%;
            
        }

        .blue{
            background-color: #008CBA !important;
        }

        .btn a {
            color: white;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #3e8e41;
        }
    </style>

</head>
<body>
	<h1 align = "center" >User Login Form</h1>
	<form action="" method="post">
        
		<label for="email">Email Address: </label>
		<input type="email" name="email" required> 
		<label for="password">Password: </label>
		<input type="password" id="pass" name="password" required> 
		
        <?php if(isset($message)){ ?>
            <span style="color:red; text-transform: uppercase;"> <?php echo $message; ?> </span> <br> <br>
        <?php  } ?>

		<input class="btn" type="submit" name="btn" value="login">
        <p>Not Registered?</p>
	    <button class="btn blue" ><a href="registration.php"> Register </a></button>
        <p style="color: red;" >***NOTE: IMPORT SQL FILE FIRST.***</p>
	</form>
	
	
</body>
</html>