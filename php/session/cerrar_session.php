<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni'])) {
       echo 'Saliendo de la session';
       session_destroy();
       header("refresh:1.7;url=../../index.php");
    } else {
        echo "Usted no inicio session";
        header("refresh:1.7;url=../../index.php");
    }
?>