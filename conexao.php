<?php

$servidor   = 'localhost';
$usuario    = 'academia';
$senha      = 'academia';
$dbname     = 'academia';

$conexao = pg_connect("host=$servidor user=$usuario password=$senha dbname=$dbname")
        or die("Não foi possivel se conectar");

