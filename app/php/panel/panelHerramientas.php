<?php

if ( !isset($get))
  exit;

// Variable global de herramientas:
$panelHerramientas = "";

// Seleccionar contenido en función de las peticiones de usuarios:
if ( ! count($_GET) > 0 )
  $panelHerramientas = $modulos;


if ( $get->modulo("estadisticas") )
  $panelHerramientas = $estadisticas;

if ( $get->modulo("perfil") )
  $panelHerramientas = $perfil;