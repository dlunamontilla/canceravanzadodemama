<?php
include "../php/DLTools/index.php";
include "../php/modulos/index.php";


if ( !isset($get) )
    $get = new DLPeticiones("get");

header("Content-Type: application/json; charset=utf-8");

$datos = ["Primer dato"];

$enlaces = [
    "nosotros" => $menuNosotros,
    "herramientas" => $menuHerramientas,
    "suEnfermedad" => $menuConozcaSuEnfermedad,
    "laPaciente" => $menuLaPaciente
];

$datos = $enlaces;

$datos = obtenerDatos($menuNosotros, "param" );

echo json_encode($modulos);