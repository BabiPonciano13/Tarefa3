<?php

include 'conexao.php';
$id = $_POST['id'];
$dieta = $_POST['dieta'];
$tipo = $_POST['tipo'];
$calorias = $_POST['calorias'];

pg_query("UPDATE dietas SET dieta = '$dieta', tipo = '$tipo', calorias = '$calorias' WHERE id = $id;");


header("location: Dietas.php");