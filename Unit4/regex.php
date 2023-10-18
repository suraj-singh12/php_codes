<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="password" id="password" placeholder="Enter password">
        <input type="submit" value="Submit" />
    </form>
</body>

</html>

<?php
// $password = "P@ssw0rd123";
if ($_POST) {
    $password = $_POST['password'];
    $pattern_uppercase = '/[A-Z]/';
    $pattern_lowercase = '/[a-z]/';
    $pattern_digit = '/[0-9]/';
    $pattern_special_char = '/[!@#$%^&*(),.?":{}|<>]/';

    if (
        strlen($password) >= 8 &&
        preg_match($pattern_uppercase, $password) &&
        preg_match($pattern_lowercase, $password) &&
        preg_match($pattern_digit, $password) &&
        preg_match($pattern_special_char, $password)
    ) {
        echo "Strong password.";
    } else {
        echo "Weak password. Please include uppercase, lowercase, digit, and special character.";
    }
}
?>