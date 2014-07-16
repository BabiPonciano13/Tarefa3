<?php

include 'conexao.php';

$instrutor = $_POST['instrutores'];
$nome = $_POST['nome'];
$horario = $_POST['horario'];

pg_query("UPDATE instrutor SET instrutores = '$instrutor', nome = '$nome', horario = '$horario' WHERE id = 1;");

header("location: Instrutores.php");