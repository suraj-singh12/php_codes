<?php
function addFive($num) {
    $num += 5;
}

const myConst = 534;
define("myNewConst", "newValue", false);        // case insensitive
// define("newConst", "newValue", true);           // case sensitive        [by default]

$num = 100;
addFive($num);
// print 5
echo $num;

?>