<!-- object oriented way -->

<?php
    // create connection
    $link = new mysqli("localhost", "root", "");
    if($link->connect_error) {
        die("ERROR: Could not connect. " . $link->connect_error);
    }
    // create database
    $sql = "CREATE DATABASE myDB";
    if($link->query($sql) === true) {
        echo "Database created successfully";
    } else {
        echo "ERROR: Could not able to execute $sql. " . $link->error;
    }
?>


