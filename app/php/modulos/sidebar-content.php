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