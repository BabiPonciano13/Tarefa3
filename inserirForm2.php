<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$instrutor = $_POST['instrutor'];


pg_query("INSERT INTO clientes( nome, cpf, estado, numero, email, instrutor) VALUES ('$nome', '$cpf', '$estado', $numero, '$email', $instrutor) ");

header("location: Clientes.php");
