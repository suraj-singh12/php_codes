
<?php

$one = "hello";
$two = "world";

echo "{$one}, {$two}";
echo "<br>";
print_r("{$one}, {$two}");
echo "<br>";
print("{$one}, {$two}");
echo "<br>";
var_dump("{$one}, {$two}");
echo "<br>";


// single quotes does not display the variable values, it displays the text as is (plain)
echo '{$one}, {$two}';
echo '<br>';
print('{$one}, {$two}');
echo "<br>";
print_r('{$one}, {$two}');
echo "<br>";
print('{$a$b}');
echo "<br>";
var_dump('{$one}, {$two}');

define("SALUTE", "HATS OFF");
echo $SALUTE;                   // warning undefined variable $SALUTE
echo SALUTE;                    // HATS OFF

define("print", 1765);
// echo "print ", print;        // syntax error, (print is a function)
// echo "print ". print;           // syntax error, (print is a function)

echo "<br>";
$age = 29;
echo "What is her age?\n She is $age years old!!";


$x = "this";
$y = "is";
$z = "also";
$x = $y = $z;
echo "<br>";
echo $x .$y .$z;


echo "<br>";
define("command", "attention");
// define("salute", command);
define('salute', command);

echo command;
echo salute;

echo "<br>";
define("greet", "namaste");
${greet} = "hello";
echo greet;
echo ${greet};

echo "<br>";
${"variable"} = "value";
echo ${"variable"};

echo "<br>";


$user = array("Om", "Jai", "Jagdeesh", "", "Hare");
for($x = 0; $x < count($user); ++$x) {
    if($user[$x] == "") continue;
    printf($user[$x]);
    // printf("%s", $user[$x]);
}


echo "<br>";
$one = "oneee";
$two = "twooo";

print("result: $one == $two <br>");
print("result: ${one} == ${two} <br>");
print("${one}, ${two}");
echo "<br>";
print('${one}, ${two}');
echo "<br>";

// anything in single quotes is treated as plain text
echo '$one = $one + $two';
echo "<br>";
// anything in double quotes is treated as variable
echo "$one = $one + $two";
echo "<br>";
echo "${one} = ${one} + ${two}";



echo "<br>";
$x = 4;
$y = "2";
//  number  * number in string = number
// number  * number = number
// number (in string) * number (in string) = number
// Note: "1" is same as 1 and vice versa
echo $x * $y;


echo "<br>";
$a = 2;
print '$a';         // simple plain text
echo "<br>";

$b = 2;
switch(print '$b')
{
case 1:
    print "someone";
case 2:
    print "save";
    break;
default:
    print "me";
}

echo "<br>";

$b = 3;
print ($b != $b++);
echo "<br>";
print $b;
echo "<br>";
print(--$b <> 1);

echo "<br>";
if (print 0)                    
 print "hi" ;
else
 print "how are u";


 echo "<br>";
$array = array(1 => "hello", true => "world", 2=> "haha", "1" => "hihi");
var_dump($array);


?>