<?php
include "header.php";
include "body.php";
include 'conexao.php';
$res = pg_query("SELECT * FROM dietas order by id;");
?>

<div class="col-md-8">
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th> # </th>
                <th>Dieta</th>
                <th>Tipo</th>
                <th>Calorias</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->dieta; ?></td>
            <td><?= $row->tipo; ?></td>
            <td><?= $row->calorias; ?></td>
            <td><a href="formeditar4.php?id=<?= $row->id; ?>&dieta=<?= $row->dieta; ?>&tipo=<?= $row->tipo; ?>&calorias=<?= $row->calorias; ?> " class="btn btn-info">Editar</a></td>
            <td><a href="deletar_dietas.php?id=<?= $row->id; ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
    </table>
    <a href="formulario_dietas.php" class="btn btn-success">Inserir</a>
    <?php
    include "footer.php";
 