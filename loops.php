<?php

echo "while Loop: <br>";
$i = 1;
while($i <= 3) {
    echo "The number is " .$i . "<br>";
    $i++;
}


echo "do while Loop: <br>";
$i = 1;
do {
    echo "The number is " . $i . "<br>";
    $i++;
}while($i <= 3);


echo "for Loop: <br>";
for($i = 1; $i <= 3; $i++) {
    echo "The number is $i" . "<br>";
}


echo "for each Loop: <br>";
$colors = array("Red", "Green", "Blue");
foreach($colors as $value) {
    echo $value . "<br>";
};


echo "for each Loop: <br>";
$colors = array("Red", "Green", "Blue");
foreach($colors as $index=>$value) {
    echo $index . "\n" . $value . "<br>";
};


?>