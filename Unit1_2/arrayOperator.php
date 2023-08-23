<?php

$a = array("INT215" => "Front End Web", "INT220" => "PHP", "INT221" => "Laravel");
$b = array("INT222" => "Node js", "CSE316" => "Operating System");

$c = ($a + $b);
var_dump($c);           // print c
// echo $c;        // warning : array to string conversion
// echo "Result:". $a == $b;        // warning : array to string conversion

// use var_dump()       : to dump information about a variable/array/object [including its data type, value, and structure]

echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <> $b);
echo "<br>";
var_dump($a !== $b);
echo "<br>";

$d = 4325;
var_dump($d);

echo "<br>";

$e = "Hello";
var_dump($e);
?>

