<?php

include 'conexao.php';

$treino = $_POST ['treino'];
$proposito = $_POST ['proposito'];
$rendimento = $_POST ['rendimento'];

pg_query("INSERT INTO treinos (treino, proposito, rendimento) VALUES ('$treino', '$proposito', '$rendimento') ");

header("location: Treinos.php");

