<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];
$email = $_POST['email'];

pg_query("INSERT INTO clientes( nome, cpf, estado, numero, email) VALUES ('$nome', '$cpf', '$estado', $numero, '$email') ");

header("location: Clientes.php");
