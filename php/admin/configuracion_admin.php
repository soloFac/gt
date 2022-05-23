<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) && ($_SESSION['tipo_usuario'] == 'admin')) {
        if (isset($_POST['display'])) {
            include 'conexion.php';
            $conexion = conectar();

            $nombre = $_SESSION['usuario'];

            $dato = $_POST['display'];
            
            setcookie($nombre, $dato, time()+ 180*60*60*24);

            echo "Guardado exitoso";

            header("refresh:1.5;url=producto_listado.php");
        } else {
            echo 'No se pudo conectar';
        }
    } else {
        echo "Usted debe iniciar session como administrador para poder ver el contenido";
    }
?>