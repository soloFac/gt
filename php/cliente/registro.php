<?php
    $ruta = '../../';
    require('../headers/header.php');
    echo '
            <link rel="stylesheet" href="'.$ruta.'css/cliente/registro.css">
        </head>';
    require('../headers/menu.php')
?>

<section class="fondo">
        <article class="left">
            <div class="container">
                <h1 class="title">Bienvenido a <img class="title__logo" src="../../img/login/logo.png" alt="GT"></h1>
                <form action="../php/cliente_nuevo.php" method="POST" enctype="multipart/form-data">

                    <input type="text" class="form__item first_fill" id="nombre" placeholder="nombre" name="nombre" maxlength="120"
                        required>

                    <input type="text" class="form__item first_fill" id="apellido" placeholder="apellido" name="apellido"
                        maxlength="120" required>

                    <input type="text" class="form__item first_fill" placeholder="43586958" id="dni" placeholder="dni" name="dni"
                        minlength="8" maxlength="8" required>

                    <input type="date" class="form__item first_fill" id="fecha_nac" placeholder="MM/DD/YYYY" name="fecha_nac" required>

                    <!-- <input type="date" class="form__item first_fill" id="fecha_nac" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" name="fecha_nac" required>
                 -->

                    <input type="email" class="form__item first_fill" id="mail" placeholder="mail" name="mail" maxlength="80"
                        required>

                    <input type="text" class="form__item first_fill" id="direccion" placeholder="direccion" name="direccion"
                        maxlength="120" required>

                    <input type="number" class="form__item first_fill" id="codigo_postal" placeholder="codigo postal"
                        name="codigo_postal" maxlength="15" required>

                    <input type="text" class="form__item first_fill" id="localidad" placeholder="localidad" name="localidad"
                        maxlength="100" required>
 
                    <input type="text" class="form__item second_fill" id="provincia" placeholder="provincia" name="provincia"
                        maxlength="100" required>

                    <input type="text" class="form__item second_fill" id="pais" placeholder="pais" name="pais" maxlength="80"
                        required>                   

                    <input type="tel" class="form__item second_fill" id="telefono" placeholder="telefono" name="telefono" pattern="[0-9]{11}" required>


                    <input type="text" class="form__item second_fill" id="fax" placeholder="fax" name="fax" maxlength="50">


                    <input type="text" class="form__item second_fill" id="usuario" placeholder="usuario" name="usuario" maxlength="60" required>


                    <input type="password" class="form__item second_fill" id="clave" placeholder="clave" name="clave" minlength="6" maxlength="40" required>


                    <input type="password" class="form__item second_fill" id="confirmar_clave" placeholder="confirmar clave" name="confirmar_clave" required>


                    <input type="file" class="form__item second_fill" id="foto_usuario" placeholder="foto usuario" name="foto">

                    <div class="siguiente">
                        <img src="../../img/registro/siguiente.png" class="siguiente_img" id="siguiente_img" alt="Siguiente">
                    </div>

                    <!-- <button id="mibotton">Hola</button> -->
                    <!-- Botones -->
                    <!-- <input id="btn-registro" type="submit" value="Registrarme">
                    <a href="../index.php">
                        <input id="btn-cancelar" type="button" value="Cancelar">
                    </a>

                    <input type="hidden" value="comun" name="tipo_usuario"> -->
                </form>
            </div>
        </article>
        <img src="../../img/login/flecha.png" alt="flecha" class="flecha">
    </section>

    <script src="../../js/cliente/registro.js" type="module"></script>

<?php
    // require('../footer.php');
?>