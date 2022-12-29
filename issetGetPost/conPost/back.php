<?php

//con post
if (isset($_POST["nombre"]) && $_POST["nombre"]!="") {
    echo "Hola  ". $_POST["nombre"];
    }

else {
    if (isset($_POST["nombre"])) {
    echo "Rellena los campos";
    }
    }







 






?>