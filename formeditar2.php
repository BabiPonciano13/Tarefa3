<?php
include "header.php";
include "body.php";
?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Cadastrar Cliente</h2></div>

<div class="col-md-11">
    <form action="editar2.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?= $_GET['id'];  ?>"/>
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" value="<?= $_GET['nome']; ?>" class="form-control" id="inputNome" placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="inputCPF" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" name="cpf" value="<?= $_GET['cpf']; ?>"  class="form-control" id="inputCPF" placeholder="CPF">
                </div>
            </div>
            <div class="form-group">
                <label for="editar2.php" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
                    <input type="text" name="estado" value="<?= $_GET['estado']; ?>" class="form-control" id="inputEstado" placeholder="Estado">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNumero" class="col-sm-2 control-label">Numero</label>
                <div class="col-sm-10">
                    <input type="text" name="numero" value="<?= $_GET['numero']; ?>" class="form-control" id="inputNumero" placeholder="Numero">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="<?= $_GET['email']; ?>" class="form-control" id="inputEmail" placeholder="Email">
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

