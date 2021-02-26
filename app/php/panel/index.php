<?php

// Componentes
include __DIR__ . "/instancias.php";

// Consultas a la base de datos y peticiones de formulario:
$procesar = __DIR__ . "/procesar.php";
$query = __DIR__ . "/query.php";

if ( file_exists( $query ) )
    include $query;

include __DIR__ . "/textos.php";
include __DIR__ . "/perfil.php";
include __DIR__ . "/estadisticas.php";

// Formularios
include __DIR__ . "/form-sesion.php";

// Módulos:
include __DIR__ . "/modulos.php";

// Panel de administración:
include __DIR__ . "/panelHerramientas.php";
include __DIR__ . "/panel.php";

// Estructura de contenido
include __DIR__ . "/content.php";

$protocolo->https();