<?php

include 'conexao.php';

$id = $_GET['id'];


pg_query("DELETE FROM clientes WHERE id = $id ");


header("location: Clientes.php");
