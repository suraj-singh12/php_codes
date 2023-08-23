<?php
    // There are 3 types of array in PHP.
    // Indexed Array
    // Associative Array
    // Multidimensional Array

    // Indexed Array-----------------------------------------------------------------------------------------
    // first way
    $a[0] = 12;
    $a[1] = 3;
    $a[] = false;       // does not print anything
    // $a[] = "hello";
    // $a[] = 'True';
    // $a[2] = "sdkljfglksrj";
    // $a[342543] = "dfslkjalkj";
    // $a[] = [34,45];
    
    // second way
    // $a = [32,3,5,True,'hello',[345243]];
    // third way
    // $a = array(32,3,5,True,'hello',[345243]);
    var_dump($a);           // print all the information (including data type, structure, and other info about the ds)

    echo "<br>";
    print_r($a);            // print_r() : print information in human readable form
    // -----------------------------------------------------------------------------------------

    // PHP Associative Array
    // Associative arrays are used to store key value pairs.

    echo "<br>-----------------------------------------------------<br>";
    $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  
    print_r($salary);
    $salary["Sonoo"]="350000";  
    $salary["John"]="450000";  
    $salary["Kartik"]="200000";  
    print_r($salary);
    

    echo "<br>-----------------------------------------------------<br>";
    $emp = array(
        array(1,"hello", true),
        array(2, "world", false),
    );
    print_r($emp);
?>