<?php

include 'conexao.php';

$id = $_GET['id'];


pg_query("DELETE FROM dietas WHERE id = $id ");


header("location: Dietas.php");
