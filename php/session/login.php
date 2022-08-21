<?php
  $ruta = '../../';

  include '../headers/header.php';

  // estilo propio de esta pagina
  echo '<link rel="stylesheet" href="../../css/login.css">';

  include '../headers/menu.php';

  // $ruta = '../../';

  echo '<section class="fondo">
          <article class="imagenes">
              <img src="../../img/login/logo.png" alt="logo" class="logo">
          </article>
          <img src="../../img/login/flecha.png" alt="flecha" class="flecha">
          <img src="../../img/login/flecha-horizontal.png" alt="flecha" class="flecha-horizontal">
          <article class="rigth bottom">
              <h1>Ingresar a mi cuenta</h1>
              <form action="logueo.php" method="post">
                  <input type="text" name="usuario" placeholder="usuario" maxlength="80" id="usuario" required>

                  <input type="password" name="clave" placeholder="password" maxlength="60" id="password" required>

                  <section class="submit_buttons">
                      <a class="link_volver" href="../../index.php"><input type="button" value="Volver"></a>
                      <input type="submit" value="Entrar">
                  </section>
              </form>
          </article>
        </section>';

?>