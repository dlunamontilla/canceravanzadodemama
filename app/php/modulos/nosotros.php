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
  <img class="sidebar__img" src="multimedia/fotos/nosotros--fuveican-sidebar.jpg" alt="Atención médica">
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
    <img class="sidebar__img" src="multimedia/fotos/nosotros-sparc-sidebar.jpg" alt="">
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
  $sidebar = <<<HTML
<div class="sidebar__item" data-src="multimedia/vectores/abcglobalalliance.svg"></div>
<div class="sidebar__item sidebar__item--descarga">
  <a href="#" data-src="multimedia/vectores/descarga-global-pdf.svg" target="_blank"></a>
</div>
HTML;

  $contenido = <<<HTML
<div class="content__item">
  <h2 class="text text--right">ALIANZA GLOBAL CONTRA EL CÁNCER DE MAMA AVANZADO (CMA)</h2>

  <p class="text text--justify">
    La ABC Global Alliance (Alianza Mundial contra el CMA), es una plataforma con múltiples participantes y respaldada por la ESO (European School of Oncology o Escuela Europea de Oncología) iniciada en noviembre 2016, que impulsa la Declaración Mundial sobre el CMA y alienta al colectivo de afectados, a los responsables políticos y a la opinión pública en todo el mundo a trabajar juntos para ayudar a cambiar el futuro de los pacientes con CMA. La Declaración Mundial sobre el CMA pretende fomentar un cambio en la asistencia de los pacientes con CMA, adaptando acciones para que sean pertinentes y factibles en diferentes lugares geográficos según sus capacidades. Las Acciones para el Cambio aspiran lograr objetivos a corto y largo plazo, dar voz a los pacientes, priorizar sus necesidades a la hora de tomar decisiones y finalmente a mejorar y prolongar su vida. La meta es unir al colectivo de afectados por el CMA, y ser un catalizador de cambio que mejore el desenlace para los pacientes con CMA. Los profesionales sanitarios, los gobiernos, los responsables de las políticas sanitarias, los defensores de los pacientes, los miembros de la comunidad de afectados por el cáncer de mama y cualquier persona cuya vida haya sido trastocada por el CMA deben emprender acciones a nivel local e internacional con vistas a alcanzar los objetivos para el año 2025 descritos a continuación:
  </p>
</div>
HTML;

  $atras = <<<HTML
<a href="?sparc-uicc" class="navegar__enlace">
  <span>SPARC - UICC</span>
  <span data-src="multimedia/vectores/atras.svg"></span>
</a>
HTML;

  $avanzar = <<<HTML
  <a href="?herramientas" class="navegar__enlace">
    <span data-src="multimedia/vectores/adelante.svg"></span>
    <span>Herramientas</span>
  </a>
HTML;

  $volver = <<<HTML
  <a href="?nosotros" class="navegar__enlace">
    <span data-src="multimedia/vectores/volver.svg"></span>
    <span>Volver</span>
  </a>
HTML;
    
  // Infografía:
  $adicionales = <<<HTML
  <div class="content content--infografia">
      <div class="infografia">
        <div class="infografia__item infografia__item--1 frontal frontal--infografia-1">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-1.svg">1</div>
          <div class="infografia__right">Ayudar a los pacientes con CAM a vivir más tiempo duplicando la mediana de superviviencia global para el año 2025.</div>
        </div>
        
        <div class="infografia__item infografia__item--2 frontal frontal--infografia-2">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-2.svg">2</div>
          <div class="infografia__right">Mejorar nuestros conocimientos sobre el CAM aumentando la recopilación de datos de gran calidad.</div>
        </div>
        
        <div class="infografia__item infografia__item--3 frontal frontal--infografia-3">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-3.svg">3</div>
          <div class="infografia__right">Mejorar la calidad de vida de los pacientes con CAM.</div>
        </div>
        
        <div class="infografia__item infografia__item--4 frontal frontal--infografia-4">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-4.svg">4</div>
          <div class="infografia__right">Asegurarse de que los pacientes con CAM reciban el mejor tratamiento y atención posibles aumentando la disponibilidad y el acceso a la atención por parte del equipo multidisciplinar.</div>
        </div>
        
        <div class="infografia__item infografia__item--5 frontal frontal--infografia-5">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-5.svg">5</div>
          <div class="infografia__right">Mejorar la comunicación entre los profesionales sanitarios y los pacientes con CAM a través de la formación en habilidades de comunicación para profesionales sanitarios.</div>
        </div>
        
        <div class="infografia__item infografia__item--6 frontal frontal--infografia-6">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-6.svg">6</div>
          <div class="infografia__right">Conocer las necesidades de información de los pacientes con CAM mediante el uso de materiales y recursos de información fáciles de entender, precisos y actualizados.</div>
        </div>
        
        <div class="infografia__item infografia__item--7 frontal frontal--infografia-7">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-7.svg">7</div>
          <div class="infografia__right">Asegurarse de que los pacientes con CAM conozcan y sean derivados a servicios de apoyos no clínicos.</div>
        </div>
        
        <div class="infografia__item infografia__item--8 frontal frontal--infografia-8">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-8.svg">8</div>
          <div class="infografia__right">Contrarestar el estigma y el aislamiento asociados con el CAM al aumentar el conocimiento público de la enfermedad.</div>
        </div>
        
        <div class="infografia__item infografia__item--9 frontal frontal--infografia-9">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-9.svg">9</div>
          <div class="infografia__right">Asegurarse de que los pacientes con CAM tengan acceso al tratamiento con independencia de su capacidad de pago.</div>
        </div>
        
        <div class="infografia__item infografia__item--10 frontal frontal--infografia-10">
          <div class="infografia__left" data-src="multimedia/vectores/infografia-10.svg">10</div>
          <div class="infografia__right">Ayudar a los pacientes con CAM a seguir trabajando, al implantar una legislación que proteja su derecho al trabajo y garantice entornos laborales flexibles y adaptables.</div>
        </div>

        <div class="infografia__item infografia__item--11 frontal frontal--infografia-10"></div>
        <div class="infografia__item infografia__item--12 frontal frontal--infografia-10"></div>
        <div class="infografia__item infografia__item--13 frontal frontal--infografia-10"></div>
      </div>
  </div>
HTML;
}
?>