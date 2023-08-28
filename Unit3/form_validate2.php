<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Example 1</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) $nameErr = "Name is required";
            else $name = test_input($_POST["name"]);

            if(empty($_POST["email"])) $emailErr = "Email is required";
            else $email = test_input($_POST["email"]);
            
            if(empty($_POST["website"])) $websiteErr = "Website is required";
            else $website = test_input($_POST["website"]);
            
            if(empty($_POST["comment"])) $commentErr = "Comment is required";
            else $comment = test_input($_POST["comment"]);
            
            if(empty($_POST["gender"])) $genderErr = "Gender is required";
            else $gender = test_input($_POST["gender"]);
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
        <input type="text" name="name" />
        <span class="error">* <?php echo $nameErr;?> </span>
        <br> <br>
        E-mail:
        <input type="email" name="email" /> 
        <span class="error">* <?php echo $emailErr;?> </span>
        <br> <br>
        Website:
        <input type="text" name="website" /> 
        <span class="error">* <?php echo $websiteErr;?> </span>
        <br> <br>

        Gender:
        <input type="radio" name="gender" value="female" /> Female
        <input type="radio" name="gender" value="male" /> Male
        <input type="radio" name="gender" value="other" /> Other
        <span class="error">* <?php echo $genderErr;?> </span>
        <br> <br>

        Comment:
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <span class="error">* <?php echo $commentErr;?> </span>
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