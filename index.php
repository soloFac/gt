<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni'])) {
        if ($_SESSION['tipo_usuario'] == 'admin') {
            echo '<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="css/csstoall.css">
                <title>GT Bicicles</title>
            </head>
            <body>
                <main>

                    <div class="menu">
                    <a href="index.php" class="logo-menu"><img src="img/gt-logo.png"></a>
                    
                        <nav id="nav_principal">
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="php/producto_listado.php">Ver productos</a>
                                    <ul>
                                        <li><a href="#">Cuadros</a></li>
                                        <li><a href="#">LLantas</a></li>
                                        <li><a href="#">Cubiertas</a></li>
                                        <li><a href="#">Suspensiones</a></li>
                                        <li><a href="#">Cambios</a></li>
                                    </ul>
                                </li>
                                <li><a href="html/producto_nuevo.html">Agregar productos</a></li>
                                <li><a href="php/cliente_listado.php">Ver listado de clientes</a></li>
                                <li><a href="html/configuracion_admin.html">Configuracion</a></li>
                                <li><a href="php/cerrar_session.php">Cerrar session</a></li>
                            </ul>
                        </nav>
                    </div>

                    <section>
                    </section>
                    '
                    ;
        } elseif ($_SESSION['tipo_usuario'] == 'comun') {
            echo '<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="css/csstoall.css">
                <title>GT Bicicles</title>
            </head>
            <body>
                <main>
                    <header><h1>GT Bycicles</h1></header>
                    
                    <nav id="nav_principal">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="#">Productos</a>
                                <ul>
                                    <li>Cuadros</li>
                                    <li>LLantas</li>
                                    <li>Cubiertas</li>
                                    <li>Suspensiones</li>
                                    <li>Cambios</li>
                                </ul>
                            </li>
                            <li><a href="#">Ver carrito</a></li>
                            <li><a href="#">Opciones</a></li>
                            <li><a href="php/cerrar_session.php">Cerrar session</a></li>
                        </ul>
                    </nav>
                    <section>
                    </section>
                    '
                    ;
        }

    } else {
        require('../GT/php/headers/index_publico.php');
        // echo '<section>
        //         </section>
        //     </div>';
    }
    
    include 'php/footer.php';
?>