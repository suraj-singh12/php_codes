
<!-- in php functions have GLOBAL SCOPE even if defined in local scope -->
<?php
$a = 34;
echo $a."<br>";        
define("y","32");
{
    $a = 7;
    function a($a = 12) {
        $a = 25;
        echo $a ."<br>";
        echo y ."<br>";
    }
    echo $a."<br>";     // accessing a variable
    echo y ."<br>";     // accessing a constant
}
a();
echo $a ."<br>";
echo y ."<br>";


{
    // accessing a global variable
    global $a;
    echo $a;
}

?>
