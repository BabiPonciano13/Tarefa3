<?php
include "header.php";
include "body.php";

include 'conexao.php';

$res = pg_query("SELECT * FROM instrutor order by id;");

?>

<div class="col-md-8">
    <div style="text-align: center"><h2>Instrutores</h2></div>
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th> # </th>
                <th> Nome </th>
                <th>Horário</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->nome; ?></td>
            <td><?= $row->horario; ?></td>
            <td><a href="formeditar1.php?id=<?= $row->id; ?>&instrutor=<?= $row->instrutores; ?>&nome=<?= $row->nome; ?>&horario=<?= $row->horario; ?>" class="btn btn-info">Editar</a></td>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <td><a href="deletar.php?id=<?= $row->id; ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
           
        </tbody>
    </table>
    <a href="formulario_instrutores.php" class="btn btn-success">Inserir</a>
    <?php
    include "footer.php";
    