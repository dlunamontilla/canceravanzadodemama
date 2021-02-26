<?php
$dir = preg_replace("/(panel)+$/", "DLTools", __DIR__);

$DLTools = $dir . "/index.php";
$query = __DIR__ . "/query.php";

if (!file_exists($DLTools) || !file_exists($query)) {
  exit;
}

include $DLTools;
include $config;
include $query;

// Consultar usuario:
$user = new DLUser();
$post = new DLPeticiones("post");

// $user->salir();

// print_r($hash);

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

      header("Location: ../../");
    }
  }
}