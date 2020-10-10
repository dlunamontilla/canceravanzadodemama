<?php

$title = "";

// Acerca de nosotros:
if ( $get -> validar(["nosotros" => true]) ) {
  $title = "Acerca de nosotros";
}

// Herramienta para la toma de decisiones:
if ( $get -> validar(["herramientas" => true]) ) {
  $title = "Herramienta para la toma de decisiones";
}

// Conozca su enfermedad:
if ( $get -> validar(["conozca" => true]) ) {
  $title = "Conozca su enfermedad";
}

// La paciente y su proceso:
if ( $get -> validar(["paciente" => true]) ) {
  $title = "La paciente y su proceso";
}

$portada = "";

if ( count($_GET) < 1 ) {
  $portada = <<<HTML
    <div class="portada">
      <div class="decoration decoration--left" data-src="multimedia/vectores/decoracion-izquierda.svg"></div>
  
      <div class="presentacion">
        <div class="presentacion__item presentacion__item--left">
          <div class="logotipo logotipo--presentacion" data-src="multimedia/vectores/logotipo-slogan.svg"></div>
  
          <!-- Iconos -->
          <div class="icon">
            <div class="icon__item icon__item--left">
              <a href="#" target="_blank" data-src="multimedia/vectores/fuveicam.svg"></a>
            </div>
  
            <div class="icon__item icon__item--center">
              <a href="#" target="_blank" data-src="multimedia/vectores/uicc.svg"></a>
            </div>
  
            <div class="icon__item">
              <a href="https://www.abcglobalalliance.org/" target="_blank" data-src="multimedia/vectores/abcglobalalliance.svg"></a>
            </div>
          </div>
        </div>
  
        <div class="presentacion__item presentacion__item--right" data-src="multimedia/vectores/seno-foto.svg"></div>
      </div>
  
    </div>
HTML;
}

if ( count($_GET) > 0 ) {
  $portada = <<<HTML

  <div class="relleno" id="relleno">
    <h2>$title</h2>
  </div>

HTML;
}