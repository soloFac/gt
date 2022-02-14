<?php
  session_start();
  if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni']) && isset($_GET['dni'])) {
      include 'conexion.php';
      $conexion = conectar();
      if ($conexion && isset($_GET['dni'])) {
          $dni = $_GET['dni'];
          $consulta = 'DELETE FROM usuarios WHERE dni = "'.$dni.'" ;';
          $resultado = mysqli_query($conexion, $consulta);
          desconectar($conexion);
          if ($resultado) {
              echo "Eliminacion exitosa";
          } else {
              echo "Error al tratar de eliminar al usuario";
          }
        }
        header("refresh:1.5;url=cliente_listado.php");
}else {
    echo "Inicie session";
    //header("refresh:2;url=../html/logueo.html");
}   
?>