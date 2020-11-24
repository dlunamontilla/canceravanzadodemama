<?php

  if ( !isset($get) )
    exit;


  if ( $get->modulo("terapia-dirigida") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Terapia Dirigida</h2>

      <p class="text text--justify">
        La terapia dirigida es un tratamiento en el que se actúa de manera selectiva sobre una estructura molecular concreta o diana de las células malignas deteniendo su crecimiento y proliferación. Al impedir la proliferación de las células malignas tienen una acción citostática, a diferencia de la  quimioterapia que tiene una acción citotóxica, es decir destruye las células sobre las que está actuando. Las terapias dirigidas tienen un mecanismo de acción directo contra las células malignas,  a diferencia de la quimioterapia que puede afectar también a células normales, sobre todo aquellas que se multiplican más rápidamente.
      </p>

      <p>Las terapias biológicas actúan de 3 maneras:</p>
      <ul class="listas listas--disco listas--secundario-3">
        <li>Bloquean o desaceleran el crecimiento tumoral, al desactivar las señales de crecimiento en las células cancerígenas.</li>
        <li>Impiden que la célula tumoral sobreviva más tiempo de lo normal.</li>
        <li>Estimulan al sistema inmunitario para que reconozca y  destruya las células cancerosas, lo que se conoce como Inmunoterapia.</li>
      </ul>

      <h3 class="text text--right frontal frontal--secundario-3">Tipos de Terapia Dirigida</h3>
      <p>En el tratamiento de cáncer de mama existen diversos tipos de terapia dirigida:</p>

      <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">
          Anticuerpos Monoclonales. Son anticuerpos que se unen a moléculas específicas de la superficie de las células cancerígenas (receptores) o en su proximidad (ligandos) e impiden que éstas reciban señales de crecimiento. Al bloquearse las señales, se desacelera o incluso se interrumpe el crecimiento del cáncer de mama, ya que se producen ciertas alteraciones en las células que afectan a proteínas que son importantes para el crecimiento tumoral. En este grupo tenemos al Trastuzumab (nombre comercial: Herceptin) y Pertuzumab (nombre comercial: Perjeta) dirigidos a cáncer de mama positivo para HER2 (receptor 2 de factor de crecimiento epidérmico). Los anticuerpos monoclonales pueden combinarse con otros medicamentos de quimioterapia como la emtansina como en el caso de T-DM1 o ado-trastuzumab emtansina (nombre comercial Kadcyla).
        </li>

        <li>
          <p class="text text--justify">Inhibidores de las Quinasas. Son moléculas que actúan contra las cinasas. Una cinasa es una  proteína que controla el crecimiento tumoral. En este grupo se incluyen  el Lapatinib (nombre comercial Tykerb) que  interrumpe la vía del receptor Her2; el Palbociclib, Ribociclib y Abemaciclib, que actúan sobre las cinasas dependiente de ciclina 4/6 (nombre comercial Ibrance-Kisqali-Versenio, respectivamente) y el Everolimus (nombre comercial Afinitor)  que inhibe una proteína llamada mTOR. Los inhibidores de las quinasa son moléculas de bajo peso molecular, lo que permite su absorción por vía digestiva y puedan ser administrados por vía oral.</p>
          <p class="text text--justify">La fusión de algunos de los genes del receptor de tirosina cinasa neurotrófico (NTRK) con otro gen, conlleva a la producción de proteínas anormales llamadas proteínas de fusión TRK, que  producen la multiplicación de células cancerosas. El Larotrectinib (nombre comercial Vitrakvi) es una terapia dirigida que inhibe la actividad de la TRK y otras proteínas que pueden promover la proliferación del cáncer.</p>
        </li>

        <li class="text text--justify">
          Inhibidores de la Angiogénesis. Bloquean la formación de nuevos vasos sanguíneos, al bloquear la proteína de factor de crecimiento del endotelio (VEGF). Esta proteína ayuda a fabricar vasos sanguíneos de los cuales depende las células tumorales para crecer. En este grupo se encuentra el Bevacizumab (nombre comercial Avastin).
        </li>

        <li class="text text--justify">
          Inhibidores de la PARP. Destruyen las células del cáncer al impedirles que puedan ser capaces de corregir el daño celular. Entre estas tenemos: Olaparib (nombre comercial Lynparza) y el Talazoparib (nombre comercial Talzenina).
        </li>

        <li class="text text--justify">
          Inmunoterapia. Fármacos que se unen a la proteína PD-L1 para ayudar a las células inmunitarias a destruir las células cancerosas. Entre estos tenemos Atezolizumab (nombre comercial Tecentriq).
        </li>
      </ul>

      <div class="imagen imagen--verde" data-src="multimedia/vectores/imagen-2.2-herramientas-terapia dirigida.svg">
        <img src="https://i.ibb.co/VgfZs6R/imagen-2-2-herramientas.png" alt="">
      </div>
    </div>
HTML;

  // Botones de atrás y avanzar:
  $atras = <<<HTML
  <a href="?quimioterapia" class="navegar__enlace">
    <span>Quimioterapia</span>
    <span data-src="multimedia/vectores/atras.svg"></span>
  </a>
HTML;
    
    
  $avanzar = <<<HTML
  <a href="?hormonoterapia" class="navegar__enlace">
    <span data-src="multimedia/vectores/adelante.svg"></span>
    <span>Hormonoterapia</span>
  </a>
HTML;
  }