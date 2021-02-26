<?php
// Consultar usuario:
if ( !isset($user) )
  $user = new DLUser();

if ( !isset($pdo) ) {
  echo "\$pdo se encuentra ausente";
  exit;
}

// Preparar una consulta a la base de datos:
$usuario = $pdo->prepare("SELECT * FROM `usuarios` WHERE usuario = :usuario AND password = :clave LIMIT 1;");

// Obtener token de la base de datos:
$obtenerToken = $pdo->prepare("SELECT * FROM usuarios WHERE token = :hash");

// Encuestas:
$encuestas = $pdo->prepare("SELECT * FROM encuesta;");

// Verificar si existe un token de inicio de sesión:
$token = $user->obtenerToken();

// Consultar token de la base de datos:
$obtenerToken->execute([
  ":hash" => $token
]);

// Actualizar el token de usuario durante el incio de sesión:
$actualizarUsuario = $pdo->prepare("UPDATE usuarios set token = :hash WHERE usuario = :usuario AND password = :clave");


//  Procesar inicio Sesión:
// Obtener el token de la base de datos:
$hash = "";
$hash = $obtenerToken->fetch( PDO::FETCH_ASSOC );
$hash = ( isset($hash['token']) ) ? $hash['token'] : "";