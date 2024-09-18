<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "Totalchild6471!";
// $dbpassword = "q^7HRVA*-Q@]";
$dbname = "lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}

?>