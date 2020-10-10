<?php
$footer = "";

$footer = <<<HTML

  <footer class="footer">
    <div class="f-inner">
      <!-- <div class="f-inner__item" data-src="multimedia/vectores/logotipo-slogan-blanco.svg"></div> -->
      <div class="f-inner__item" data-src="multimedia/vectores/isotipo.svg"></div>

      <div class="f-inner__item">
        $footerMenu
      </div>

      <div class="f-inner__item">
        <div class="f-inner__content">
          <p data-src="multimedia/vectores/nosotros.svg" class="f-inner__nosotros f-inner__nosotros--icon"></p>
          <p class="text--justify text--small">Cáncer Avanzado de Mama es una iniciativa desarrollada por la Fundación Venezolana para
          la Educación e Investigación contra el Cáncer de Mama (FUVEICAM) como parte del Desafío
          SPARC (Programa de subvenciones de la UICC, entregado en asociación con Pfizer).</p>

          <p class="text--justify text--small">La Fundación Venezolana para la Educación e Investigación contra el Cáncer de Mama
          (FUVEICAM) es una Organización No-Gubernamental (ONG), sin fines de lucro dedicada a
          educar y proporcionar información a personas afectadas por Cáncer de Mama y a los
          profesionales de la salud que se encargan de sus cuidados.</p>

         
          <span class="text--small">RIF J-406360716</span>
        </div>
      </div>

      <div class="f-inner__item">
        <div class="f-inner__content">
          <h3 class="title--contacto">Contáctanos</h3>
          <p class="text text--margin-none"><a href="mailto:fuveicam@gmail.com" class="f-inner__enlace" target="_blank">fuveicam@gmail.com</a></p>
          <ul class="redes-sociales">
            <li class="redes-sociales__item"><a class="redes-sociales__enlace" href="#" data-tipo="google-plus" target="_blank" data-src="multimedia/vectores/google-plus.svg"></a></li>
            <li class="redes-sociales__item"><a class="redes-sociales__enlace" href="#" data-tipo="instagram" target="_blank" data-src="multimedia/vectores/instagram.svg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

HTML;
