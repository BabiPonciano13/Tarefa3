<?php

include 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

pg_query("INSERT INTO usuarios (login, senha) VALUES('$login', '$senha') ");


header("location: usuarios.php");