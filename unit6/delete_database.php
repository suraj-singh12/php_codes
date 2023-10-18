<?php
    $link = mysqli_connect("localhost", "root", "", "myDB");       
    if ($link === false) {
        die("ERROR : COULD NOT CONNECT." . mysqli_connect_error());
    }
    $sql = "DROP TABLE testing";
    if (mysqli_query($link, $sql)) {
        echo "Table dropped successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>