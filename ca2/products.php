<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
</head>
<body>
    <?php 
        $user = "";
        if(isset($_COOKIE["user"]))
            $user = $_COOKIE["user"];
        else {
            echo 'You are not logged in! Login first.';
            return;
        }
        $link = mysqli_connect('localhost', 'root', '', 'mydb');
        $sql = "SELECT * FROM users WHERE username = '$user'";
        $result = $link->query($sql);
        if($result->num_rows == 0) {
            echo '<h1>Unauthorized user!</h1>';
            return;
        } else {
            session_start();
            echo "<h1> Welcome To Products Page </h1>";
            echo "<h2> You are an authorized user </h2>";
        }
    ?>
</body>
</html>