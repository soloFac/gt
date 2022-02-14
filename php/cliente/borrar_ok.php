<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) && $_SESSION['tipo_usuario'] == 'admin') {
        include 'conexion.php';
        include 'header_admin.php';
        $conexion = conectar();
        if ($conexion && isset($_GET['dni'])) {
            $dni = $_GET['dni'];
            $consulta = 'SELECT nombre, apellido, foto_usuario FROM usuarios WHERE dni = "'.$dni.'" ;';
            $resultado = mysqli_query($conexion, $consulta);
            if (mysqli_num_rows($resultado) == 1) {
                $cliente = mysqli_fetch_array($resultado);
                echo "<h2>Esta seguro de que quiere eliminar al usuario ".$cliente['nombre'] ." " .$cliente['apellido'] ."?</h2>";
                echo '<img id="foto_usuario_borrar_ok" src="../img/foto_cliente/' .$cliente['foto_usuario'] .'">';
                echo '<a href="cliente_borrar.php?dni='.$dni.'"><img src="../img/icono_confirmar.jpg" id="icono_confirmar_borrar_ok" alt="confirmar"></a>';
                echo '<a href="cliente_listado.php"><img src="../img/icono_regresar.png" id="icono_regresar_borrar_ok" alt="regresar"></a>';
            }
        }
    }
?>