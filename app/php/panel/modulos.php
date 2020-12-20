<?php

if ( !isset($get) )
  exit;

$modulos = <<<HTML
<div class="modulos">
  <a href="app/?estadisticas" class="modulos__item">
    <div>
      <h4>Estadísticas</h4>
      <p>Consulta los datos de la encuesta publicada en su sitio Web.</p>
    </div>

    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </a>

  <a href="app/?perfil" class="modulos__item">
    <div>
      <h4>Perfil</h4>
      <p>Actualice su dirección de correo, contraseña y foto de perfil </p>
    </div>

    <div class="destacado__imagen" data-src="multimedia/vectores/perfil.svg"></div>
  </a>
</div>
HTML;

?>

