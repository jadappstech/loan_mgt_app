<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$dbhost = "localhost";
$dbusername = "root";//"jadappst_lms";
// $dbpassword = "Totalchild6471!";
$dbpassword = "Totalchild6471!";//"q^7HRVA*-Q@]";
$dbname = "lms";//"jadappst_lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}

?>