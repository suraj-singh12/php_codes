<?php
    session_start();
?>
<?php
    echo "Favourite Color is : ",$_SESSION['favcolor'].".<br>";
    echo "Favourite Animal is : ",$_SESSION['fanimal'].".<br>";
?>