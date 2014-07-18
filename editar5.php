<?php

include 'conexao.php';
$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];


pg_query("UPDATE usuarios SET login = '$login', senha = '$senha' WHERE id = $id;");


header("location: usuarios.php");