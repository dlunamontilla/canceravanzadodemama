<?php
  if ( ! class_exists("DLPeticiones") ) {
    exit;
  }
  
  // Instanciando las peticiones:
  $get = new DLPeticiones("get");
  $post = new DLPeticiones("post");
  

  include __DIR__ . "/vars.php";
  include __DIR__ . "/lib.php";

  // Plantillas Bootstrap
  include __DIR__ . "/datos-bootstrap.php";
  include __DIR__ . "/plantilla-bootstrap.php";

  // Glosario de términmos:
  include __DIR__ . "/tablaGlosario.php";
  
  // Índice de contenido:
  include __DIR__ . "/indice.php";
  
  // Barra lateral
  include __DIR__ . "/sidebar.php";
  include __DIR__ . "/sidebar-content.php";

  // Clases:
  include __DIR__ . "/css-class.php";
  
  // Menú de navegación:
  include __DIR__ . "/menu.php";
  
  // Buscador:
  include __DIR__ . "/buscador.php";
  
  // Otros:
  include __DIR__ . "/portada.php";
  include __DIR__ . "/recursos.php";
  
  // Cabecera:
  include __DIR__ . "/cabecera.php";
  
  // Nosotros:
  include __DIR__ . "/nosotros.php";
  
  // Herramientas:
  include __DIR__ . "/herramientas.php";
  include __DIR__ . "/herramientas-quimioterapia.php";
  include __DIR__ . "/terapia-dirigida.php";
  include __DIR__ . "/hormonoterapia.php";
  include __DIR__ . "/cirugia.php";
  include __DIR__ . "/radioterapia.php";
  
  // Conozca su enfermedad:
  include __DIR__ . "/conozca-su-enfermedad.php";
  include __DIR__ . "/cancer-metastasico.php";
  include __DIR__ . "/cuidados-paliativos.php";
  
  // La paciente:
  include __DIR__ . "/la-paciente.php";
  include __DIR__ . "/actitudes.php";
  include __DIR__ . "/su-entorno.php";
  include __DIR__ . "/herramientas-comunicacion.php";
  
  // Contenido y pie de página:
  include __DIR__ . "/content.php";
  include __DIR__ . "/footer.php";

  // Ventanas Modales:
  include __DIR__ . "/modalContent.php";
  include __DIR__ . "/ventanasModales.php";
  ?>