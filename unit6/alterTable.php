<?php
    $link = mysqli_connect("localhost", "root", "", "myDB");
    if($link === false) die("ERROR: Could not connect. " . mysqli_connect_error());

    $sql = "ALTER TABLE testing ADD COLUMN gender VARCHAR(6) AFTER last_name";
    if(mysqli_query($link, $sql)) 
        echo "Table altered successfully.";
    else 
        echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
    mysqli_close($link);
?>