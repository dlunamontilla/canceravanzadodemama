<?php

if ( !isset($get) )
  exit;

// Elementos de la página principal de Herramientas:
if ( $get->modulo("herramientas") )
  $sidebar .= $herramientas;