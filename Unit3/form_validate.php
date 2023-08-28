<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Example 1</title>
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>PHP Form Validation Example</h2>
    <form method="POST" 
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
    >
        Name:
        <input type="text" name="name" /> <br> <br>
        E-mail:
        <input type="email" name="email" /> <br> <br>
        Website:
        <input type="text" name="website" /> <br> <br>
        Gender:
        <input type="radio" name="gender" value="female" /> female
        <input type="radio" name="gender" value="male" /> Male
        <input type="radio" name="gender" value="other" /> Other
        Comment:
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <br> <br>
        <input type="submit" name="submit" value="Submit" />
        <br> <br>
    </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo "Name: ". $name;
        echo "<br>";
        echo "Email: ". $email;
        echo "<br>";
        echo "Website". $website;
        echo "<br>";
        echo "Comment: ". $comment;
        echo "<br>";
        echo "Gender" .$gender;
    ?>
</body>
</html>