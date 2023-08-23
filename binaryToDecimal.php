<!DOCTYPE html>
<html>
<head>
    <title>Binary to Decimal Converter</title>
</head>
<body>
    <h2>Binary to Decimal Converter</h2>
    <form method="post" action="">
        Enter a binary number: <input type="text" name="binaryNumber" />
        <input type="submit" value="Convert" />
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binaryNumber = $_POST["binaryNumber"];
        
        if (!preg_match('/^[01]+$/', $binaryNumber)) {
            echo "<p>Please enter a valid binary number (consisting of 0s and 1s)!</p>";
        } else {
            $decimalNumber = bindec($binaryNumber);
            echo "<p>Decimal equivalent of binary number $binaryNumber is: ";
            var_dump($decimalNumber);
            echo "</p>";
        }
    }
    ?>
</body>
</html>
