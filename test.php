<?php

$person = ['name' => 'Ajay'];
echo $person['name'];


function increment($number) {
    // $number++;
    ++$number;
}
$number = 5;
increment($number);
echo $number;


function fun() {
    static $x = 0;
    echo $x;
    $x++;
}
fun();
fun();
fun();

$arr = ["name" => "Ajay", "age" => 20];

// remove one key from array arr
unset($arr["age"]);
array_diff($arr, ["age"]);

print_r($arr);


$a = true;
$b = false;


echo "$a" && "$b";      // 0/false is not displayed 
echo $a && $b;          // 0/false is not displayed

?>