<?php

$result1 = true xor true;               // precedence of xor is lower than =
echo $result1 ? "TRUE" : "FALSE";

$result2 = (true xor true);             // precedence of = is lower than ()
echo $result2 ? "TRUE" : "FALSE";

$result3 = true ^ false;                // precedence of ^ is higher than = 
echo $result3 ? "TRUE" : "FALSE";


?>
