<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Decrement</title>
</head>
<body>
    <form method="POST">
        <label for="stars">Enter number of stars: </label>
        <input type="number" name="stars" id="stars" />
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
// fetch the stars from above form and write a code to print the following pattern
// *
// **
// ***
// **** .. and so on

if($_POST != null) {
    $stars = $_POST['stars'];
    for($i = 0; $i < $stars; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br><br>";
    for($i = $stars -1; $i >= 0; $i--) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

?>