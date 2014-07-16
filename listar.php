<?php

include 'conexao.php';

$res = pg_query("SELECT * FROM clientes order by id;");
?>

<a href="forminsert.php">Insert</a>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Login</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->login; ?></td>
            
            
            <td><a href="formeditar.php?id=<?= $row->id; ?>&login=<?= $row->login; ?>">Editar</a></td>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <td><a href="deletar.php?id=<?= $row->id; ?>">Excluir</a></td>
           
        </tr>
        <?php endwhile; ?>
        
    </tbody>
</table>