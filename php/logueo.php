<?php
    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['clave'])) {
        include 'conexion.php';
        $conexion = conectar();

        $usuario = $_POST['usuario'];
        $clave = sha1($_POST['clave']);

        $consulta = 'SELECT usuario, password, tipo_usuario, dni 
                     FROM usuarios 
                     WHERE usuario = "' .$usuario. '" AND password = "' .$clave. '" ;';
                     
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            $numFilas = mysqli_num_rows($resultado);
            session_start();
            if ($numFilas > 0) {
                $cliente = mysqli_fetch_array($resultado);
                header ("refresh:0;url=../index.php");
            } else {
                echo "Clave y usuarios incorrectos";
                //header ("refresh:3;url=logueo.php");
            }
            $_SESSION['dni'] = $cliente['dni'];
            $_SESSION['usuario'] = $cliente['usuario'];
            $_SESSION['tipo_usuario'] = $cliente['tipo_usuario'];
        }
        desconectar($conexion);
    }
?>