<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

$registro['dni'] = "20456322";
$registro['nombre'] = "Martinez Pablo";
$registro['direccion'] = "Colon 134";
echo $registro['nombre'];
echo "<br>";


//segunda------------------------------

$registro = array(
    'dni' => '20456322',
    'nombre' => 'Martinez Pablo',
    'direccion' => 'Colon 134'
  );
  echo $registro['dni'];
  echo "<br>";

  foreach ($registro as $clave => $valor) {
    echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
    echo "<br>";
  }


?>

</body>

</html>