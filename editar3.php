<?php

include 'conexao.php';
$id = $_POST['id'];
$treino = $_POST['treino'];
$proposito = $_POST['proposito'];
$rendimento = $_POST['rendimento'];

pg_query("UPDATE treinos SET treino = '$treino', proposito = '$proposito', rendimento = '$rendimento' WHERE id = $id;");

header("location: Treinos.php");
