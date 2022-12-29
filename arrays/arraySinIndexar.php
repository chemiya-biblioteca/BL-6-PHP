<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
$nombres[] = "juan";
$nombres[] = "pedro";
$nombres[] = "ana";
foreach ($nombres as $nombre) {
  echo $nombre;
  echo "<br>";
}


echo "tamano: ".count($nombres);


?>

</body>

</html>