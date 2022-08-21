<?php
    
    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['clave']) &&isset($_POST['nombre']) 
    && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']) && isset($_POST['dni']) && !empty($_POST['dni']) 
    && isset($_POST['fecha_nac']) && !empty($_POST['fecha_nac']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['direccion']) 
    && !empty($_POST['direccion']) && isset($_POST['codigo_postal']) && !empty($_POST['codigo_postal']) && isset($_POST['localidad']) 
    && !empty($_POST['localidad']) && isset($_POST['provincia']) && !empty($_POST['provincia']) && isset($_POST['pais']) && !empty($_POST['pais']) 
    && isset($_POST['telefono']) && !empty($_POST['telefono']) && ($_POST['clave']==$_POST['confirmar_clave'])) {
        include 'conexion.php';
        $conexion = conectar();
        if ($conexion) { 
            $usuario = $_POST['usuario'];
            $clave = sha1($_POST['clave']);
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $dni = $_POST['dni'];
            $fecha_nac = $_POST['fecha_nac'];
            $mail = $_POST['mail'];
            $direccion = $_POST['direccion'];
            $cod_postal = $_POST['codigo_postal'];
            $localidad = $_POST['localidad'];
            $provincia = $_POST['provincia'];
            $pais = $_POST['pais'];
            $tel = $_POST['telefono'];
            $fax = $_POST['fax'];
            $tipo_usuario = $_POST['tipo_usuario'];
            $foto_nombre = 'default.jpg';

            if (isset($_FILES) && !empty($_FILES)) {
                var_dump($_FILES);
                if ($_FILES['foto']['type']=='image/jpeg' || $_FILES['foto']['type']=='image/png' 
                    || $_FILES['foto']['type']=='image/jpg' || $_FILES['foto']['type']=='image/gif'
                    || $_FILES['foto']['type']=='image/bmp' && ($_FILES['foto']['size'] > 0)) {

                    $ext = explode('.', $_FILES['foto']['name']);
                    $rutaOrigen = $_FILES['foto']['tmp_name'];
                    $destino = '../img/foto_cliente/' .$nombre .' ' .$apellido .'.' .$ext[1];
                    if (!file_exists('../img/foto_cliente')) {
                        mkdir('../img/foto_cliente');
                    }
                    $envio = move_uploaded_file($rutaOrigen, $destino);
                    $foto_nombre = $nombre .' ' .$apellido .'.' .$ext[1];
                }
            }

            $consulta = "INSERT INTO usuarios(usuario, password, tipo_usuario, nombre, apellido, dni, fecha_nac, mail, 
                         direccion, codigo_postal, localidad, provincia, pais, telefono, fax, foto_usuario) 
                         VALUES ('$usuario', '$clave', '$tipo_usuario', '$nombre ', '$apellido ','$dni ', '$fecha_nac ', 
                         '$mail ', '$direccion ', '$cod_postal ', '$localidad ', '$provincia', '$pais', '$tel', '$fax', '$foto_nombre');";

            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                echo "Guardado exitoso";
                header ("refresh:3;url=../index.php");
            }else {
                echo "No se pudo realizar el registro";
            }
            desconectar($conexion);
        }
    } else {
        echo "<h2>Ingrese contraseñas iguales</h2>";
        header("refresh:2;url=../html/cliente_nuevo.html");
    }
?>