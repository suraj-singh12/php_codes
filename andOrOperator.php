<?php

$value1 = TRUE;
$value2 = TRUE;
if($value1 && $value2)
    echo "TRUE" ."<br>";
if($value1 and $value2)
    echo "TRUE" ."<br>";

echo "<br>-----------------<br>";
$value1 = TRUE && FALSE;            // precedence of "&&" is higher than "="
echo $value1 ? "TRUE" : "FALSE";

echo "<br>-----------------<br>";
$value1 = TRUE and FALSE;           // precedence of "and" is lower than "="
echo $value1 ? "TRUE" : "FALSE";
echo "<br>";
$value1 = TRUE and TRUE;
echo $value1 ? "TRUE" : "FALSE";
echo "<br>";
$value1 = FALSE and TRUE;
echo $value1 ? "TRUE" : "FALSE";
echo "<br>";
$value1 = FALSE and FALSE;
echo $value1 ? "TRUE" : "FALSE";
echo "<br>";

?>