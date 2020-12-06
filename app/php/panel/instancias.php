<?php
$protocolo = new DLProtocolo([
  "lunamontilla.net",
  "www.lunamontilla.net",
  "canceravanzadodemama.com",
  "www.canceravanzadodemama.com"
]);

// Peticiones:
$get = new DLPeticiones("get");
$post = new DLPeticiones("post");


// Variables globales:
$title = $content = $headerTitle = "";