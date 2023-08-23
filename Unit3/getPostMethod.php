<!-- 
    local variable $_GET, 
    superGlobal variable $_POST,
    superGlobal variable $_REQUEST : can hold content of both $_GET and $_POST variable
            but it is used to collect all the form data sent either by GET method or POST method

    In get method everything is visible in the URL

 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // isset() checks if the passed value is declared and is not null
        if(isset($_REQUEST["name"])) {
            echo "<p>Hi, " .$_REQUEST["name"] . "</p>";
        }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<!-- 
    in laravel :  GET will get the data, and POST will respond to the data
 -->