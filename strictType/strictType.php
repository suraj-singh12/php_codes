<?php declare(strict_types =1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function add(int $a, int $b) {
            return $a + $b;
        }

        echo "5 + 7 = " . add(5, 7) ." <br> ";
        // echo "7.2 + .34 = " . add(7.2, .34) ." <br> ";       // fatal error
    ?>
</body>
</html>