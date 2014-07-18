<?php
include "header.php";
include "body.php";
include 'conexao.php';
$res = pg_query("SELECT * FROM usuarios order by id;");
?>

<div class="col-md-8">
    <div style="text-align: center"><h2>Usuarios</h2></div>
    <table class="table table-bordered table-hover" style="background-color: #8C8A8A;">
        <thead>
            <tr>
                <th> # </th>
                <th>Login</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->login; ?></td>
            <td><?= $row->senha; ?></td>
            <td><a href="formeditar5.php?id=<?= $row->id; ?>&login=<?= $row->login; ?>&senha=<?= $row->senha; ?>" class="btn btn-info">Editar</a></td>
            <td><a href="deletar_usuarios.php?id=<?= $row->id; ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
        
        </tbody>
    </table>
    <a href="formulario_usuarios.php" class="btn btn-success">Inserir</a>
    <?php
    include "footer.php";
 