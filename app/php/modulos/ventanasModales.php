<?php

if ( !isset($get) )
  exit;

$ventanasModales = <<<HTML
  <div class="modal$mostrar" id="modal" data-tipo="modal-main">
    <div class="modal__wrapper">
      <div class="modal__header">
        <h3 id="modalTitle">$modalTitle</h3>
        <button id="salir" class="modal__salir">&times;</button>
      </div>
  
      <div class="modal__content" id="modal-content">
        $modalContent
      </div>
    </div>
  </div>
HTML;

$plantillaModal = <<<HTML
  <div class="modal">
    <div class="modal__wrapper">
      <div class="modal__header">
        <h3></h3>
        <button class="modal__salir">&times;</button>
      </div>
  
      <div class="modal__content"></div>
    </div>
  </div>
HTML;