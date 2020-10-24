<?php

if ( ! isset($get) )
  exit;

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
              <a href="https://www.uicc.org/" target="_blank" data-src="multimedia/vectores/uicc.svg"></a>
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