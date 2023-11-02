<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        text-align: center;
        }
        .container {
            width: 350px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
        color: #333;
        text-align: center;
        margin-top: 50px;
        }

        button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        border-radius: 5px;
        }
        .red{
            background-color: red;
        }

        button a {
        color: white;
        text-decoration: none;
        }

        button:hover {
        background-color: #3e8e41;
        }

        .red:hover {
        background-color: #c0392b;
        }

        .blue{
            background-color: #008CBA !important;
        }

        .logout-button {
        margin-top: 50px;
        text-align: center;
        }

        .logout-button a {
        color: #333;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Solve to the Problems</h1>
        
        <button> 
            <a href="login.php">Problem 1</a>
        </button> 
        <button> 
            <a href="sumeven.php">Problem 2</a>
        </button> <br>

        <button class = "blue">
            <a href="countvowel.php">Problem 3</a>
        </button>
        <button class = "blue">
            <a href="register.php">Problem 4</a> 
        </button> <br>

        <button> 
            <a href="twonumbers.php">Problem 5</a>
        </button> 
        <button> 
            <a href="arraycalc.php">Problem 6</a>
        </button> 
        <br> 
        
    </div>
    
</body>
</html>



