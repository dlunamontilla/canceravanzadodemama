<?php
  if ( ! class_exists("DLPeticiones") ) {
    exit;
  }

  $get = new DLPeticiones("get");
  
  include __DIR__ . "/menu.php";
  include __DIR__ . "/buscador.php";
  include __DIR__ . "/portada.php";
  include __DIR__ . "/footer.php";
?>