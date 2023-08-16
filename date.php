<?php

$d = date("D");
if($d == "Fri") {
    echo "Have a great weekend";
} else {
    echo "No weekend";
}

echo "<br>Today's day: ". $d;
$d = date("d");
echo "<br>Today's Date: ". $d;
$d = date("M");
echo "<br>Current Month: ". $d;
$d = date("Y");
echo "<br>Current Year: ". $d;

$d = date("d M Y");
echo "<br>Current Date: ". $d;
?>