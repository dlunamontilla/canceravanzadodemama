<?php
  if ( !isset($get) )
    exit;
  if ( $get->distribuirEnModulos($menuHerramientas) ) {
    $sidebar = <<<HTML
    <div class="indice">
        <div class="indice__header">
            <h3>Herramientas para la toma de decisiones</h3>
        </div>

        <div class="indice__content">
            <h4>Entienda su diagnóstico</h4>
            <ul class="listas listas--none">
                <li class="listas__item"><a href="?herramientas" class="listas__enlace">Informe de Anatomía Patológica.</a></li>
                <li class="listas__item"><a href="?herramientas-subtipos-moleculares" class="listas__enlace">Clasificación en Subtipos Moleculares.</a></li>
                <li class="listas__item"><a href="?estadificacion" class="listas__enlace">Estadificación.</a></li>
                <li class="listas__item"><a href="?glosario" class="listas__enlace">Glosario.</a></li>
            </ul>
        </div>

        <div class="indice__content">
            <h4>Modalidades de tratamiento</h4>
            <ul class="listas listas--none">
                <li class="listas__item"><a class="listas__enlace" href="?Quimioterapia">Quimioterapia.</a></li>
                <li class="listas__item"><a class="listas__enlace" href="?terapia-dirigida">Terapia Dirigida.</a></li>
                <li class="listas__item"><a class="listas__enlace" href="?hormonoterapia">Terapia Hormonal. Hormonoterapia</a></li>
                <li class="listas__item"><a class="listas__enlace" href="?cirugia">Cirugía</a></li>
                <li class="listas__item"><a class="listas__enlace" href="?radioterapia">Radioterapia</a></li>
            </ul>
        </div>
    </div>
HTML;
  }

  