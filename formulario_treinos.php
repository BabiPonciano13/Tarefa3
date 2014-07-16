<?php
include "header.php";
include "body.php";
?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Cadastrar Tipo de Treino</h2></div>

<div class="col-md-11">
    <form action="inserirForm3.php" method="POST">
        <fieldset>

            <div class="form-group">
                <label for="inputTreino" class="col-sm-2 control-label">Treino</label>
                <div class="col-sm-10">
                    <input type="text" name="treino" class="form-control" id="inputTreino" placeholder="Treino">
                </div>
            </div>
            <div class="form-group">
                <label for="inputProposito" class="col-sm-2 control-label">Proposito</label>
                <div class="col-sm-10">
                    <input type="text" name="proposito"  class="form-control" id="inputProposito" placeholder="Proposito">
                </div>
            </div>
            <div class="form-group">
                <label for="inputRendimento" class="col-sm-2 control-label">Rendimento</label>
                <div class="col-sm-10">
                    <input type="text" name="rendimento"  class="form-control" id="inputRendimento" placeholder="Rendimento">
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
