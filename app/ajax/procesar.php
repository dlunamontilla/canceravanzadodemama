<?php
if ( !isset($post) )
    $post = new DLPeticiones("post");

if ( !isset($get))
    $get = new DLPeticiones("get");

function almacenar() {
    if ( !isset($pdo) ) {
        $conexion = new DLConectar(__DIR__ . "/../../../.env");
        $pdo = $conexion->obtenerPDO();
    }

    if ( !isset($encuesta) ) {
        $ruta = __DIR__ . "/../../recursos/markdown/encuesta.md";
        $encuesta = new DLFormularios($ruta);
    }

    $envio = $pdo->prepare("SELECT MAX(envio) AS `envio` from encuesta LIMIT 1;");
    $envio->execute();
    $valor = (object) $envio->fetch(PDO::FETCH_ASSOC);
    $siguiente = !is_numeric($valor->envio) ? 0 : $valor->envio;

    // Con esto se evita que un usuario mal intencionado envíe
    // más datos de lo que debe al servidor:
    if (count($_POST) > $encuesta->size + 1)
        return false;

    $pdo->beginTransaction();

    $insertar = $pdo->prepare("INSERT INTO `encuesta` VALUES (NULL, :pregunta, :respuesta, NOW(), :envio, :encuesta)");

    for ( $i = 1; $i <= $encuesta->size; $i++ ) {
        // Obtener las claves de $_POST desde el usuario:
        $nPregunta = ( $i < 10 ) ? "0$i" : "$i";

        // Es el índice de cada pregunta dentro del array:
        $indice = $i - 1;

        // Si el índice no existe en ambos casos el bucle
        // continúa y no se sigue ejecutando las demás instrucciones que
        // siguen más abajo hasta la siguiente iteración:
        if ( !array_key_exists("pregunta$nPregunta", $_POST) ) continue;
        if ( !array_key_exists($indice, $encuesta->obtenerDatos()) ) continue;

        // A partir de la obtenidas de $nPregunta se obtienen una 
        // pregunta relacionada a dicho campo:
        // $pregunta = $encuesta->obtenerDatos()[$indice]["pregunta"];

        // Se obtiene la respuesta de forma numérica. Dado que los índices
        // de todo array empiezan en 0, se le resta para que el primer
        // elemento del formulario coincida con el primer elemento del array:
        $respuesta = (int) $_POST["pregunta$nPregunta"] - 1;

        // A partir de la respuesta numérica, que es el índice de ella,
        // se obtiene su versión en cadena de texto para luego almacenarse
        // en la base de datos. 
        // $opcion = $encuesta->obtenerDatos()[$indice]["opciones"];
        
        // Estos son los datos que se enviarán a la base de datos:
        $insertar->execute([
            ":pregunta" => $nPregunta,
            ":respuesta" => $respuesta,
            ":envio" => (int) $siguiente + 1,
            ":encuesta" => 1
        ]);
    }

    return $pdo->commit();
}

// Almacenar datos de la encuesta:
if ($get->modulo("encuesta")) {
    header("content-type: application/json; charset=utf-8");
    if ( !reCAPTCHA($_POST["Google"]) ) {
        $info = [
            "mensaje" => "No ha superado la prueba para enviar formulario"
        ];

        echo json_encode($info);
    }

    $info = almacenar() ? [
        "mensaje" => "Gracias por completar la encuesta"
    ] : [
        "mensaje" => "Se ha detectado un intento ilegítimo de envío de datos"
    ];

    echo json_encode($info);
}