<?php
if ( !isset($get) )
  exit;

if ( $get->modulo("perfil") ) {
  $title = "Perfiles de usuarios";
}

$perfil = <<<HTML
<div class="panel__perfil">
  <h1>Actualice su perfil</h1>
  <hr>
</div>
HTML;