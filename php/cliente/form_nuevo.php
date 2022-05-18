<?php
    $ruta = '../../';
    require('../headers/header.php');
    echo '
            <link rel="stylesheet" href="'.$ruta.'css/form_nuevo.css">
        </head>';
    require('../headers/menu.php')
?>

<h1 class="title">Crear tu cuenta en GT</h1>
<section>
    <article class="article">
        <form action="../php/cliente_nuevo.php" method="POST" enctype="multipart/form-data">

            <div class="form__item">
                <label for="usuario"></label>
                <input type="text" id="usuario" placeholder="usuario" name="usuario" maxlength="60" required>
            </div>

            <div class="form__item">
                <label for="clave"></label>
                <input type="password" id="clave" placeholder="clave" name="clave" minlength="6" maxlength="40" required>
            </div>

            <div class="form__item">
                <label for="confirmar_clave"></label>
                <input type="password" id="confirmar_clave" placeholder="confirmar clave" name="confirmar_clave" required>
            </div>

            <div class="form__item">
                <label for="nombre"></label>
                <input type="text" id="nombre" placeholder="nombre" name="nombre" maxlength="120" required>
            </div>

            <div class="form__item">
                <label for="apellido"></label>
                <input type="text" id="apellido" placeholder="apellido" name="apellido" maxlength="120" required>
            </div>

            <div class="form__item">
                <label for="dni"></label>
                <input type="text" placeholder="43586958" id="dni" placeholder="dni" name="dni" minlength="8" maxlength="8" required>
            </div>

            <div class="form__item">
                <label for="fecha_nac"></label>
                <input type="date" id="fecha_nac" placeholder="fecha_nac" name="fecha_nac" required>
            </div>

            <div class="form__item">
                <label for="mail"></label>
                <input type="email" id="mail" placeholder="mail" name="mail" maxlength="80" required>
            </div>

            <div class="form__item">
                <label for="direccion"></label>
                <input type="text" id="direccion" placeholder="direccion" name="direccion" maxlength="120" required>
            </div>

            <div class="form__item">
                <label for="codigo_postal"></label>
                <input type="number" id="codigo_postal" placeholder="codigo postal" name="codigo_postal" maxlength="15" required>
            </div>

            <div class="form__item">
                <label for="localidad"></label>
                <input type="text" id="localidad" placeholder="localidad" name="localidad" maxlength="100" required>
            </div>

            <div class="form__item">
                <label for="provincia"></label>
                <input type="text" id="provincia" placeholder="provincia" name="provincia" maxlength="100" required>
            </div>

            <div class="form__item">
                <label for="pais"></label>
                <input type="text" id="pais" placeholder="pais" name="pais" maxlength="80" required>
            </div>

            <div class="form__item">
                <label for="telefono"></label>
                <input type="tel" id="telefono" placeholder="telefono" name="telefono" pattern="[0-9]{11}" required>
            </div>

            <div class="form__item">
                <label for="fax"></label>
                <input type="text" id="fax" placeholder="fax" name="fax" maxlength="50">
            </div>

            <div class="form__item">
                <label for="foto_usuario"></label>
                <input type="file" id="foto_usuario" placeholder="foto_usuario" name="foto">
            </div>

            <!-- Botones -->
            <input id="btn-registro" type="submit" value="Registrarme">
            <a href="../index.php">
                <input id="btn-cancelar" type="button" value="Cancelar">
            </a>

            <input type="hidden" value="comun" name="tipo_usuario">
        </form>
    </article>
    <article>
        <img src="../../img/form_nuevo/logo.jpg" alt="">
    </article>
</section>

<?php
require('../footer.php');
?>