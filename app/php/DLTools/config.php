<?php
// Conexión con la base de datos:
  $dsn = "mysql:dbname=cancerdemama;host=127.0.0.1";
  $usuario = "david";
  $contraseña = "entorno2";

# INSTANCIAR EL OBJETO PDO:
$pdo = new PDO( $dsn, $usuario, $contraseña );
?>