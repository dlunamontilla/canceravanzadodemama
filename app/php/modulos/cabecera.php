<?php

  if ( ! isset( $get ) )
    exit;

  $cabecera = "";

  if ( $get->distribuirEnModulos([
  "nosotros",
  "sparc-uicc",
  "abc-global",
  "herramientas",
  "conozca",
  "paciente"
]) ) {
    $cabecera = <<<HTML
  
  <div class="banner banner--fuveicam">
    <div class="banner__title">
      <h1>$headerTitle</h1>
    </div>

    <img class="banner__img" src="multimedia/fotos/fuveicam.jpeg" />

    <div class="banner__teta" data-src="$senosCabecera"></div>
  </div>

  <div class="redes-sociales redes-sociales--compartir">
    <ul class="compartir">
      <li class="compartir__item"><a class="compartir__enlace compartir__enlace--twitter" href="//twitter.com" data-src="multimedia/vectores/twitter.svg" target="_blank"></a></li>
      <li class="compartir__item"><a class="compartir__enlace compartir__enlace--google-plus" href="#" data-src="multimedia/vectores/google-plus.svg" target="_blank"></a></li>
      <li class="compartir__item"><a class="compartir__enlace compartir__enlace--facebook" href="//facebook.com/" data-src="multimedia/vectores/facebook.svg" target="_blank"></a></li>
      <li class="compartir__item"><a class="compartir__enlace compartir__enlace--instagram" href="//instagram.com/" data-src="multimedia/vectores/instagram.svg" target="_blank"></a></li>
    </ul>
  </div>
HTML;
  }
?>