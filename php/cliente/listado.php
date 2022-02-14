<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) && ($_SESSION['tipo_usuario'] == 'admin')) {

        include 'header_admin.php';
        
        echo '<nav id="nav_buscador">
                <ul>
                    <li>
                        <form id="form_buscador" action="" method="GET" accept-charset="utf-8">
                            <label for="buscar">
                                <input type="search" name="buscar" id="buscar" placeholder="Buscar..">
                            </label>
                    </li>
                    <li>
                        <input type="submit" value="Search" id="submit_buscador">
                    </li>
                        </form>
                    
                </ul>
            </nav>';
?>
    <main>
        <section>
            <article>
                <?php
                include "conexion.php";
                $conexion = conectar();

                if (isset($_GET['buscar'])) {
                    $buscar = $_GET['buscar'];
                    $consulta = "SELECT * FROM usuarios WHERE(nombre like '%$buscar%' OR apellido like '%$buscar%' OR mail like '%$buscar%' 
                                OR direccion like '%$buscar%' OR localidad like '%$buscar%' OR provincia like '%$buscar%' OR pais like '%$buscar%' 
                                OR usuario like '%$buscar%' OR foto_usuario like '%$buscar%') ORDER BY apellido, nombre ASC";
                }else {
                    $consulta = "SELECT * FROM usuarios ORDER BY apellido, nombre ASC";
                }

                $resultado = mysqli_query($conexion, $consulta);
                echo "<table id='tabla_modificar_cliente'>
                            <tr>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>DNI</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Mail</th>
                                <th>Direccion</th>
                                <th>Provincia</th>
                                <th>Telefono</th>
                                <th>Usuario</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>";
                if (mysqli_num_rows($resultado)>0) {
                    
                    while ($cliente = mysqli_fetch_array($resultado)) {
                        echo '<tr>
                                    <td><img id="foto_modificar" src="../img/foto_cliente/'.$cliente['foto_usuario'].'"></td>
                                    <td>' .$cliente['nombre'].'</td>
                                    <td>' .$cliente['apellido'].'</td>
                                    <td>' .$cliente['dni'].'</td>
                                    <td>' .$cliente['fecha_nac'].'</td>
                                    <td>' .$cliente['mail'].'</td>
                                    <td>' .$cliente['direccion'].'</td>
                                    <td>' .$cliente['provincia'].'</td>
                                    <td>' .$cliente['telefono'].'</td>
                                    <td>' .$cliente['usuario'].'</td>
                                    <td><a href="cliente_modificar.php?dni='.$cliente['dni'].'"><img id="icono" src="../img/icono_modificar.png"></a></td>
                                    <td><a href="cliente_borrar_ok.php?dni='.$cliente['dni'].'"><img id="icono" src="../img/icono_eliminar.png"></a></td>
                                </tr>';

                    }
                } else {
                    echo "No hay ningun usuario con esas caracteristicas";
                }
                    echo "</table>";
                ?>
            </article>
        </section>
    </main>

<?php
    include '../php/footer.php';
    desconectar($conexion);

    } else {
        echo "Inicie session para ver el contenido";
        header ("refresh:3;url=../index.php");
    }
?>