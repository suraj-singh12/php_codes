<?php

    $link = mysqli_connect("localhost","root","","myDB");
    if($link === false) 
        die("ERROR: Could not connect. " .mysqli_connect_error());

    $sql1 = "INSERT INTO testing (id, first_name, last_name, email) 
                VALUES (2, 'Himanshu', '', 'himanshu@example.com')";
    if(mysqli_query($link, $sql1))
        echo "Records inserted successfully.";
    else
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
?>