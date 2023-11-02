<!DOCTYPE html>
<html>
<head>
    <title>Two Numbers Calculator</title>
</head>
<body>
    <h2>Two Numbers Calculator</h2>
    <form method="post" action="">
        Enter the first number: <input type="text" name="num1"><br> <br>
        Enter the second number: <input type="text" name="num2"><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (is_numeric($num1) && is_numeric($num2)) {
            
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            
            if ($num2 != 0) {
                $quotient = $num1 / $num2;
            } else {
                $quotient = "Undefined (division by zero)";
            }

            echo "Sum: $sum<br>";
            echo "Difference: $difference<br>";
            echo "Product: $product<br>";
            echo "Quotient: $quotient<br>";
        } else {
            echo "Please enter valid numeric values.";
        }
    }
    ?>
</body>
</html>
