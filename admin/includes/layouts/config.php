<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$dbhost = "localhost";
$dbusername = "jadappst_root";
// $dbpassword = "Totalchild6471!";
$dbpassword = "q^7HRVA*-Q@]";
$dbname = "jadappst_lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}

?>