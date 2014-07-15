<?php

session_start();
$login = $_POST['email'];
$senha = $_POST['pass'];


if ($login == "m2smart@gmail.com" && $senha == "m2smart") {
    $_SESSION['logado'] = TRUE;

    echo "logou.";
    header("location:/Tarefa1.php");
} else {
    echo '<script>alert("Usuário ou senha incorreto!")</script>;';
    echo '<script>window.location.replace("index.php")</script>;';
}