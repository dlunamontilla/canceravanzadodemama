<?php

// Conexión con el servidor de base de datos:
$ruta = __DIR__ . "/config.php";
if ( file_exists($ruta) )
    include $ruta;

// Componentes
include __DIR__ . "/instancias.php";
include __DIR__ . "/textos.php";
include __DIR__ . "/perfil.php";
include __DIR__ . "/estadisticas.php";

// Formularios
include __DIR__ . "/form-sesion.php";

// Estructura de contenido
include __DIR__ . "/content.php";

$protocolo->https();