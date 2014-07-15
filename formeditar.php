<form action="editar.php" method="POST">
    <fieldset>
        <legend>Editar o login de usuario</legend>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
        <label>Login:
            <input type="text" name="login" value="<?= $_GET['login']; ?>" />
        </label>
        <button type="submit">Enviar</button>
    </fieldset>
</form>


