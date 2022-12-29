<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "password", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos
                          set email='$_REQUEST[mailnuevo]' 
                        where email='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El mail fue modificado con exito";
    ?>
</body>

</html>