<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$username = $_SESSION['user'];
$username = $_POST['password'];
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Loan management system">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Loan Management System</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="vendor/megamenu/css/megamenu.css">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="vendor/search-filter/search-filter.css">
    <link rel="stylesheet" href="vendor/search-filter/custom-search-filter.css">
    
</head>