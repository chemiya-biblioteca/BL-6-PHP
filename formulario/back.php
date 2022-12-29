<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
<?php


//procesar checkbox
if (isset($_REQUEST['check1'])) {
    $decimales=" con decimales ";
 }else{
    $decimales=" sin decimales ";
 }



//procesar select
 if ($_REQUEST['operacion'] == "suma") {
$select=" quiere suma entera";
 }else {
    if ($_REQUEST['operacion'] == "suma") {
        $select=" quiere resta decimal";
    }

 }



 //procesar radio
  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma."  ".$decimales."  ".$select;
  } else {
    if ($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta."  ".$decimales."  ".$select."<br>" ."para diferente linea";
    }
  }



  //escribir en el fichero
  $ar = fopen("datos.txt", "a") or
  die("Problemas en la creacion");
fputs($ar, "escribir: ".$select);
fputs($ar, "\n");
fputs($ar, "---------------");
fclose($ar);




//leer el fichero
echo "ahora lo leo <br>";


$ar = fopen("datos.txt", "r") or
die("No se pudo abrir el archivo");
while (!feof($ar)) {
$linea = fgets($ar);
$lineasalto = nl2br($linea);
echo $lineasalto;
}
fclose($ar);
  ?>
</body>

</html>