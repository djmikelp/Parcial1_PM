  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>login</title>
    </head>
    <body>
  <h2>Login</h2>
  <form method="post" action="" name="signup-form">
      <div class="form-element">
          <label>Username</label>
          <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
      </div>
      <div class="form-element">
          <label>Password</label>
          <input type="password" name="password" required />
      </div>
      <button type="submit" name="iniciar" value="iniciar">Iniciar</button>
  </form>
    </body>
  </html>
