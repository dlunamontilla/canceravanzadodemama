<?php

if ( !isset($get) )
  exit;

$ventanasModales = <<<HTML
  <div class="modal$mostrar" id="modal" data-tipo="modal-main">
    <div class="modal__wrapper">
      <div class="modal__header">
        <h3>$modalTitle</h3>
        <button id="salir" class="modal__salir">&times;</button>
      </div>
  
      <div class="modal__content">
        $modalContent
      </div>
    </div>
  </div>
HTML;
