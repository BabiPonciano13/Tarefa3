<?php
include "header.php";
include "body.php";
?>

<div style="text-align: center"><h2>Formulario de Inscrição</h2></div>

<div class="col-md-11">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputNome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="Nome" class="form-control" id="inputNome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="inputSobrenome" class="col-sm-2 control-label">Sobrenome</label>
            <div class="col-sm-10">
                <input type="Sobrenome" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEstado" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-10">
                <input type="Estado" class="form-control" id="inputEstado" placeholder="Estado">
            </div>
        </div>
        <div class="form-group">
            <label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
            <div class="col-sm-10">
                <input type="Cidade" class="form-control" id="inputCidade" placeholder="Cidade">
            </div>
        </div>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>

        <?php
        include "footer.php";
        