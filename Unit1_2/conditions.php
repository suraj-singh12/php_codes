<form method="POST">
<input type="text" name="marks">
<input type="submit">
</form>

<?php
if($_POST)
{
    $marks = $_POST['marks'];
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade";    
    }    
    elseif ($marks>=50 && $marks<65) {    
       echo "C grade";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    elseif ($marks>=90 && $marks<=100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
 }
?>