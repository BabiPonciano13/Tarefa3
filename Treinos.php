<?php
include "header.php";
include "body.php";
include 'conexao.php';
$res = pg_query("SELECT * FROM treinos order by id;");
?>


<div class="col-md-8">
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <!--<th> id </th>-->
                <th>Treino</th>
                <th>Proposito</th>
                <th>Rendimento</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <!--<td><? = $row->id; ?></td>-->
            <td><?= $row->treino; ?></td>
            <td><?= $row->proposito; ?></td>
            <td><?= $row->rendimento; ?></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
    </table>
    <?php
    include "footer.php";
    