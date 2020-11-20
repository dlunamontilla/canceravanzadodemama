<?php
// Área donde se encuentra ubicado el contenido principal de la página

$content = "";

if ( $get->distribuirEnModulos([
  // Página de Nosotros:
  "nosotros",
  "sparc-uicc",
  "abc-global",

  // Herramientas:
  "herramientas",
  "herramientas-subtipos-moleculares",
  "estadificacion",
  "glosario",
  
  // Conozca su enfermedad:
  "conozca",

  // La pacidnte:
  "paciente"
]) ) {
  $content = <<<HTML
<div class="modulo modulo--fuveicam">
  <aside class="modulo__item modulo__item--sidebar">
    $sidebar
  </aside>

  <section class="modulo__item modulo__item--content">
    $contenido
  </section>

  $adicionales
</div>


<!-- Botones de avanzar o regresar -->
<nav class="navegar">
  $atras
  $avanzar
</nav>
HTML;
}
?>