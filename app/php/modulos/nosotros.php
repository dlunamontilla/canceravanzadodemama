<?php
$content = $nosotros = "";

if ( ! isset($get) )
  exit;

if ( $get -> modulo("nosotros") ) {
  $nosotros = <<<HTML
$cabecera

<div class="modulo modulo--fuveicam">
  <aside class="modulo__item modulo__item--sidebar">
    Barra lateral izquierda
  </aside>

  <section class="modulo__item modulo__item--section">
    <p>Contenido con diversos párrafos</p>
  </section>
</div>
HTML;

}


$content = $nosotros;
?>