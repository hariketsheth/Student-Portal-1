
<?php 
session_start();
$con = mysqli_connect('SQL_SERVER', 'SQL_USERNAME', 'SQL_PASSWORD', 'SQL_DB_NAME1');
$con1 =mysqli_connect('SQL_SERVER', 'SQL_USERNAME', 'SQL_PASSWORD', 'SQL_DB_NAME2');
if ($con== true){
    $_SESSION['connectionz']="CUSTOM_AUTHENTICATION_CODE";
}

?>

