<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "password", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos
                        where email='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="actualizarBack.php" method="post">
      Ingrese nuevo mail:
      <input type="text" name="mailnuevo" value="<?php echo $reg['email'] ?>">
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['email'] ?>">
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>
</body>

</html>