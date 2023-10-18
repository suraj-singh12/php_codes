<?php
    $pattern = "/^J/";
    $names = array("Jhon Carter", "Clark Kent", "John Rambo");
    $names = [0 => "Jhon Carter", 1 => "Clark Kent", 2 => "John Rambo", 4 => "Jhon Doe"];
    $matches = preg_grep($pattern, $names);
    // Loop through matches array and display matched names
    foreach ($matches as $match) {
        echo $match . "<br>";
    }
?>
