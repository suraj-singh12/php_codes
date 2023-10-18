
<?php
const x = 5200;
echo x ."\n";
// will lead to an error
// const x = 7;
// echo x ."\n";
{
    // $y => syntax for creating variables
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


?>
