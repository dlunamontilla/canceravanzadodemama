<?php

if ( !isset($get) )
  exit;


$panel = "";

$panel = <<<HTML
  <div class="panel">
    <header class="panel__header">
      <a href="./app/" class="logotipo logotipo--header" data-src="multimedia/vectores/logotipo-slogan-blanco.svg"></a>

      <div class="user user--info">
        <img class="user__img" src="multimedia/vectores/avatar.svg" alt="David E Luna M">
        <span class="user__caption">David E Luna M</span>
        <a href="app/?salir" class="user__enlace">
            <span data-src="multimedia/vectores/salir.svg"></span>
            <span>Salir</span>
        </a>
      </div>
    </header>

    <div class="panel__content">
      $panelHerramientas
    </div>
  </div>
HTML;