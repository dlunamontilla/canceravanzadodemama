<?php
class DLConectar {
  public function __construct() {
    $this -> dsn = "mysql:dbname=cancerdemama;host=127.0.0.1";
    $this -> usuario = "david";
    $this -> password = "entorno2";
  }

  public function conectar() {
    return new PDO( $this -> dsn, $this -> usuario, $this -> password );
  }
}
?>