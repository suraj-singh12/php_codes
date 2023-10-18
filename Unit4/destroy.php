<?php
    session_start();
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] = 0;
    }
    $msg = "You have visited this page ".$_SESSION['counter']." times";
    $msg .="in this session.";
    echo ($msg);
?>