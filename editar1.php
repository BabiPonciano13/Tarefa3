<?php

include 'conexao.php';

$id = $_POST['id'];
$instrutor = $_POST['instrutores'];
$nome = $_POST['nome'];
$horario = $_POST['horario'];
pg_query("UPDATE instrutor SET instrutores = '$instrutor', nome = '$nome', horario = '$horario' WHERE id = $id;");

header("location: Instrutores.php");