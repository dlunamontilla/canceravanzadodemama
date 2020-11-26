<?php
  if ( ! isset($get) )
    exit;

  // Nosotros:
  $menuNosotros = [
    "nosotros",
    "sparc-uicc",
    "abc-global"
  ];

  // Herramientas:
  $menuHerramientas = [
    // Primera parte
    "herramientas",
    "herramientas-subtipos-moleculares",
    "estadificacion",
    "glosario",
    
    // Segunda parte
    "quimioterapia",
    "terapia-dirigida",
    "hormonoterapia",
    "cirugia",
    "radioterapia"
  ];

  // Conozca su enfermedad:
  $menuConozcaSuEnfermedad = [
    "conozca",
    "cancer-mama-metastasico",
    "cuidados-paliativos"
  ];

  // La Paciente:
  $menuLaPaciente = [
    "paciente",
    "actitudes",
    "su-entorno",
    "herramientas-comunicacion"
  ];


  $modulos = array_merge(
    $menuNosotros,
    $menuHerramientas,
    $menuConozcaSuEnfermedad,
    $menuLaPaciente
  );


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
    $get->cadena("herramientas", "Entienda su<br>diagnóstico"),
    $get->cadena("conozca", "Cáncer Avanzado de Mama. <br>Cáncer de Mama Localmente <br> Avanzado"),
    $get->cadena("paciente", "Emociones de la Paciente<br> a través del Proceso de su <br>Enfermedad")
  ]);

  // Texto para la barra de título del navegador:
  $title = cadena([
    $get->cadena("nosotros", "Nosotros"),
    $get->cadena("herramientas", "Herramientas para la toma de decisiones"),
    $get->cadena("conozca", "Conozca su enfermedad"),
    $get->cadena("paciente", "La paciente y su proceso")
  ]);

  $title = (empty($title)) ? "Cáncer Avanzado de Mama" : $title . " | Cáncer Avanzado de Mama";

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
    $get->cadena("herramientas-subtipos-moleculares", "multimedia/fotos/herramientas/1.2. herramientas-subtipos.jpg"),
    $get->cadena("estadificacion", "multimedia/fotos/herramientas/1.3. herramientas-estadificacion.jpg"),
    $get->cadena("glosario", "multimedia/fotos/herramientas/1.4. herramientas-glosario.jpg"),
    
    // Herramientas - Parte 2:
    $get->cadena("quimioterapia", "multimedia/fotos/herramientas/2.1. herramientas-quimioterapias.jpg"),

    // Conozca su enfermedad:
    $get->cadena("conozca", "multimedia/fotos/conozca-su-enfermedad/FotoCabecera.jpeg"),

    // La paciente y su enfermedad:
    $get->cadena("paciente", "multimedia/fotos/la-paciente/imagen-cabecera-2.jpeg"),
  ]);
  ?>