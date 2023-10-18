<?php
    session_start();
    $_SESSION['favcolor'] = "red";
    $_SESSION['fanimal'] = "cat";
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] +=1;
    }else{
        $_SESSION['counter'] = 1;
    }
    echo "You have visited this page : ".$_SESSION['counter'];
?>

