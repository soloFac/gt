<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni'])) {
        if ($_SESSION['tipo_usuario'] == 'admin') {
            include '../GT/php/headers/index/admin.php';
        } elseif ($_SESSION['tipo_usuario'] == 'comun') {
            include '../GT/php/headers/index/usuario.php';
        }
    } else {
        require('../GT/php/headers/index/publico.php');
    }
    
    include 'php/footer.php';

    // include 'php/session/conexion.php';

    // $conexion = conectar();

    // if($conexion){
    //     echo '<p>Hay conexion</p>';
    //     $query = 'SELECT * FROM usuarios';
    //     $result = mysqli_query($conexion, $query);
        
    //     $numRows = mysqli_num_rows($result);
    //     if ($numRows > 0) {
    //         while ($fila = mysqli_fetch_array($result)) {
    //             echo '<p>'.$fila['nombre'].'</p>';
    //         }
    //     }


    // }
?>