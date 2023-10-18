<?php
    $link = mysqli_connect("localhost", "root", "", "myDB");
    if ($link === false) {
        die("ERROR : COULD NOT CONNECT." . mysqli_connect_error());
    }
    $sql = "CREATE TABLE testing(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE)";
    if (mysqli_query($link, $sql)) {
        echo "Table created successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>