<?php
include "header.php";
include "body.php";
?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Inserir Usuario</h2></div>

<div class="col-md-11">
    <form action="inserirForm5.php" method="POST">
        <fieldset>

            <div class="form-group">
                <label for="inputlogin" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" name="login" class="form-control" id="inputlogin" placeholder="login">
                </div>
            </div>
            <div class="form-group">
                <label for="inputsenha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input  type="password" name="senha"  class="form-control" id="inputsenha" placeholder="senha">
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
