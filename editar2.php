<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];
$email = $_POST['email'];

pg_query("UPDATE clientes SET nome = '$nome', cpf = '$cpf', estado = '$estado', numero = '$numero', email = '$email' WHERE id = 1;");

header("location: Clientes.php");
