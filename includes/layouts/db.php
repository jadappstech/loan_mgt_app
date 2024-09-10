<?php
session_start();
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "Totalchild6471!";
// $dbpassword = "q^7HRVA*-Q@]";
$dbname = "lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}
$user = $_POST['password'];
// var_dump($_POST);die;
$query = "UPDATE user SET username = '$user' WHERE id = 1";
$query = mysqli_query($conn, $query);
$_SESSION['user'] = $user;
header("location: ../../create-application-biodata.php");
?>