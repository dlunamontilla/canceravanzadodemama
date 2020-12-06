<?php

// Preparar una consulta a la base de datos:
$usuario = $pdo->prepare("SELECT * FROM `usuarios` WHERE usuario = :usuario AND password = :clave LIMIT 1;");

// Actualizar el token de usuario durante el incio de sesión:
$actualizarUsuario = $pdo->prepare("UPDATE usuarios set token = :hash WHERE usuario = :usuario AND password = :clave");

// Obtener token de la base de datos:
$obtenerToken = $pdo->prepare("SELECT * FROM usuarios WHERE token = :hash");

// Encuestas:
$encuestas = $pdo->prepare("SELECT * FROM encuesta;");

// Consultar usuario:
$user = new DLUser();

// Verificar si existe un token de inicio de sesión:
$token = $user->obtenerToken();

// Consultar token de la base de datos:
$obtenerToken->execute([
  ":hash" => $token
]);

// Obtener el token de la base de datos:
$hash = "";
$hash = $obtenerToken->fetch( PDO::FETCH_ASSOC );
$hash = ( isset($hash['token']) ) ? $hash['token'] : "";

// Iniciar sesión de usuario si no lo ha hecho antes:
if ( ! $user->autenticado( $hash ) ) {
  // Credenciales de inicio de sesión:
  $credenciales = [
    "usuario" => false,
    "password" => false
  ];

  // Validar las credenciales del usuario y 
  // actualizar y crear una nueva sesión:
  if ( $post->validar($credenciales) ) {
    $user->user = (string) $_POST['usuario'];
    $user->password = (string) $_POST['password'];
  
    // Crear hash para iniciar sesión:
    if ( $user->crearHash() ) {
      $actualizarUsuario->execute([
        ":hash" => $user->hash,
        ":usuario" => $user->user,
        ":clave" => sha1($user->password)
      ]);
  
      $user->autenticar( $user->hash );
    }
  }

}