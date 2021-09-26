
<?php 
session_start();
$con = mysqli_connect('SQL_SERVER', 'SQL_USERNAME', 'SQL_PASSWORD', 'TABLE_NAME_1');
$con1 = mysqli_connect('SQL_SERVER', 'SQL_USERNAME', 'SQL_PASSWORD', 'TABLE_NAME_2');
if ($con== true and $con1==true){
    $_SESSION['connection']="prechyk";
}


?>

