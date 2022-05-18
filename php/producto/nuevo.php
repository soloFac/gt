<?php
    session_start();

    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) 
                        && $_SESSION['tipo_usuario'] == 'admin') {

        if (isset($_POST['nombre_producto']) && !empty($_POST['nombre_producto']) && isset($_POST['precio']) && !empty($_POST['precio']) 
        && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && isset($_POST['especificaciones']) && !empty($_POST['especificaciones']) 
        && isset($_FILES) && !empty($_FILES)) {
            include 'conexion.php';
            $conexion = conectar();
            if ($conexion) { 
                $nombre_producto = $_POST['nombre_producto'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $especificaciones = $_POST['especificaciones'];

                if (isset($_FILES) && !empty($_FILES)) {
                    if ($_FILES['imagen']['type'] == 'image/jpeg' || $_FILES['imagen']['type']=='image/png' 
                        || $_FILES['imagen']['type']=='image/jpg' || $_FILES['imagen']['type']=='image/gif'
                        || $_FILES['imagen']['type']=='image/bmp' && ($_FILES['imagen']['size'] > 0)) {

                        $ext = explode('.', $_FILES['imagen']['name']);
                        $rutaOrigen = $_FILES['imagen']['tmp_name'];
                        $destino = '../img/productos/' .$ext[0] .'.' .$ext[1];
                        if (!file_exists('../img/productos')) {
                            mkdir('../img/productos');
                        }
                        $envio = move_uploaded_file($rutaOrigen, $destino);
                        $imagen = $ext[0] .'.' .$ext[1];
                    }
                }

                $consulta = "INSERT INTO articulos(nombre_producto, precio, descripcion, especificaciones, imagen) 
                            VALUES ('$nombre_producto', '$precio', '$descripcion', '$especificaciones', '$imagen');";

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
            echo "<h2>Error al enviar los datos</h2>";
            header("refresh:2;url=../html/producto_nuevo.html");
        }
} else {
    echo "Solo el administrador puede acceder a esta pagina";
    header ("refresh:2;url=../html/cliente_nuevo.html");
}
?>