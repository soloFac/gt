<?php
    session_start();
    $ruta = '';
    $css = ['normalize.css', 'menu.css', 'footer.css', 'inicio.css'];
    
    require 'php/headers/header.php';
    if (isset($_SESSION['usuario']) && isset($_SESSION['tipo_usuario']) && isset($_SESSION['dni'])) {
        if ($_SESSION['tipo_usuario'] == 'admin') {
            include '../GT/php/headers/index/admin.php';
        } elseif ($_SESSION['tipo_usuario'] == 'comun') {
            include '../GT/php/headers/index/usuario.php';
        }
        
    } else {
        require('../GT/php/headers/index/publico.php');
    }
    include 'html/inicio.html';
    
    include 'php/footer.php';
?>