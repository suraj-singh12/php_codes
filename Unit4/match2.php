<?php
$pattern = "/\s/";      // \s is the pattern for whitespace (/S is for non-whitespace)
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces
echo str_replace(" ", "-", $text);
?>

