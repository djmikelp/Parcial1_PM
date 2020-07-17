<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pregunta 2</title>
  </head>
  <body>
    <?php
        // print_r($consulta);
        // echo "depaaaa".$consulta[0]["departamento"];
        // echo count($consulta);
     ?>
     <table>
    <thead>
        <tr>
            <th>Departamento</th>
            <th>Aprobados</th>
        </tr>
    </thead>

    <tbody>

    <?php   for ($i=0; $i < count($consulta); $i++) { ?>
        <tr>
        <td><?php echo $consulta[$i]['departamento']; ?></td>
        <td><?php echo $consulta[$i]['aprobados']; ?></th>
      </tr>
    <?php } ?>

    </tbody>
</table>
  </body>
</html>
