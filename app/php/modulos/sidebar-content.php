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

if ( $get->modulo("quimioterapia") )
  $sidebar .= $quimioterapia;

if ( $get->modulo("hormonoterapia") )
  $sidebar .= $hormonoterapia;

if ( $get->modulo("terapia-dirigida") )
  $sidebar .= $terapiaDirigida;

if ( $get->modulo("cirugia") )
  $sidebar .= $cirugia;

if ( $get->modulo("radioterapia") )
  $sidebar .= $radioterapia;

if ( $get->modulo("conozca") )
  $sidebar .= $conozcaSuEnfermedad;

if ( $get->modulo("cancer-mama-metastasico") )
  $sidebar .= $cancerMatastasico;

if ( $get->modulo("cuidados-paliativos") )
  $sidebar .= $cuidadosPaliativos;

if ( $get->modulo("paciente") )
  $sidebar .= $emociones;

if ( $get->modulo("actitudes") )
  $sidebar .= $actitudes;

if ( $get->modulo("su-entorno") )
  $sidebar .= $suEntorno;

if ( $get->modulo("herramientas-comunicacion") )
  $sidebar .= $comunicacion;