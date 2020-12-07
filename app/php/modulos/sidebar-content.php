<?php

if ( !isset($get) )
  exit;

// Elementos de la página principal de Herramientas:
if ( $get->modulo("herramientas") )
  $sidebar .= $herramientas;

// Página | Subtipos Moleculares:
if ( $get->modulo("herramientas-subtipos-moleculares") )
  $sidebar .= $subtiposMoleculares;

if ( $get->modulo("estadificacion") )
  $sidebar .= $estadificacion;

