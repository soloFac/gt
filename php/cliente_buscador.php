<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) 
    && isset($_SESSION['dni']) && $_SESSION['tipo_usuario'] == 'admin') {
        include 'header_admin.php';
?>
<nav>
    <ul>
        <li>
            <form action="" method="GET" accept-charset="utf-8">
                <label for="buscar">
                    <input type="search" name="buscar" id="buscar" placeholder="Buscar..">
                </label>
        </li>
        <li>
            <input type="submit" value="Search">
        </li>
            </form>
        
    </ul>
</nav>

<?php

    include 'conexion.php';
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

    if (mysqli_num_rows($resultado) > 0) {
        while ($cliente = mysqli_fetch_array($resultado)) {
            echo $cliente['nombre'];
        }
    }

    desconectar($conexion);

    include 'footer.php';
} else {
    echo "Inicie session para ver el contenido";
}
?>