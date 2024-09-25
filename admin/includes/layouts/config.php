<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$env = parse_ini_file('../.env');

$dbhost = $env["DATABASE_HOST"];
$dbusername = $env["DATABASE_USERNAME"];//"jadappst_lms";
$dbpassword =$env["DATABASE_PASSWORD"];//"q^7HRVA*-Q@]";
$dbname =$env["DATABASE_NAME"];//"jadappst_lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}

?>