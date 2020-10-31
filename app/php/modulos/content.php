<?php
// Área donde se encuentra ubicado el contenido principal de la página

$content = "";

if ( $get->distribuirEnModulos([
    "nosotros",
    "herramientas",
    "conozca",
    "paciente"
]) ) {
    $content = <<<HTML
<div class="modulo modulo--fuveicam">
    <aside class="modulo__item modulo__item--sidebar">
        Barra lateral izquierda
    </aside>

    <section class="modulo__item modulo__item--section">
        <p>Contenido con diversos párrafos</p>
    </section>
</div>
HTML;
}
?>