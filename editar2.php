<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$instrutor = $_POST['instrutor'];

pg_query("UPDATE clientes SET nome = '$nome', cpf = '$cpf', estado = '$estado', numero = '$numero', email = '$email', instrutor = '$instrutor' WHERE id = $id;");

header("location: Clientes.php");
