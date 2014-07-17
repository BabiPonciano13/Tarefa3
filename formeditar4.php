<?php
include "header.php";
include "body.php";
?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Inserir Tipo de Dieta</h2></div>

<div class="col-md-11">
    <form action="editar4.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?= $_GET['id'];  ?>"/>
            <div class="form-group">
                <label for="inputDietas" class="col-sm-2 control-label">Dietas</label>
                <div class="col-sm-10">
                    <input type="text" name="dieta" value="<?= $_GET['dieta']; ?>" class="form-control" id="inputDietas" placeholder="Dietas">
                </div>
            </div>
            <div class="form-group">
                <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                <div class="col-sm-10">
                    <input type="text" name="tipo" value="<?= $_GET['tipo']; ?>"  class="form-control" id="inputTipo" placeholder="Tipo">
                </div>
            </div>
            <div class="form-group">
                <label for="inputCalorias" class="col-sm-2 control-label">Calorias</label>
                <div class="col-sm-10">
                    <input type="text" name="calorias" value="<?= $_GET['calorias']; ?>"  class="form-control" id="Calorias" placeholder="Calorias">
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
