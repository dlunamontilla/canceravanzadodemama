<?php
/**
 * @package DLFormularios
 * @author David E Luna M <davidlunamontilla@gmail.com>
 * @copyright David E Luna M <dlunamontilla@gmail.com>
 * @version 1.0.0
 * @license MIT
 * 
 * Fecha: 28 de febrero de 2021
 */

class DLFormularios {
    private $data = [];

    public function __construct( $file = "" ) {
        $this->file = (string) $file;
        $this->expresion = "/([\#]+)([a-z\s]+)(\W|[a-z])+$/im";
        $this->separadorNumerico = "/^([0-9]+)(\.)/im";
        $this->quitarPunto = "/(\.)$/";

        if ( !file_exists($this->file)) {
            echo "Debes seleccionar un archivo .md para procesarlo";
            exit;
        }

        $this->contenido = file_get_contents($this->file);
        $this->procesarDatos();

        $this->size = count($this->data);
    }

    private function procesarDatos() {
        $this->contenido = preg_replace($this->expresion, "", $this->contenido);
        $this->contenido = trim($this->contenido);
        $datos = preg_split($this->separadorNumerico, $this->contenido);
        
        $preguntas = [];

        foreach ($datos as $key => $value) {
            $datos[$key] = trim($value);
            $datos[$key] = trim(preg_replace("/\n/", "", $value));

            if ( empty(trim($value)) )
                unset($datos[$key]);

            $opciones = preg_split("/\-/", $value);
            $size = (int) count($opciones);

            $pregunta = [
                "pregunta" => trim($opciones[0]),
                "opciones" => []
            ];

            for ( $i = 1; $i < $size; $i++ ) {
                array_push($pregunta["opciones"], preg_replace($this->quitarPunto, "", trim($opciones[$i])));
            }
            
            if ( empty(trim($pregunta["pregunta"])) )
                continue;

            array_push($preguntas, $pregunta);
        }

        array_push($this->data, ...$preguntas);
    }

    public function obtenerJSON() {
        header("Content-type: application/json; charset=utf-8");
        return json_encode($this->data);
    }

    public function obtenerDatos() {
        return $this->data;
    }

    public function actualizarEncuesta( string $filename = "encuesta" ) {
        file_put_contents( "$filename.json", $this->obtenerJSON() );
    }
}