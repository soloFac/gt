<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) && isset($_GET['dni'])) {
        include '../php/header_admin.php';
        include 'conexion.php';
        $conexion = conectar();
        if ($conexion && isset($_GET['dni'])) {
            $dni = $_GET['dni'];
            $consulta = 'SELECT * FROM usuarios WHERE dni = "' .$dni .'" ;';
            $resultado = mysqli_query($conexion, $consulta);
            if (mysqli_num_rows($resultado) > 0) {
                $cliente = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/csstoall.css">
        <title>Modificar datos usuario</title>
    </head>
    <body>
        <main>
            <header id="header_cliente_modificar"><h1>Modificar datos de usuario</h1></header>
            <section id="section_cliente_modificar">
                <article id="article_cliente_modificar">
                    <form id="form_cliente_modificar" action="../php/cliente_modificar_ok.php" method="POST" enctype="multipart/form-data">
                        <img id="foto_cliente_modificar" src="../img/foto_cliente/<?php echo $cliente['foto_usuario']?>" alt="foto_usuario" id="foto_usuario_modificar">
                        <label for="usuario">
                            Usuario: <input type="text" value="<?php echo $cliente['usuario']?>" id="usuario" name="usuario" maxlength="60" required>
                        </label>
                        <label for="nombre">
                            Nombres: <input type="text" value="<?php echo $cliente['nombre']?>" id="nombre" name="nombre" maxlength="120" required>
                        </label>
                        <label for="apellido">
                            Apellido: <input type="text" value="<?php echo $cliente['apellido']?>" id="apellido" name="apellido" maxlength="120" required>
                        </label>
                        <label for="dni">
                            DNI: <input type="text" value="<?php echo $cliente['dni']?>" id="dni" name="dni" minlength="8" maxlength="8" required>
                        </label>
                        <label for="fecha_nac">
                            Fecha de Nacimiento: <input type="date" value="<?php echo $cliente['fecha_nac']?>" id="fecha_nac" name="fecha_nac" required>
                        </label>
                        <label for="mail">
                            Mail: <input type="email" value="<?php echo $cliente['mail']?>" id="mail" name="mail" maxlength="80" required>
                        </label>
                        <label for="direccion">
                            Direccion: <input type="text" value="<?php echo $cliente['direccion']?>" id="direccion" name="direccion" maxlength="120" required>
                        </label>
                        <label for="codigo_postal">
                            Codigo Postal: <input type="number" value="<?php echo $cliente['codigo_postal']?>" id="codigo_postal" name="codigo_postal" maxlength="15" required>
                        </label>
                        <label for="localidad">
                            Localidad: <input type="text" value="<?php echo $cliente['localidad']?>" id="localidad" name="localidad" maxlength="100" required>
                        </label>
                        <label for="provincia">
                            Provincia: <input type="text" value="<?php echo $cliente['provincia']?>" id="provincia" name="provincia" maxlength="100" required>
                        </label>
                        <label for="pais">
                            Pais: <input type="text" value="<?php echo $cliente['pais']?>" id="pais" name="pais" maxlength="80" required>
                        </label>
                        <label for="telefono">
                            Telefono: <input type="tel" value="<?php echo $cliente['telefono']?>" id="telefono" name="telefono" pattern="[0-9]{11}" required>
                        </label>
                        <label for="fax">
                            Fax: <input type="text" value="<?php echo $cliente['fax']?>" id="fax" name="fax" maxlength="50">
                        </label>
                        <label for="foto_usuario">
                            <input type="file" id="foto_usuario" name="foto">
                        </label>
                        <input type="submit" value="Modificar">
                        <a href="../index.php"><input type="button" value="Cancelar"></a>
    
                        <input type="hidden" value="comun" name="tipo_usuario">
                    </form>
                </article>
            </section>
        </main>
    </body>
    </html>

<?php
}    
    }else {
        echo "El usuario no existe o hubo un error al enviar";
    }
    desconectar($conexion);
        } else {
            echo "Inicie session como administrador para ver el contenido";
        }

?>