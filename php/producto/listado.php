<?php
    session_start();
    if (!empty($_SESSION['usuario']) && !empty($_SESSION['tipo_usuario'])
        && !empty($_SESSION['dni']) && $_SESSION['tipo_usuario'] == 'admin') // CAMBIAR A COMUN
    { 
        include '../helpers/conexion.php';
        include 'header_admin_part_1.php';
        include 'header_admin_part_2.php';

        $nombre = $_SESSION['usuario'];
        $display = $_COOKIE[$nombre];

        if (!empty($display) && $display == 'display_block') {
            echo '<link rel="stylesheet" href="../css/css_configuracion_admin.css">';
        }
        echo '<section id="section_productos">';

        $conexion = conectar();
        $consulta = 'SELECT * FROM articulos'; 

        $resultado = mysqli_query($conexion, $consulta);
        if (mysqli_num_rows($resultado)>0) {
            $i = 0;
            while ($producto = mysqli_fetch_array($resultado)) {
                echo '<article id="article_producto'.$i.'">
                        <div class="card">  
                            <div class="front">
                                <img src="../img/productos/' .$producto['imagen'] .'" alt="GT bicycle">
                            </div>
                            <div class="back">
                                <div class="details">
                                    <h2>' .$producto['nombre_producto'] .'<br><span>Like the design</span></h2>
                                    <p>' .$producto['descripcion'] .'
                                    </p>
                                    <h3>$ ' .$producto['precio'] .'</h3>
                                    <div class="button">
                                        <button><a href="#">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Add to Cart</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                ';
                $i++;
            }
            echo "</section>";
        }
    } else {
        // echo "Inicie session para continuar";

        $ruta = '../../';
        include '../headers/header.php';
        include '../headers/menu.php';

        include "../helpers/conexion.php";
        $conexion = conectar();
        $consulta = 'SELECT * FROM articulos';

        $resultado = mysqli_query($conexion, $consulta);
        if (mysqli_num_rows($resultado)>0) {
            $i = 0;
            while ($producto = mysqli_fetch_array($resultado)) {
                echo '<article id="article_producto'.$i.'">
                        <div class="card">  
                            <div class="front">
                                <img src="../../img/productos/' .$producto['imagen'] .'" alt="GT bicycle">
                            </div>
                            <div class="back">
                                <div class="details">
                                    <h2>' .$producto['nombre_producto'] .'<br><span>Like the design</span></h2>
                                    <p>' .$producto['descripcion'] .'
                                    </p>
                                    <h3>$ ' .$producto['precio'] .'</h3>
                                    <div class="button">
                                        <button><a href="#">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Add to Cart</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                ';
                $i++;
            }
            echo "</section>";
        }
    }
?>