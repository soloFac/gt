<?php
    $ruta = './';
    include 'php/headers/header.php'
?>
<body>
    <main>
        <nav class="menu-principal">
            <header class="menu-principal__logo">
                <img class="menu-principal__logo__img" src="img/gt-logo.png">
            </header>
            <ul class="menu-principal__ul">
                <li class="menu-principal__item">
                    <a class="menu-principal__item__a" id="prueba" href="index.php">Inicio</a>
                </li>
                <li class="menu-principal__item">
                    <a class="menu-principal__item__a" href="php/producto/listado.php">Productos</a>
                </li>
                <li class="menu-principal__item">
                    <a class="menu-principal__item__a" href="php/session/login.php">Login</a>
                </li>
                <li class="menu-principal__item">
                    <a class="menu-principal__item__a" href="php/cliente/registro.php">Registrarme</a>
                </li>
            </ul>
        </nav>