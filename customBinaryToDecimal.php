
<form method="post">
<input type="text" name="num1">
<input type="text" name="num2">
<input type="submit">
</form>
<?php
if($_POST)
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if($num1 > 1 || $num1 < 0 || $num2 > 1 || $num2 < 0)
    {
        echo "Invalid input";
        exit();
    }
    $result = $num1 * pow(2, 1) + $num2 * pow(2, 0);
    echo "Result is : " . $result;
}
?>