<?php

if ( !isset($get) )
  exit;


$panel = "";

$panel = <<<HTML
  <div class="panel">
    <header class="panel__header"></header>

    <div class="panel__content">
      <h1>Contenido del panel de administración</h1>
    </div>
  </div>
HTML;