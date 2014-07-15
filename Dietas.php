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
                <!--<th> id </th>-->
                <th>Dieta</th>
                <th>Tipo</th>
                <th>Calorias</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <!--<td><? = $row->id; ?></td>-->
            <td><?= $row->dieta; ?></td>
            <td><?= $row->tipo; ?></td>
            <td><?= $row->calorias; ?></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
    </table>
    <?php
    include "footer.php";
 