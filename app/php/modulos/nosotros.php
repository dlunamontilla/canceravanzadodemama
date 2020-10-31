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

  // Cuando el usuario se encuentre el módulo nosotros 
  // sin más parámetros:
  $atras = <<<HTML
<a href="./" class="navegar__enlace">
  <span>Inicio</span>
  <span data-src="multimedia/vectores/inicio.svg"></span>
</a>
HTML;


  $avanzar = <<<HTML
<a href="?sparc-uicc" class="navegar__enlace">
  <span data-src="multimedia/vectores/adelante.svg"></span>
  <span>SPARC - UICC</span>
</a>
HTML;
}

// Módulo SPARCS UICC
if ($get->modulo("sparc-uicc")) {
  $sidebar = <<<HTML
  <div class="sidebar__item sidebar__item--uicc" data-src="multimedia/vectores/uicc.svg"></div>

  <!-- Foto -->
  <div class="sidebar__item">
    <img src="multimedia/fotos/nosotros-sparc-sidebar.jpg" alt="">
  </div>

  <!-- Enlace de descarga -->
  <div class="sidebar__item sidebar__item--descarga">
    <a href="#" target="_blank" data-src="multimedia/vectores/descarga-pdf.svg"></a>
  </div>
HTML;

  $contenido = <<<HTML
<div class="content__item">
  <h2 class="text text--right">PROGRAMA SPARC-Unión Internacional Contra el Cáncer (UICC)</h2>

  <p class="text text--justify">Es un programa de apoyo a mujeres con cáncer de mama avanzado. Con el nombre Sembrando Progreso y Recursos para la Comunidad del Cáncer: el Reto del Cáncer de Mama Metastásico (SPARC, por sus siglas en inglés), esta iniciativa subvenciona proyectos en todo el mundo de grupos de defensa de pacientes, redes de hospitales y otras organizaciones sin fines de lucro que trabajan para abordar las necesidades específicas de las pacientes con cáncer de mama avanzado. Con la intención de salvar más vidas al reducir el número de mujeres diagnosticadas con cáncer de mama en una etapa tardía, los proyectos SPARC se centran en:</p>

  <ul class="lista">
    <li class="lista__item lista__item--right">
      <h3>Proporcionar información y apoyo</h3>
      <p class="text text--justify">Mejorando la capacidad del paciente para navegar por los servicios de diagnóstico, tratamiento y atención, y fortaleciendo el nivel de apoyo social, económico, psicológico y espiritual para los pacientes y sus cuidadores. Los proyectos también pueden centrarse en fortalecer la capacidad de los profesionales sanitarios para apoyar las necesidades específicas de las pacientes.</p>
    </li>

    <li class="lista__item lista__item--right">
      <h3>Aumentar la voz y la conciencia de los pacientes</h3>
      <p class="text text--justify">Reduciendo el estigma y aumentando la conciencia pública sobre el cáncer de mama avanzado. A través de una mayor conciencia, estos proyectos fomentan la presentación más temprana y el acceso a un tratamiento oportuno para disminuir la incidencia de enfermedad localmente avanzada y metastásica en el primer diagnóstico.</p>
    </li>

    <li class="lista__item lista__item--right">
      <h3>Influir en las Políticas Nacionales  y fortalecer los Sistemas de Salud</h3>
      <p class="text text--justify">Involucrando y proporcionando a los formuladores de políticas orientación sobre los desafíos únicos de la enfermedad metastásica a través de iniciativas de promoción efectivas, incluidas las perspectivas y necesidades de los pacientes.</p>
    </li>

  </ul>
</div>
HTML;

    // Cuando el usuario se encuentre el módulo nosotros 
  // sin más parámetros:
  $atras = <<<HTML
<a href="?nosotros" class="navegar__enlace">
  <span>Fuveicam</span>
  <span data-src="multimedia/vectores/atras.svg"></span>
</a>
HTML;


  $avanzar = <<<HTML
<a href="?abc-global" class="navegar__enlace">
  <span data-src="multimedia/vectores/adelante.svg"></span>
  <span>ABC - Global Alliance</span>
</a>
HTML;
}

// Módulo Abc Global Alliance:
if ($get->modulo("abc-global")) {
  // Cuando el usuario se encuentre el módulo nosotros 
// sin más parámetros:
  $atras = <<<HTML
<a href="?sparc-uicc" class="navegar__enlace">
  <span>SPARC - UICC</span>
  <span data-src="multimedia/vectores/atras.svg"></span>
</a>
HTML;


  $avanzar = <<<HTML
  <a href="./" class="navegar__enlace">
    <span data-src="multimedia/vectores/inicio.svg"></span>
    <span>Inicio</span>
  </a>
HTML;
}
?>