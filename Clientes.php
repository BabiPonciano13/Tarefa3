<?php
include "header.php";
include "body.php";
include 'conexao.php';

$res = pg_query("SELECT * FROM clientes order by id;"); ?>
<div class="col-md-8">
<table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Estado</th>
        <th>Numero</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            
            <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->nome; ?></td>
            <td><?= $row->cpf; ?></td>
            <td><?= $row->estado; ?></td>
            <td><?= $row->numero; ?></td>
            <td><?= $row->email; ?></td>
            </tr>
        <?php endwhile; ?>
        
    </tbody>
</table>
<?php include "footer.php"; ?>
</div>
       