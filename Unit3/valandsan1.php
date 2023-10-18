<!DOCTYPE html>
<html>
<head>
    <title>Form Validation and Sanitization</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation and Sanitization
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate name (non-empty and no special characters)
    if (empty($name)) {
        echo "Name is required.<br>";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]*$/", $name)) {
        echo "Only letters and white space allowed in name.<br>";
    }

    // Sanitize email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate sanitized email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    }

    // Display sanitized input
    echo "Sanitized Name: " . htmlspecialchars($name) . "<br>";
    echo "Sanitized Email: " . htmlspecialchars($email) . "<br>";


    // pass alpha<br>charlie as username and see the output of above code and without using htmlspecialchars() as below
    echo "<br> username without htmlspecialchars(): " . $name . "<br>";

}
?>
</body>
</html>