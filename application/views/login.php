  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>login</title>
    </head>
    <body>
  <h2>Login</h2>
  <form method="POST" action="">
      <div class="form-element">
          <label>C.I.</label>
          <input type="text" name="ci" pattern="[a-zA-Z0-9]+" required />
      </div>
      <div class="form-element">
          <label>Clave</label>
          <input type="password" name="clave" required />
      </div>
      <button type="submit" name="iniciar" value="iniciar">Iniciar</button>
  </form>
    </body>
  </html>
