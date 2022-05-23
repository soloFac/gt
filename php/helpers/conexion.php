<?php
    function conectar(){
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $db = 'gt';
        
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