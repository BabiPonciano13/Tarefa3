<?php

$servidor   = 'localhost';
$usuario    = 'academia';
$postgressenha      = 'academia';
$dbname     = 'academia';

$conexao = pg_connect("host=$servidor user=$usuario password=$postgressenha dbname=$dbname")
        or die("Não foi possivel se conectar");

