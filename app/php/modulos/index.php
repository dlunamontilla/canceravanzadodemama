<?php
  if ( ! class_exists("DLPeticiones") ) {
    exit;
  }

  // Instanciando las peticiones:
  $get = new DLPeticiones("get");
  $post = new DLPeticiones("post");

  include __DIR__ . "/lib.php";
  include __DIR__ . "/tablaGlosario.php";
  include __DIR__ . "/css-class.php";
  include __DIR__ . "/menu.php";
  include __DIR__ . "/buscador.php";
  include __DIR__ . "/portada.php";
  include __DIR__ . "/recursos.php";
  include __DIR__ . "/cabecera.php";
  include __DIR__ . "/nosotros.php";
  include __DIR__ . "/herramientas.php";
  include __DIR__ . "/herramientas-quimioterapia.php";
  include __DIR__ . "/terapia-dirigida.php";
  include __DIR__ . "/hormonoterapia.php";
  include __DIR__ . "/content.php";
  include __DIR__ . "/footer.php";
?>