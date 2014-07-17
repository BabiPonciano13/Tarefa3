<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$horario = $_POST['horario'];
pg_query("UPDATE instrutor SET nome = '$nome', horario = '$horario' WHERE id = $id;");

header("location: Instrutores.php");