<?php

if ( !isset($get) )
  exit;

$form = "";

$form = <<<HTML
  <div class="sesion">
    <div class="sesion__content">
      <div class="sesion__logo" data-src="multimedia/vectores/logotipo-slogan.svg"></div>
      
      <form class="sesion__form" action="" method="post">
        <label class="sesion__label" for="usuario">
          <span class="sesion__caption">Usuario:</span>
          <input class="sesion__input" type="text" name="usuario" id="usuario">
        </label>

        <label class="sesion__label" for="password">
          <span class="sesion__caption">Contraseña:</span>
          <input class="sesion__input sesion__input--password" type="password" name="password" id="password">
        </label>

        <div class="sesion__info" id="sesionInfo"></div>

        <div class="sesion__buttons">
          <button type="submit" class="button button--success">Ingresar</button>
        </div>
      </form>

    </div>
  </div>

HTML;