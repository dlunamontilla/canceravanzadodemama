<?php

if ( !isset( $get ) )
  exit;


$content = $form = "";

// Contenido provisioanl

$form = <<<HTML
<div class="sesion">
  <div class="sesion__content">
    <div class="sesion__logo" data-src="../multimedia/vectores/logotipo-slogan.svg"></div>
    
    <hr>

    <form class="sesion__form" action="" method="post">
      <label class="sesion__label" for="usuario">
        <span class="sesion__caption">Usuario:</span>
        <input class="sesion__input" type="text" name="usuario" id="usuario">
      </label>

      <label class="sesion__label" for="password">
        <span class="sesion__caption">Contraseña:</span>
        <input class="sesion__input" type="password" name="password" id="password">
      </label>

      <div class="group-button">
        <button type="submit" class="button button--success">Iniciar Sesión</button>
      </div>
    </form>

  </div>
</div>

HTML;

$content = $form;