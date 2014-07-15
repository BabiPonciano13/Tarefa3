<?php

include 'conexao.php';

$id = $_POST['id'];
$login = $_POST['login'];
pg_query("UPDATE usuario SET login='$login' WHERE id = $id");
header("location: listar.php");
