<?php
    if(isset($_POST['submit'])) {
        $files = $_FILES['file'];

        $filename = $files['name'];
        $filetype = $files['type'];
        $fileTmpLoc = $files['tmp_name'];
        $fileError = $files['error'];
        
        // allowed only jpg, jpeg, and png files
        $f = explode('.', $fileName);   // explode() breaks a string into an array
        $fileExt = strtolower($f[1]);
        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileExt, $allowed)) {
            if($fileSize < 900000) {
                $fileNewName = uniqid('TEST_', false);
                $dest = '../uploads/' .$fileNewName . '.' . $fileExt;
                move_uploaded_file($fileTmpLoc, $dest);
                header('Location:index.php?success=true');
            } else {
                echo 'File size exceeded';
            } 
        } else {
            echo 'File type not supported';
        }
    }
?>