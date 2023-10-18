<?php
$link = mysqli_connect("localhost", "root", "", "myDB");
if($link === false) die("ERROR: Could not connect. " .mysqli_connect_error());
$sql = "UPDATE testing SET last_name='Sharma' WHERE id=1";
if(mysqli_query($link, $sql))
    echo "Record updated successfully.";
else 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>