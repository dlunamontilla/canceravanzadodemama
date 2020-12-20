<?php

if ( !isset( $get ) || !isset( $user ) || !isset( $hash ) )
  exit;

$content = "";

// Si el usuario ha iniciado sesión:
if ( ! $user->autenticado($hash) )
  $content = $form;

// Panel de administración
if ( $user->autenticado($hash))
  $content = $panel;

  