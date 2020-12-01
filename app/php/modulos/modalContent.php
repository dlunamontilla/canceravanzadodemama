<?php

if ( !isset($get) )
    exit;

$modalTitle = $modalContent = $mostrar = "";

// Ventana Modal | Herramientas:
if ( $get->modulo("herramientas") ) {
    $mostrar = " modal--show";
    $modalTitle = "Herramientas para la toma de decisiones";

    $modalContent = <<<HTML
        <p>La  mayoría  de  las  pacientes  no  tienen  idea  de  cómo  empezar.  A  través de pasos sencillos, pero importantes, usted puede concretar el proceso de Toma de Decisiones: </p>
    
        <ol class="modal__listas modal__listas--grid listas listas--decimal listas--bold listas--base">
            <li class="text text--justify">Entienda su diagnóstico. Tipo de cáncer. Estadio y Receptores. Si desconoce alguna palabra, use un glosario o diccionario médico.</li>
            <li class="text text--justify">Conozca sus opciones de tratamiento: Quimioterapia, Terapia Hormonal, Terapia Dirigida, Cirugía, Radioterapia, Cuidados Paliativos, Terapia del Dolor y Terapia Integrativa.</li>
            <li class="text text--justify">Distinga sus metas de tratamiento.</li>
            <li class="text text--justify">Consulte las Guías u otras pautas de tratamiento.</li>
            <li class="text text--justify">Reconozca los Efectos Colaterales del tratamiento y cómo pueden ser afrontados.</li>
            <li class="text text--justify">Navegue a través de sus emociones durante el proceso.</li>
            <li class="text text--justify">Maneje el impacto del diagnóstico con su entorno.</li>
            <li class="text text--justify">Comunique sus pensamientos e inquietudes.</li>
        </ol>
HTML;

}

// Ventana Modal | Conozca su Enfermedad:
if ( $get->modulo("conozca") ) {
    $mostrar = " modal--show";
    $modalTitle = "Cáncer de Mama Avanzado";

    $modalContent = <<<HTML
    <ol class="modal__listas modal__listas--block listas listas--decimal listas--bold">
        <li class="text text--justify">El  cáncer  de  mama  avanzado  compromete  al  cáncer  de  mama  localmente  avanzado inoperable de inicio (Cáncer de Mama Estadio IIIB-C) y el cáncer de mama metastásico (Cáncer de Mama Estadio IV).</li>
        <li class="text text--justify">El cáncer localmente avanzado de mama inoperable de inicio, se dene como el  cáncer  que  se  ha  extendido  a  tejidos  o  ganglios  linfáticos  cercanos  a  la  mama,  pero  no  se  ha  diseminado  a  distancia  por  el  cuerpo.  Abarca la enfermedad en estadio IIIB-IIIC, que implica tumor en mama con extensión a la pared torácica o la piel independientemente del estado ganglionar (T4). En este grupo se incluye el Cáncer de Mama Inflamatorio (T4d).</li>
        <li class="text text--justify">El cáncer de mama metastásico o secundario, es aquel que se ha expandido a otras partes del cuerpo. Las localizaciones más comunes en las que se puede detectar  el  cáncer  de  mama  metastásico  son  los  huesos,  los  pulmones,  el  hígado y el cerebro.</li>
    </ol>

    <hr>
    
    <p>
        <a class="modal__enlace" href="https://www.abcglobalalliance.org/abc-conference-guidelines/" target="_blank">
            Guías de Cáncer Avanzado de Mama (ABC).<br>https://www.abcglobalalliance.org/abc-conference-guidelines/
        </a>
    </p>

    <p>
        <a class="modal__enlace" href="https://www.uicc.org/resources/access-all-resources/cancer-and-coronavirus-resources">
            Cáncer y Coronavirus. Recursos Disponibles<br>https://www.uicc.org/resources/access-all-resources/cancer-and-coronavirus-resources
        </a>
    </p>
HTML;
}