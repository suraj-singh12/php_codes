<?php
function a1($y="I am a default value of function a1") {
    $x = "Hello I am from function a1";
    echo $x. "<br> But <br>" .$y;
}

a1();
echo "<br>-------------------------------<br>";
a1("Hello I am a new local value");


?>