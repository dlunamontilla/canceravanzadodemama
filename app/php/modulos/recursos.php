<?php

if ( ! isset( $get ) )
  exit;

$options = $recursos = $directorio = "";

if ( count($_GET) < 1 ) {
  $options = <<<HTML
  <div class="recursos__options">
    <a href="descargas/Terapia_del_Dolor_para_Pacientes_con_Cáncer_de_Mama_Avanzado.pdf" class="recursos__enlace recursos__enlace--view" data-src="multimedia/vectores/vista.svg" target="_blank"  data-title="Terapia del Dolor"></a>
    <a href="descargas/Terapia_del_Dolor_para_Pacientes_con_Cáncer_de_Mama_Avanzado.pdf" class="recursos__enlace recursos__enlace--download" data-src="multimedia/vectores/descarga.svg" target="_blank"></a>
  </div>
HTML;

  $manejoEfectosColaterales = <<<HTML
  <div class="recursos__options">
    <a href="app/ajax/manejo-efectos-colaterales.json" class="recursos__enlace recursos__enlace--view" data-src="multimedia/vectores/vista.svg" target="_blank"  data-title="Manejo de Efectos Colaterales"></a>
  </div>
HTML;

  $recursosParaSobrellevarTratamiento = <<<HTML
  <div class="recursos__options">
    <a href="app/ajax/recursos-sobrellevar-tratamiento.json" class="recursos__enlace recursos__enlace--view" data-src="multimedia/vectores/vista.svg" target="_blank"  data-title="Recursos para Sobrellevar el Tratamiento"></a>
  </div>
HTML;
  
  $recursos = <<<HTML
  <div class="recursos recursos--portada">
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--consejos" data-src="multimedia/vectores/cuaderno.svg"></div>
      <div class="recursos__caption">
        <h3>Terapia del Dolor</h3>
      </div>
  
      $options
    </div>
  
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--paciente" data-src="multimedia/vectores/la-paciente.svg"></div>
      <div class="recursos__caption">
        <h3>Manejo de Efectos Colaterales</h3>
      </div>
  
      $manejoEfectosColaterales
    </div>
  
    <div class="recursos__item">
      <div class="recursos__icon recursos__icon--recursos" data-src="multimedia/vectores/recurso.svg"></div>
      <div class="recursos__caption">
        <h3>Recursos para Sobrellevar el Tratamiento</h3>
      </div>
  
      $recursosParaSobrellevarTratamiento
    </div>
  </div>
HTML;
  
  // Directorio de recursos:
  $directorio = <<<HTML
  <div class="directorio directorio--recursos">
    $recursos
  </div>
HTML;
}


$recursos = $directorio;
