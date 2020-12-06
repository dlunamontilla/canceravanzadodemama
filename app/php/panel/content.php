<?php

if ( !isset( $get ) )
  exit;


$content = $form = "";

// Contenido provisioanl

$form = <<<HTML
<div class="sesion">
  <div class="sesion__content">
    <div class="sesion__logo" data-src="../multimedia/vectores/logotipo-slogan.svg"></div>
    
    <form class="sesion__form" action="" method="post">
      <label class="sesion__label" for="usuario">
        <span>Usuario:</span>
        <input type="text" name="usuario" id="usuario">
      </label>

      <label class="sesion__label" for="password">
        <span>Contraseña:</span>
        <input type="password" name="password" id="password">
      </label>
    </form>

  </div>
</div>

HTML;

$content = $form;