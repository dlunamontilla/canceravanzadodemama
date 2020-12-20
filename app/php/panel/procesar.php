<?php
/**
 * Procesar peticiones de usuarios
 */

//  Procesar inicio Sesión:
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