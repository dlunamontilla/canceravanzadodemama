<?php

function obtenerDatos( $array, $clave ) : array {
  $datos = [];

  if ( ! is_array($array) || ! count($array) > 0)
      return $datos;


  foreach( $array as $value ) {
      if (is_array($value) && array_key_exists($clave, $value))
          array_push($datos, $value[$clave]);
  }

  return $datos;
}

function cadena(Array $array = []) : string {
  $string = "";

  if ( is_array($array) && count($array) > 0 ) {
    foreach( $array as $value ) {
      if ( !empty($value) ) return $value;
    }
  }
  
  return $string;
}

$modulos = array_merge(
  obtenerDatos($menuNosotros, "param" ),
  obtenerDatos($menuHerramientas, "param"),
  obtenerDatos($menuConozcaSuEnfermedad, "param"),
  obtenerDatos($menuLaPaciente, "param")
);

$headerTitle = cadena([
  // Acerca de nosotros:
  $get->cadena("nosotros", "Fuveicam"),
  $get->cadena("sparc-uicc", "Sparc - UICC"),
  $get->cadena("abc-global", "ABC Global Alliance"),

  // Herramientas:
  $get->cadena("herramientas", "Entienda su<br>diagnóstico"),
  $get->cadena("herramientas-subtipos-moleculares", "Entienda su<br>Diagnóstico"),
  $get->cadena("estadificacion", "Entienda su<br>Diagnóstico"),
  $get->cadena("glosario", "Entienda su<br>Diagnóstico"),
  
  // Herramientas | Parte 2:
  $get->cadena("quimioterapia", "Modalidades de<br>Tratamiento"),
  $get->cadena("terapia-dirigida", "Modalidades de<br>Tratamiento"),
  $get->cadena("hormonoterapia", "Modalidades de<br>Tratamiento"),
  $get->cadena("cirugia", "Modalidades de<br>Tratamiento"),
  $get->cadena("radioterapia", "Modalidades de<br>Tratamiento"),
  
  // Conozca su enfermedad:
  $get->cadena("conozca", "Cáncer Avanzado de Mama. <br>Cáncer de Mama Localmente <br> Avanzado"),
  $get->cadena("cancer-mama-metastasico", "Cáncer de Mama Avanzado.<br>Cáncer De Mama Metastásico"),
  $get->cadena("cuidados-paliativos", "Recursos para Sobrellevar<br>el Tratamiento"),
  
  // La paciente y su proceso:
  $get->cadena("paciente", "Emociones de la Paciente<br> a través del Proceso de su <br>Enfermedad"),
  $get->cadena("actitudes", "La Paciente: Actitudes"),
  $get->cadena("su-entorno", "La Paciente y su Entorno"),
  $get->cadena("herramientas-comunicacion", "Herramientas de <br>Comunicación"),
]);

// Texto para la barra de título del navegador:
$title = cadena([
  $get->cadena("nosotros", "Nosotros"),
  $get->cadena("herramientas", "Herramientas para la toma de decisiones"),
  $get->cadena("conozca", "Conozca su enfermedad"),
  $get->cadena("paciente", "La paciente y su proceso"),

  // La paciente y su proceso
  $get->cadena("su-entorno", "La Paciente y su Entorno"),
  $get->cadena("actitudes", "La Paciente: Actitudes"),
  $get->cadena("herramientas-comunicacion", "Herramientas de Comunicación"),
]);

$title = (empty($title)) ? "Cáncer Avanzado de Mama" : $title . " | Cáncer Avanzado de Mama";

// Seno en la cabecera de la página:
$senosCabecera = cadena([
  // Acerca de nosotros:
  $get->cadena("nosotros", "multimedia/vectores/teta-cabecera.svg"),
  $get->cadena("sparc-uicc", "multimedia/vectores/teta-cabecera.svg"),
  $get->cadena("abc-global", "multimedia/vectores/teta-cabecera.svg"),

  // Herramientas:
  $get->cadena("herramientas", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("herramientas-subtipos-moleculares", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("estadificacion", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("glosario", "multimedia/vectores/teta-herramientas.svg"),
  
  // Herramientas - Segunda parte:
  $get->cadena("quimioterapia", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("terapia-dirigida", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("hormonoterapia", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("cirugia", "multimedia/vectores/teta-herramientas.svg"),
  $get->cadena("radioterapia", "multimedia/vectores/teta-herramientas.svg"),
  
  // Conozca su enfermedad:
  $get->cadena("conozca", "multimedia/vectores/teta-conozca.svg"),
  $get->cadena("cancer-mama-metastasico", "multimedia/vectores/teta-conozca.svg"),
  $get->cadena("cuidados-paliativos", "multimedia/vectores/teta-conozca.svg"),

  // La paciente y su proceso:
  $get->cadena("paciente", "multimedia/vectores/teta-paciente.svg"),
  $get->cadena("actitudes", "multimedia/vectores/teta-paciente.svg"),
  $get->cadena("su-entorno", "multimedia/vectores/teta-paciente.svg"),
  $get->cadena("herramientas-comunicacion", "multimedia/vectores/teta-paciente.svg")
]);

// Imágenes de la cabecera:
$imgCabecera = "";
$imgCabecera = cadena([
  $get->cadena("nosotros", "multimedia/fotos/fuveicam.jpeg"),
  $get->cadena("sparc-uicc", "multimedia/fotos/nosotros/nosotros-sparc.jpg"),
  $get->cadena("abc-global", "multimedia/fotos/nosotros/nosotros-abcgloballacience.jpg"),

  // Herramientas:
  $get->cadena("herramientas", "multimedia/fotos/herramientas/1.1. herramientas-anatomia-patologica.jpg"),
  $get->cadena("herramientas-subtipos-moleculares", "multimedia/fotos/herramientas/1.2. herramientas-subtipos.jpg"),
  $get->cadena("estadificacion", "multimedia/fotos/herramientas/1.3. herramientas-estadificacion.jpg"),
  $get->cadena("glosario", "multimedia/fotos/herramientas/glosario-terminos.jpeg"),
  
  // Herramientas - Parte 2:
  $get->cadena("quimioterapia", "multimedia/fotos/herramientas/2.1. herramientas-quimioterapias.jpg"),
  $get->cadena("terapia-dirigida", "multimedia/fotos/herramientas/2.2.herramientas-hormonoterapia.jpg"),
  $get->cadena("hormonoterapia", "multimedia/fotos/herramientas/2.3.herrramientas-terapia-dirigida.jpg"),
  $get->cadena("cirugia", "multimedia/fotos/herramientas/2.4herramientas-cirugia.jpg"),
  $get->cadena("radioterapia", "multimedia/fotos/herramientas/2.5.herramientas-radioterapias.jpg"),

  // Conozca su enfermedad:
  $get->cadena("conozca", "multimedia/fotos/conozca-su-enfermedad/FotoCabecera.jpeg"),
  $get->cadena("cancer-mama-metastasico", "multimedia/fotos/conozca-su-enfermedad/FotoCabecera.jpeg"),
  $get->cadena("cuidados-paliativos", "multimedia/fotos/conozca-su-enfermedad/FotoCabecera.jpeg"),

  // La paciente y su enfermedad:
  $get->cadena("paciente", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg"),
  $get->cadena("actitudes", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg"),
  $get->cadena("su-entorno", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg"),
  $get->cadena("herramientas-comunicacion", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg")
]);