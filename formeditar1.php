<?php
include "header.php";
include "body.php";
?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Editar Instrutor</h2></div>

<div class="col-md-11">
    <form action="editar1.php" method="POST">
        <fieldset>
            
            <input type="hidden" name="id" value="<?= $_GET['id'];  ?>"/>
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" value="<?= $_GET['nome']; ?>" class="form-control" id="inputNome" placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="inputHorario" class="col-sm-2 control-label">Horario</label>
                <div class="col-sm-10">
                    <input type="text" name="horario" value="<?= $_GET['horario']; ?>" class="form-control" id="inputHorario" placeholder="Horario">
                </div>
            </div>


        </fieldset>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
            </div>
        </div>
    </form>
</div>   
