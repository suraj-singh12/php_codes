<?php

$a = $b = $c = 1;
$c = "a";
echo $$c;
echo ${$c};

$a = array(3,3.5,3);
$b = [4, "4", 5];
print_r(array_combine($b, $a));
//   here $b array will be used as keys, and $a will be used as values
// output: Array ( [4] => 3.5 [5] => 3 )


// array_merge() can be executed in between two unidentical arrays also
//  array_combine() and array_merge() are providing the different set outputs where its index values are different in the assocaiation key value pairs.

echo "<br>";

const x = "Ajay";
for($i = 0; $i < strlen(x); ++$i) {
    echo (x);
}



echo '<br>';
$a = array("a" => "red", "b" => "orange", "c" => "red");
print_r(array_flip($a));


$a = [$a1, $a2];
$a1 = 435243;
$a2 = 4354;
print_r($a);

$a = ["hello", "how"];
print($a);
echo '<br>';

print_r($a);
echo '<br><br>';

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,2));

echo "<br>";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));
echo '<br>';
print_r(array_slice($a,1,2,true));

echo '<br><br>';
$myStr = "This is my string String";
$pattern = "/string/i";
echo preg_match($pattern, $myStr);      // 2
echo preg_replace($pattern, "kjdlk", $myStr);       // This is my kjdlk kjdlk
echo "<br><br>";


$arr = ["hello", "buddy", "how", "do"];
$pattern = "/h/";
print_r(preg_grep($pattern, $arr));         // Array ( [0] => hello [2] => how )
echo '<br>';
print_r(preg_grep($pattern, $arr, true));   // Array ( [1] => buddy [3] => do )



echo "<br><br>";
define("command", "attention");
define("salute", command);
// define('salute', command);

echo command;
echo salute;

?>