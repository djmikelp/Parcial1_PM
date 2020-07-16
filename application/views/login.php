
    <h2>Login</h2>
    <form method="POST" action="<?php echo base_url(); ?>/Login_Controller/verificar">
        <div class="form-element">
            <label>C.I.</label>
            <input type="text" name="ci" pattern="[a-zA-Z0-9]+" required />
            <label>Clave</label>
            <input type="password" name="clave" required />
        </div>
        <button type="submit" name="iniciar" value="iniciar">Iniciar</button>
    </form>
