<?php

$nosotros = "";

if ( ! isset($get) )
  exit;

if ($get->modulo("nosotros")) {
  $sidebar = <<<HTML
<div class="sidebar__item" data-src="multimedia/vectores/fuveicam.svg"></div>

<div class="sidebar__item destacado">
  <p class="texto texto--destacado-1">Disminuir la asimetría de la información para la co-creación de la atención entre las pacientes y los profesionales de la salud.</p>
</div>

<div class="sidebar__item">
  <img src="multimedia/fotos/nosotros--fuveican-sidebar.jpg" alt="Atención médica">
</div>
HTML;

  $contenido = <<<HTML
<div class="content__item">
  <h2 class="text text--right">Fundación Venezolana para la Educación e Investigación contra el Cáncer de Mama</h2>

  <article>
    <h3 class="text text--right">Visión</h3>
    <p class="text text--justify">Desarrollar una infraestructura de investigación y educación en cáncer de mama, dirigida por el  compromiso ético y la responsabilidad social. Nuestra agenda está basada en generar, compartir e implementar conocimientos para la disminuir la asimetría de información, para la cocreación de la atención entre las pacientes con cáncer de mama y los profesionales de la salud.</p>
  </article>

  <article>
    <h3 class="text text--right">Misión</h3>
    <p class="text text--justify">Facilitar a las pacientes con cáncer de mama a desarrollar una mejor perspectiva de su enfermedad, aportándoles las herramientas necesarias para la de Toma de Decisiones. El objetivo es capacitar a las pacientes y al personal de salud con información precisa que  permita navegar con certeza y participar de manera adecuada a la disponibilidad de recursos en el proceso de atención médica.</p>
  </article>

  <article>
    <div class="destacado">
      <p class="texto texto--destacado-1">Aportar las herramientas necesarias para la adecuada Toma de Decisiones, entendiendo con certeza el proceso.</p>
    </div>
  </article>
</div>
HTML;
}
?>