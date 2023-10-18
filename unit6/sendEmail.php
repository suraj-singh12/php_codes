<?php
    $to_email = "receivermailaddress";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is email testing send mail directly by PHP script so don't reply it!";

    $header = "From: sendermailaddress";
    if(mail($to_email, $subject,$body, $header)){
        echo "Email successfully sent to the $to_email";
    }else{
        echo "Email sending failed>>>";
    }
?>