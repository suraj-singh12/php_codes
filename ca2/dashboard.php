<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        if(!isset($_POST['username']) || !isset($_POST['password'])) {
            echo "<h1>Invalid user name and password</h1>";
            return;
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!$username || !$password) {
            echo "Invalid user name and password";
            return;
        }
        $link = new mysqli('localhost', 'root', '', 'mydb');
        if($link->connect_error) {
            die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
        }
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $link->query($sql);
        if($result->num_rows == 0) {
            echo 'You are not logged in! Login first.';
            return;
        } else {
            setcookie('user', $username, time() + 60);
            session_start();
            echo "<h1> Welcome To Dashboard </h1>";
        }
        $link->close();
    ?>
</body>
</html>