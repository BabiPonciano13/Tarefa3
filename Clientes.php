<?php
include "header.php";
include "body.php";
include 'conexao.php';

$res = pg_query("select clientes.*,instrutor.nome as instrutor from instrutor join clientes on instrutor.id=clientes.instrutor order by id");
?>
<div class="col-md-8">
    <div style="text-align: center"><h2>Clientes</h2></div>
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Estado</th>
                <th>Numero</th>
                <th>Email</th>
                <th>Instrutor</th>
                <th>Editar</th>
                <th>Excluir</th>

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
                    <td><?= $row->instrutor; ?></td>
                    <td><a href="formeditar2.php?id=<?= $row->id; ?>&nome=<?= $row->nome; ?>&cpf=<?= $row->cpf; ?>&estado=<?= $row->estado; ?>&numero=<?= $row->numero; ?>&email=<?= $row->email; ?>&instrutor=<?= $row->instrutor; ?>" class="btn btn-info">Editar</a></td>
                    <td><a href="deletar_clientes.php?id=<?= $row->id; ?>" class="btn btn-danger">Excluir</a></td>
                </tr>
<?php endwhile; ?>

        </tbody>
    </table>
    <a href="formulario_clientes.php" class="btn btn-success">Inserir</a>
<?php include "footer.php"; ?>
</div>
