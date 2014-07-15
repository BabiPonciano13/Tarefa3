<?php
session_start();

if ($_SESSION['logado'] != true) {
    header("Location: /index.php");
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Academia TOP LIFE</title>
        <link rel="shortcut icon" href="logo.png" />
        <!-- Bootstrap css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    </head>