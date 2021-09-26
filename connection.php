<?php 
session_start();
// Enter the SQL Server, SQL Username, SQL Password, SQL Database name 
$con = mysqli_connect(SQLSERVER, SQLUSERNAME, SQLPASSWORD, SQLDATABASE_1);
$con1 = mysqli_connect(SQLSERVER, SQLUSERNAME, SQLPASSWORD, SQLDATABASE_2);
if (!$con || !$con1){
    $_SESSION['connectiondb']="false";
}
else {
     $_SESSION['connectiondb']="true";
}

// Insert the Google ReCaptcha Site Key and Secret Key Here 
define('CONTACTFORM_RECAPTCHA_SITE_KEY', RECAPTCHA_SITE_KEY);
define('CONTACTFORM_RECAPTCHA_SECRET_KEY', RECAPTCHA_SECRET_KEY);
?>

