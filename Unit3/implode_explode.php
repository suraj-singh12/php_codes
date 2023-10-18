<?php
$a = ["Sanjay", "Sanjana", "Sai"];
$y = implode($a);           // array to string 
echo $y ."<br>";
?>

<?php
$a="Sanjay/Sanjana/Sai";
$y = explode('/', $a);          // string to array
print_r($y);
?>
