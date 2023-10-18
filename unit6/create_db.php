<?php

    $link = new mysqli("localhost","root","");

    if($link->connect_error){
        die("Connection failed : ".$link->connect_error);
    }
    $sql = "CREATE DATABASE demo";
    if($link->query($sql)){
        echo "Database created successfully";
    }else{
        echo "Error creating database : ".$link->error;
    }
    $link->close();
?>