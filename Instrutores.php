<?php
include "header.php";
include "body.php";

include 'conexao.php';

$res = pg_query("SELECT * FROM instrutor order by id;");
?>

<div class="col-md-8">
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th> # </th>
                <th> Intrutores </th>
                <th> Nome </th>
                <th>Horário</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->instrutores; ?></td>
            <td><?= $row->nome; ?></td>
            <td><?= $row->horario; ?></td>
        </tr>
        <?php endwhile; ?>
           
        </tbody>
    </table>
    <?php
    include "footer.php";
    