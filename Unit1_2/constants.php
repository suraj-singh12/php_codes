<?php

// defining constants
// const name, value, case-insensitive
define("Wishes", "Good Morning", TRUE);     // deprecated (@param case-insensitive) since PHP 7.3-7.4
const Wishes = "Good Morning LPU";
$Wishes = 1000;
echo Wishes ."\n";

?>