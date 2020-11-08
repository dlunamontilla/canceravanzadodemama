<?php
  if ( ! isset($get) )
    exit;

  function cadena(Array $array = []) : string {
    $string = "";

    if ( is_array($array) && count($array) > 0 ) {
      foreach( $array as $value ) {
        if ( !empty($value) ) return $value;
      }
    }
    
    return $string;
  }

  // Variables con contenidos dinámicos:
  $sidebar = $contenido = "";
  $atras = $avanzar = "";
  $adicionales = "";
  
  // Título de la cabecera de la página:
  $headerTitle = "";
  $headerTitle = cadena([
    $get->cadena("nosotros", "Fuveicam"),
    $get->cadena("sparc-uicc", "Sparc - UICC"),
    $get->cadena("abc-global", "ABC Global Alliance"),
    $get->cadena("herramientas", "Modalidades de Tratamientos"),
    $get->cadena("conozca", "Conozca su enfermedad"),
    $get->cadena("paciente", "Emociones de la Paciente a través del Proceso de su Enfermedad")
  ]);

  // Texto para la barra de título del navegador:
  $title = cadena([
    $get->cadena("nosotros", "Nosotros"),
    $get->cadena("herramientas", "Herramientas para la toma de decisiones"),
    $get->cadena("conozca", "Conozca su enfermedad"),
    $get->cadena("paciente", "La paciente y su proceso")
  ]);

  $title = (empty($title)) ? "Cáncer Avanzado de Mama" : $title . " | Cáncer Avanzado de Mama";

  // Figura de los senos:
  
  if ( $get->distribuirEnModulos() ) {

  }

  $senosCabecera = cadena([
    $get->cadena("nosotros", "multimedia/vectores/teta-cabecera.svg"),
    $get->cadena("sparc-uicc", "multimedia/vectores/teta-cabecera.svg"),
    $get->cadena("abc-global", "multimedia/vectores/teta-cabecera.svg"),
    $get->cadena("herramientas", "multimedia/vectores/teta-herramientas.svg"),
    $get->cadena("conozca", "multimedia/vectores/teta-conozca.svg"),
    $get->cadena("paciente", "multimedia/vectores/teta-paciente.svg"),
  ]);

  // Imágenes de la cabecera:
  $imgCabecera = "";
  $imgCabecera = cadena([
    $get->cadena("nosotros", "multimedia/fotos/fuveicam.jpeg"),
    $get->cadena("sparc-uicc", "multimedia/fotos/nosotros/nosotros-sparc.jpg"),
    $get->cadena("abc-global", "multimedia/fotos/nosotros/nosotros-abcgloballacience.jpg"),

    // Herramientas:
    $get->cadena("herramientas", "multimedia/fotos/herramientas/1.1. herramientas-anatomia-patologica.jpg"),

    // Conozca su enfermedad:
    $get->cadena("conozca", "multimedia/fotos/conozca-su-enfermedad/FotoCabecera.jpeg"),

    // La paciente y su enfermedad:
    $get->cadena("paciente", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg"),
  ]);
  ?>