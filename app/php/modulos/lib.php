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
    $get->cadena("nosotros", "Nosotros"),
    $get->cadena("herramientas", "Modalidades de Tratamientos"),
    $get->cadena("conozca", "Conozca su enfermedad"),
    $get->cadena("paciente", "La paciente y su proceso")
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
  $senosCabecera = cadena([
    $get->cadena("nosotros", "multimedia/vectores/teta-cabecera.svg"),
    $get->cadena("herramientas", "multimedia/vectores/teta-herramientas.svg"),
    $get->cadena("conozca", "multimedia/vectores/teta-conozca.svg"),
    $get->cadena("paciente", "multimedia/vectores/teta-paciente.svg"),
  ]);
  ?>