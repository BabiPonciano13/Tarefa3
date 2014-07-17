<?php

include 'conexao.php';

$instrutor = $_POST['instrutores'];
$nome = $_POST['nome'];
$horario = $_POST['horario'];

pg_query("INSERT INTO instrutor( nome, horario) VALUES ('$nome', '$horario') ");

header("location: Instrutores.php");