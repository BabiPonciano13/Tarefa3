<?php

include 'conexao.php';

$dieta = $_POST ['dieta'];
$tipo = $_POST ['tipo'];
$calorias = $_POST ['calorias'];

pg_query("INSERT INTO dietas (dieta, tipo, calorias) VALUES('$dieta', '$tipo', '$calorias') ");


header("location: Dietas.php");