<?php
  if ( !isset($get) )
    exit;

  // Quimioterapia:
  if ( $get->modulo("quimioterapia") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">+ Quimioterapia</h2>

    </div>
HTML;
    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="./" class="navegar__enlace">
      <span>Inicio</span>
      <span data-src="multimedia/vectores/inicio.svg"></span>
    </a>
HTML;
    
    
    $avanzar = <<<HTML
    <a href="?terapia-dirigida" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Terapia Dirigida</span>
    </a>
HTML;
  }