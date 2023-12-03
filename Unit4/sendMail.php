<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    //Initialize variables

    $to = "surajsingh5092@gmail.com";
    $subject = "Contact from " . $name;
    $message = "<h2>Contact Query from the user: </h2>
                <h4>Name:" . $name . "</h4>
                <h4>Email:" . $email . "</h4>
                <h4>Message:" . $msg . "</h4>";
    //headers
    $headers = "Content-Type:text/html;charset=utf-8" . "\r\n";
    $headers .= "From: " . $name . "<" . $email . ">";

    if (mail($to, $subject, $message, $headers)) {
        echo "mail sent successfully";
    } else {
        echo "mail sending failed";
    }
}
?>