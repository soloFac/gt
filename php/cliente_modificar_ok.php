<?php
        session_start();
        if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) 
        && isset($_SESSION['dni']) && $_SESSION['tipo_usuario'] == 'admin' 
        && isset($_POST['usuario']) && !empty($_POST['usuario']) &&isset($_POST['nombre']) && !empty($_POST['nombre']) 
        && isset($_POST['apellido']) && !empty($_POST['apellido']) && isset($_POST['dni']) && !empty($_POST['dni']) 
        && isset($_POST['fecha_nac']) && !empty($_POST['fecha_nac']) && isset($_POST['mail']) && !empty($_POST['mail']) 
        && isset($_POST['direccion']) && !empty($_POST['direccion']) && isset($_POST['codigo_postal']) 
        && !empty($_POST['codigo_postal']) && isset($_POST['localidad']) && !empty($_POST['localidad']) 
        && isset($_POST['provincia']) && !empty($_POST['provincia']) && isset($_POST['pais']) && !empty($_POST['pais']) 
        && isset($_POST['telefono']) && !empty($_POST['telefono'])){
            include 'conexion.php';
            $conexion = conectar();

            $consulta = 'UPDATE usuarios SET ';
            // Completar!!!!
            // if (!empty($_POST['telefono'])) && !empty($_POST['codigo_postal'])) {   //como concatenar variables de tipo entero y string con foreach
            //     $consulta = 
            // }
            foreach ($_POST as $clave => $valor) {
                $consulta .= $clave . ' = "' .$valor.'", ';
            }
        $dni = $_POST['dni'];

        $consulta .= 'WHERE dni = ' . $dni . ';';
        $consulta = str_replace(", WHERE", " WHERE", $consulta);
        echo $consulta;
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            echo "Actualizacion exitosa";
            //header("refresh:1;url=../index.php");
        } else {
            echo "No se pudo actualizar";
            header("refresh:1;url=cliente_modificar.php");
        }

        }else {
            echo "Inicie session especial para ver la pagina";
        }
?>