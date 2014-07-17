<?php
include "header.php";
include "body.php";
include 'conexao.php';
$res = pg_query("SELECT * FROM treinos order by id;");
?>


<div class="col-md-8">
    <div style="text-align: center"><h2>Treinos</h2></div>
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th> # </th>
                <th>Treino</th>
                <th>Proposito</th>
                <th>Rendimento</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->treino; ?></td>
            <td><?= $row->proposito; ?></td>
            <td><?= $row->rendimento; ?></td>
            <td><a href="formeditar3.php?id=<?= $row->id; ?>&treino=<?= $row->treino; ?>&proposito=<?= $row->proposito; ?>&rendimento=<?= $row->rendimento; ?>" class="btn btn-info">Editar</a></td>
            <td><a href="deletar_treinos.php?id=<?= $row->id; ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
    </table>
    <a href="formulario_treinos.php" class="btn btn-success">Inserir</a>
    <?php
    include "footer.php";
    