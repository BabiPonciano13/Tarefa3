<?php

include 'conexao.php';

$id = $_GET['id'];


pg_query("DELETE FROM usuarios WHERE id = $id ");


header("location: usuarios.php");
