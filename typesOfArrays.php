<?php
    // Three Ways to define an array
    // first way
    $a[0] = 12;
    $a[1] = 3;
    $a[] = "hello";
    $a[] = 'True';
    $a[] = "new";
    $a[2] = "sdkljfglksrj";
    $a[342543] = "dfslkjalkj";
    $a[] = [34,45];

    // second way
    $a = [32,3,5,True,'hello',[345243]];

    // third way
    $a = array(32,3,5,True,'hello',[345243]);
    var_dump($a);           // print all the information (including data type, structure, and other info about the ds)
    print_r($a);            // print_r() : print information in human readable form
?>