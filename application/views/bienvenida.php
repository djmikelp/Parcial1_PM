
  <h2>Bienvenido/a</h2>
    <?php
      // print_r($identificador);
      // echo "<br>";
      // print_r($usuario);
      // echo "<br>";
      echo "Nombre : ".$identificador["nombrecompleto"];
  //  echo '<img src="fotos/".$usuario["foto"]>';
     ?>
     <br>
<img src="<?php echo base_url().$usuario['foto'] ?>" width="300" height="200">
<br>

  <select name="colores" id="colores">
    <option value="#FF0000" onclick="javascript:document.body.style.backgroundColor='#FF0000'; document.body.style.backgroundImage='none';">rojo</option>
    <option value="#00FF00" onclick="javascript:document.body.style.backgroundColor='#00FF00'; document.body.style.backgroundImage='none';">verde</option>
    <option value="#0000FF" onclick="javascript:document.body.style.backgroundColor='#0000FF'; document.body.style.backgroundImage='none';">azul</option>
    <option value="#FFFF00" onclick="javascript:document.body.style.backgroundColor='#FFFF00'; document.body.style.backgroundImage='none';">amarillo</option>
  </select>
