<?php
// Área donde se encuentra ubicado el contenido principal de la página

$content = "";

if ( $get->distribuirEnModulos([
  "nosotros",
  "sparc-uicc",
  "abc-global",
  "herramientas",
  "conozca",
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
</div>

$adicionales

<!-- Botones de avanzar o regresar -->
<nav class="navegar">
  $atras
  $avanzar
</nav>
HTML;
}
?>