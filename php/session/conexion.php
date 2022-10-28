<?php
    function conectar(){
        $servidor = 'bsbgfb5nnr4a7vsjqaum-mysql.services.clever-cloud.com';
        $usuario = 'uh7n12tmrcqyzbxo';
        $clave = 'QbIF0RGLB33FAs5AGbQK';
        $db = 'bsbgfb5nnr4a7vsjqaum';
        
        $conexion = mysqli_connect($servidor, $usuario, $clave, $db);
        if ($conexion) {
            return $conexion;
        } else {
            echo "<h3>Error al conectar</h3>";
        }
    }

    function desconectar($conexion){
        if ($conexion) {
            mysqli_close($conexion);
        }else {
            echo "<h3>No se pudo desconectar</h3>";
        }
    }
?>