<?php

include 'conexao.php';

$id = $_GET['id'];


pg_query("DELETE FROM instrutor WHERE id = $id ");


header("location: Instrutores.php");
