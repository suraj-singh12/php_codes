<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
Website: <input type="text" name="website" />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
    $my_url = "www.guru99.com";
    if (preg_match("/guru/", $my_url)) {
	    echo "the url $my_url contains guru";
    } else {
	    echo "the url $my_url does not contain guru";
    }
?>