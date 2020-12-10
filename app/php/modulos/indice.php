<?php
  if ( !isset($get) )
    exit;

  if ( $get->distribuirEnModulos($menuHerramientas) ) {
    $sidebar = <<<HTML
    <div class="pegajoso">
        <div class="indice pegajoso__inner">
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
                    <li class="listas__item"><a class="listas__enlace" href="?quimioterapia">Quimioterapia.</a></li>
                    <li class="listas__item"><a class="listas__enlace" href="?terapia-dirigida">Terapia Dirigida.</a></li>
                    <li class="listas__item"><a class="listas__enlace" href="?hormonoterapia">Terapia Hormonal. Hormonoterapia</a></li>
                    <li class="listas__item"><a class="listas__enlace" href="?cirugia">Cirugía</a></li>
                    <li class="listas__item"><a class="listas__enlace" href="?radioterapia">Radioterapia</a></li>
                </ul>
            </div>
        </div>
    </div>
HTML;
  }


  if ( $get->distribuirEnModulos($menuConozcaSuEnfermedad) ) {
    $sidebar = <<<HTML
    <div class="pegajoso">
        <div class="indice pegajoso__inner">
            <div class="indice__header">
                <h3>Conozca su Enfermedad</h3>
            </div>

            <div class="indice__content">
                <h4>Entienda su diagnóstico</h4>
                <ul class="listas listas--none">
                    <li class="listas__item"><a href="?conozca" class="listas__enlace">Cáncer de Mama Avanzado.<br>Cáncer de Mama Localmente Avanzado</a></li>
                    <li class="listas__item"><a href="?cancer-mama-metastasico" class="listas__enlace">Cáncer de Mama Avanzado.<br>Cáncer De Mama Metastásico.</a></li>
                    <li class="listas__item"><a href="?cuidados-paliativos" class="listas__enlace">Recursos para sobrellevar el tratamiento</a></li>
                </ul>
            </div>
        </div>
    </div>
HTML;
  }

  if ( $get->distribuirEnModulos($menuLaPaciente) ) {
    $sidebar = <<<HTML
    <div class="pegajoso">
        <div class="indice pegajoso__inner">
            <div class="indice__header">
                <h3>Herramientas para la toma de decisiones</h3>
            </div>
    
            <div class="indice__content">
                <h4>Entienda su diagnóstico</h4>
                <ul class="listas listas--none">
                    <li class="listas__item"><a href="?paciente" class="listas__enlace">Emociones de la Paciente a través del Proceso de su Enfermedad.</a></li>
                    <li class="listas__item"><a href="?actitudes" class="listas__enlace">La Paciente: Actitudes </a></li>
                    <li class="listas__item"><a href="?su-entorno" class="listas__enlace">La Paciente y su Entorno.</a></li>
                    <li class="listas__item"><a href="?herramientas-comunicacion" class="listas__enlace">Herramientas de Comunicación.</a></li>
                </ul>
            </div>
        </div>
    </div>
HTML;
  }