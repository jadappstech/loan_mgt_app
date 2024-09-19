<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['user'] = $_POST['password'];
$username = $_SESSION['user'];
// var_dump($username);die;
header("Location: http://localhost/loan_mgt_app/admin/index.php");
?>