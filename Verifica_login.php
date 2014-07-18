<?php

session_start();
$login = $_POST['email'];
$senha = $_POST['pass'];
include 'conexao.php';




$SQL = "SELECT * FROM usuarios WHERE login = '$login'  AND  senha = '$senha'" ;






if (pg_num_rows(pg_query($SQL)) == 1) {
    $_SESSION['logado'] = TRUE;

    echo "logou.";
    header("location:/Tarefa1.php");
} else {
    echo '<script>alert("Usuário ou senha incorreto!")</script>';
    echo '<script>window.location.replace("index.php")</script>';
}




