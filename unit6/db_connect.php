<?php
	$link = mysqli_connect("localhost","root","");

    if($link === false){
        die("ERROR : Could not connect. " .mysqli_connect_error());
    }
    echo " Connected Succesfully, Host info: ".mysqli_get_host_info($link);
    mysqli_close($link);
?>