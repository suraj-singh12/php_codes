<!-- procedural way -->

<?php
    // Attempt MySQL server connection. 
    // Assuming you are running MySql server with default setting (user 'root' with no password)
    $link = mysqli_connect("localhost", "root", "");
    // check connection
    if($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    echo "Connect successfully. Host info: " . mysqli_get_host_info($link);
    mysqli_close($link);        // close the connection
?>