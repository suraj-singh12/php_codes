<?php
$string = "The quick brown jump dumpj JUMP foxe jumps over the lazy dog.";
// print_r(implode(", ", $string));
// $letter = 'j';
$letter = 'e';
// $pattern = '/\b' . $letter . '\w+\b/i';
$pattern = "/\b\w*" . $letter . "\w*\b/i";      // /w is for word character, /b is for word boundary
if (preg_match_all($pattern, $string, $matches)) {
    // print_r($matches);
    echo "Words starting with '$letter': " . implode(', ', $matches[0]);
} else {
    echo "No words starting with '$letter' found.";
}
?>


<!-- 
. - Matches any character except newline.
^ - Matches the start of the string.
$ - Matches the end of the string.
* - Matches zero or more occurrences of the preceding character.
+ - Matches one or more occurrences of the preceding character.
? - Matches zero or one occurrence of the preceding character.
[] - Matches any one of the enclosed characters.
() - Groups a series of pattern elements to a single element.
| - Matches either the pattern to the left or the pattern to the right.
\ - Escapes special characters.




 -->