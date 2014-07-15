<?php

include 'conexao.php';

$id = $_GET['id'];


pg_query("DELETE FROM treinos WHERE id = $id ");


header("location: Treinos.php");
