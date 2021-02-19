<?php

# Consultas para el inicio de sesión

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

// TODO: Insertaremos datos de prueba para múltiples consultas:
$multiple = $pdo->prepare('insert into encuesta (`idencuesta`, `pregunta01`, `numero_encuesta`) values(null, :pregunta, 1)');

$multiple->execute([
  ":pregunta" => "V01"
]);