<!-- <!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?> 

</body>
</html> -->

<?php
$x = 7;
{
    $y = 10; echo $y ."\n";
    {
        $x = 25; echo $x ."\n";
    }
    while($y != 25) {
        $x = 14; echo $x ."\n";
        echo "I am inside the block\n";
        break;
    }
    $x = 7;
    echo $x ."\n"; echo $y;
}


