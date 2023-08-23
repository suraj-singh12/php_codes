<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function passByReference(&$value) {
            $value = 37863724573;
        }
        function passByValue($value) {
            $value = 334245783783;
        }
        $num = 1;
        passByReference($num);  
        echo $num . " <br>";
        $num = 1;
        passByValue($num);
        echo $num ." <br>";
    ?>
</body>
</html>