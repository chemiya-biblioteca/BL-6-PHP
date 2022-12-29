<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  //poner html
  function mostrartitulo($men)
  {
    echo "<h1 style=\"text-align:center\">";
    echo $men;
    echo "</h1>";
  }

  mostrartitulo("Primer titulo");
  echo "<br>";
  mostrartitulo("Segundo segundo");





//calculos 
  function retornarpromedio($valor1, $valor2)
  {
    $pro = $valor1 / $valor2;
    return $pro;
  }

  $v1 = 100;
  $v2 = 50;
  $p = retornarpromedio($v1, $v2);
  echo $p;

  ?>

</body>

</html>