<?php

if ( !isset($get) )
  exit;

  // Descargas | Página principal de herramientas:
$herramientas = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>Sólo la biopsia permite dar el diagnóstico definitivo. En caso que se reporte como cáncer se precisa el tipo, el grado de diferenciación y algunos otros parámetros de interés que permiten distinguir la mejor opción terapéutica.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>Para la paciente la lectura e interpretación del informe es un evento confuso e intimidante. Es importante tener en cuenta que la información que éste aporta se interpreta como un todo, por lo que se debe evitar mantener el foco en un solo aspecto.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/1.1-Informe-de-Anatomía(DESCARGA).pdf" download="1.1-Informe-de-Anatomía(DESCARGA).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-1.1 informe.svg" alt="Informe">
  </a>
</div>
HTML;

// Descargas | Subtipos moleculares:
$subtiposMoleculares = <<<HTML
<div class="pegajoso"></div>
<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/1.2-Infografia-subtipos-molecular.pdf" download="1.2-Infografia-subtipos-molecular.pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-1.2-subtipos.svg" alt="Descargue Subtipos Moleculares">
  </a>
</div>
HTML;

// Descargas | Estadificación:
$estadificacion = <<<HTML
<div class="pegajoso"></div>
<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/1.3-infografia-estadios-(DESCARGA).pdf" download="1.3-infografia-estadios-(DESCARGA).pdf" target="_blank" class="descargas">
    <img src="multimedia/img/descarga-herramientas-1.3-estadios.jpeg" alt="Descargue Estadificación">
  </a>
</div>
HTML;

// Descargas | Quimioterapia
$quimioterapia = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>La quimioterapia, terapia citotóxica, o “quimio” consiste en la administración de medicamentos que destruyen las células tumorales e impiden su rápida replicación, al alterar la síntesis de los ácidos nucleicos (ADN o ARN) de las células. Es una terapia sistémica, lo cual significa que afecta a todo el cuerpo a través del torrente sanguíneo.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>La quimioterapia afecta a las células que tienen un rápido crecimiento, como las células cancerosas, pero también las del cabello, la sangre y del tracto gastrointestinal, que se recuperan por sí solas. Los objetivos de la quimioterapia dependen del tipo de cáncer y de cuánto se haya diseminado.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.1-Quimioterapia-en-Pacientes-con-Cáncer-de-Mama-Avanzado-(descarga).pdf" download="2.1 Quimioterapia en Pacientes con Cáncer de Mama Avanzado (descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.1-quimioterapia.svg" alt="Descargue Quimioterapia">
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.1-Infografia-quimioterapia-(descarga).pdf" download="2.1 Infografia quimioterapia (descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.1.b-recuento.svg" alt="Descargue Recuento">
  </a>
</div>
HTML;

// Descargas | Hormonoterapia | Hormonoterapia
$hormonoterapia = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>La terapia hormonal, hormonoterapia o terapia endocrina son tratamientos contra el cáncer de mama con receptores hormonales positivos, que retardan o detienen el crecimiento del cáncer que utiliza hormonas para proliferar. </p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>La determinación del tipo y duración de la terapia hormonal va a depender del estado menstrual de la paciente (pre o post-menopáusica) y del estadio. La hormonoterapia se puede administrar antes, durante o después de otras modalidades de tratamiento contra el cáncer de mama.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.-3-hoja-informativa-hormonoterapia-(descarga).pdf" download="2.-3-hoja-informativa-hormonoterapia-(descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.2.-hormonoterapia.svg" alt="Descargue Hormonoterapia">
  </a>
</div>
HTML;

// Descargas | Terapia Dirigida:
$terapiaDirigida = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>La terapia dirigida es un tratamiento en el que se actúa de manera selectiva sobre una estructura molecular concreta o diana de las células malignas deteniendo su crecimiento y proliferación.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>Las terapias dirigidas tienen un mecanismo de acción directo contra las células malignas,  a diferencia de la quimioterapia que puede afectar también a células normales, sobre todo aquellas que se multiplican más rápidamente.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.2-Infografia-terapia-Dirigida-(descarga).pdf" download="2.2 Infografia terapia Dirigida (descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.3.-terapia dirigida.svg" alt="Descargue Terapia Dirigida">
  </a>
</div>
HTML;

// Descargas | Cirugía:
$cirugia = <<<HTML

<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>En las pacientes con diagnóstico de Cáncer Localmente Avanzado de Mama, la cirugía generalmente se realiza posterior al tratamiento neoadyuvante. En los casos de cáncer de mama metastásico, la cirugía sólo está recomendada para hacer control local de la enfermedad en pacientes o lesiones vegetantes, sangrantes o infectadas.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>Verifique el procesamiento de la biopsia quirúrgica, así como el día y la forma de entrega de los resultados. Estos resultados deben ser vistos por el cirujano quien evaluará y discutirá con usted los pasos a seguir.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.4 hoja informativa cirugia (descarga).pdf" download="2.4 hoja informativa cirugia (descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.4.a-cirugia.svg" alt="Descargue Cirugía">
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.4 Cirugia en Pacientes con Cancer de Mama Avanzado(descarga).pdf" download="2.4 Cirugia en Pacientes con Cancer de Mama Avanzado(descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.4.b-cirugia.svg" alt="Descargue Cirugía | Parte 2">
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.4 Infografia cirugia (descarga).pdf" download="2.4 Infografia cirugia (descarga).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.4.c-cirugia.svg" alt="Descargue Cirugía | Parte 3">
  </a>
</div>
HTML;

// Descargas | Radioterapia:
$radioterapia = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>La Radioterapia es el uso de radiaciones ionizantes, para destruir células cancerosas dónde se aplica la radiación, impidiendo que crezcan y se reproduzcan, intentando afectar lo menos posible a los tejidos vecinos normales. La radiación que se utiliza para  el tratamiento del cáncer de mama es completamente planificada y altamente  dirigida.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>La Radioterapia para pacientes con Cáncer de Mama Localmente Avanzado, su uso es terapéutico, impide que el cáncer regrese. La Radioterapia para pacientes con Cáncer de Mama Metastásico, trata de aliviar y controlar los síntomas de las metástasis en la localización específica en la que ésta se encuentre.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/herramientas/2.5 radioterapia.pdf" download="2.5 radioterapia.pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-herramientas-2.5-radioterapia.svg" alt="Descargue Radioterapia">
  </a>
</div>
HTML;

// Descargas | Conozca su enfermedad:
$conozcaSuEnfermedad = <<<HTML

<div class="pegajoso">
  <div>
    <div class="destacado destacado--secundario-3">
      <p>El cáncer de mama avanzado compromete al cáncer de mama localmente avanzado inoperable de inicio y el cáncer de mama metastásico.El cáncer localmente avanzado de mama inoperable de inicio,abarca la enfermedad en estadio IIIB-IIIC, que implica tumor en mama con extensión a la pared torácica o la piel,  en este grupo se incluye el Cáncer de Mama Inflamatorio.</p>
      <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
    </div>

    <div class="destacado destacado--morado">
      <p>Haga un seguro, sustentable y apropiado plan. Un excelente punto de partida es aprender tanto como pueda respecto a su enfermedad y sus opciones terapéuticas. Elabore su plan  en conjunto con su equipo médico y su entorno haciendo uso de fuentes confiables. Entre más sepa y se involucre, más cómoda se sentirá al momento tomar decisiones importantes.</p>
      <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
    </div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/conozca-su-enfermedad/1.a.signos de alarma infografia (descargable).pdf" download="1.a.signos de alarma infografia (descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-Conozca-1.a-infografia.svg" alt="Descargue Signos de Alarma">
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/conozca-su-enfermedad/1.b. Guia para el cancer avanzado (descargable).pdf" download="1.b. Guia para el cancer avanzado (descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-Conozca-1y2.b-guia .svg" alt="Descarga Guía Cáncer Avanzado">
  </a>
</div>
HTML;

// Cuidados Paliativos |  Cáncer de Mama Metastásico :
$cuidadosPaliativos = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>Nunca debe aceptar el dolor como algo normal de su enfermedad. Debe saber que el tratamiento dolor es parte de la terapéutica de pacientes con cáncer y éste a su vez, puede ser manejado de manera satisfactoria en la mayoría de las personas.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>El manejo del dolor es mucho más efectivo si empieza lo más antes posible. Saber cómo informar y describir el dolor puede ayudar a su equipo de atención médica a encontrar la combinación perfecta y el tipo correcto de tratamiento para afrontarlo de manera aceptable.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/conozca-su-enfermedad/3. Ficha del dolor (descargable).docx" download="3. Ficha del dolor (descargable).docx" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-Conozca-3-diario.svg" alt="Descargue Diario del Dolor">
  </a>
</div>
HTML;

// Descargas |  Cáncer de Mama Metastásico :
$cancerMatastasico = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>El diagnóstico de cáncer de mama metástasico constituye para la paciente un evento abrumador. En algunos casos, el diagnóstico metastásico es el primer diagnóstico que recibe la paciente. En otras, se diagnostican por una recurrencia o una recidiva a distancia.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>Existen una variedad de opciones terapéuticas disponibles para tratar el cáncer metástasico. El hecho que la enfermedad haya vuelto no significa que no haya nada por hacer. El tratamiento permitirá mantener la enfermedad bajo control, prolongar la calidad de vida y disminuir los síntomas.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/conozca-su-enfermedad/2. Hoja informativa Estudios Diagnóstico para la Estadificación a Distancia.(descargable).pdf" download="2. Hoja informativa Estudios Diagnóstico para la Estadificación a Distancia.(descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-Conozca-2.a-hoja-informativa.svg" alt="Descargue Estudios Diagnósticos">
  </a>
</div>
HTML;

// MÓDULO LA PACIENTE:

// Emociones
$emociones = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>Las necesidades de la paciente y  sus  experiencias con la enfermedad son diversas y muy personales. El bienestar emocional es un componente de la calidad de vida, por lo tanto, resulta importante que pueda reconocer y definir sus emociones.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/la-paciente/1. la paciente y su proceso emociones (descargable).pdf" download="1. la paciente y su proceso emociones (descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-lapaciente-3.svg" alt="Descargue La Paciente Emociones">
  </a>
</div>
HTML;

// Actitudes
$actitudes = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>Tenga sus propios expedientes completos y actualizados, con la debida información sobre su atención médica durante el proceso de diagnóstico, tratamiento y seguimiento del cáncer de mama, que permita brindarle la información precisa a cada médico tratante.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/relacionados/3.1.Enlaces-paginas-relacionadas-interes.docx" download="2. PLAN DE TRATAMIENTO DE CANCER DE MAMA (descargable).docx" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/la-paciente/svg/descarga-lapaciente-5.svg" alt="Descargue Plan de Tratamiento">
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/la-paciente/2. PLAN DE TRATAMIENTO DE CANCER DE MAMA (descargable).docx" download="2. PLAN DE TRATAMIENTO DE CANCER DE MAMA (descargable).docx" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-lapaciente-2.svg" alt="Descargue Plan de Tratamiento">
  </a>
</div>
HTML;

$suEntorno = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>La enfermedad no debe entenderse como un hecho aislado, sino como una serie de múltiples e interconectadas capas de transiciones psicosociales, por lo que debe comprender cuál es el impacto que este cambio tiene en la forma de relacionarse con su entorno.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>

  <div class="destacado destacado--morado">
    <p>La paciente con cáncer avanzado de mama debe encontrar un balance interno y externo que le permita afrontar los cambios que produce su nueva realidad, recuperar el control sobre su cotidianidad, mantener su estabilidad emocional y continuar con su vida.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <!-- Enlace externo -->
  <a href="https://www.cimafundacion.org/tanto-por-hacer/" target="_blank" class="button button--enlace ">
    <span data-src="multimedia/vectores/enlace.svg"></span>
    <span>Tanto por hacer</span>
  </a>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/la-paciente/3.la paciente y su proceso entorno (descargable).pdf" download="3.la paciente y su proceso entorno (descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-lapaciente-3.svg" alt="Descargue La Paciente | Actitudes">
  </a>
</div>
HTML;

$comunicacion = <<<HTML
<div class="pegajoso">
  <div class="destacado destacado--secundario-3">
    <p>Establecer metas para la buena comunicación entre las pacientes de cáncer avanzado de mama, los familiares que los cuidan y el equipo de atención de salud es fundamental para su bienestar psicosocial, ya que mejora la comprensión del proceso, promueve la adherencia al tratamiento y ayuda a mejorar su calidad de vida.</p>
    <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
  </div>
</div>

<div class="pegajoso pegajoso--flex">
  <a href="descargas/la-paciente/4. la paciente y su proceso herramientas (descargable).pdf" download="4. la paciente y su proceso herramientas (descargable).pdf" target="_blank" class="descargas descargas--3d">
    <img src="multimedia/vectores/descarga-lapaciente-4.svg" alt="Descarge La Paciente | Herramientas de Comunicación">
  </a>
</div>
HTML;