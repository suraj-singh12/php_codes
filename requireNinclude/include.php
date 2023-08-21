<!DOCTYPE html>
<html>
    <body>
        <?php
            include "header.php";
        ?>

        <p>I am from include.php</p>
        
        <?php 
            require "footer.php";
        ?>        
    </body>
</html>

<!-- 

include : returns a 'warning' if file not found
require : throws a 'fatal error' if file not found
 -->