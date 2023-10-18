<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    Email: <input type="text" name="email" />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
$pattern = "/[@]/";
$text = $_GET['email'];

if(preg_match($pattern, $text)) {
    echo "Match Found!";
} else {
    echo "Match not found!!";
}
?>