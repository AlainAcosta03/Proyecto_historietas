<?php

    $conexion = new mysqli ("localhost", "root", "", "publicaciones");
    if($conexion){
        echo "conexión exitosa";
    }else{
        echo "falló la conexión";
    }


?>