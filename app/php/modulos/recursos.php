<?php

if ( ! isset( $get ) )
  exit;

$options = $recursos = $directorio = "";

if ( count($_GET) < 1 ) {
  $options = <<<HTML
  <div class="recursos__options">
    <a href="#" class="recursos__enlace recursos__enlace--view" data-src="multimedia/vectores/vista.svg"></a>
    <a href="#" class="recursos__enlace recursos__enlace--download" data-src="multimedia/vectores/descarga.svg"></a>
  </div>
HTML;
  
  $recursos = <<<HTML
  <div class="recursos recursos--portada">
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--consejos" data-src="multimedia/vectores/cuaderno.svg"></div>
      <div class="recursos__caption">
        <h3>Consejos Durante el Tratamiento</h3>
      </div>
  
      $options
    </div>
  
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--paciente" data-src="multimedia/vectores/la-paciente.svg"></div>
      <div class="recursos__caption">
        <h3>Manejo de Efectos Colaterales</h3>
      </div>
  
      $options
    </div>
  
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--recursos" data-src="multimedia/vectores/recurso.svg"></div>
      <div class="recursos__caption">
        <h3>Recursos para Sobrellevar el Tratamiento</h3>
      </div>
  
      $options
    </div>
  </div>
HTML;
  
  // Directorio de recursos:
  $directorio = <<<HTML
  <div class="directorio directorio--recursos">
    $recursos
  </div>
HTML;
}


$recursos = $directorio;
