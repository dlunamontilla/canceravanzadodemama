<?php
  if ( !isset($get) )
    exit;

  // Quimioterapia:
  if ( $get->modulo("quimioterapia") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">+ Quimioterapia</h2>

      <p class="text text--justify">La quimioterapia, terapia citotóxica, o “quimio” consiste en la administración de medicamentos que destruyen las células tumorales e impiden su rápida replicación, al alterar la síntesis de los ácidos nucleicos (ADN o ARN) de las células. Es una terapia sistémica, lo cual significa que afecta a todo el cuerpo a través del torrente sanguíneo.  La quimioterapia afecta a las células que tienen un rápido crecimiento, como las células cancerosas, pero también las del cabello, la sangre y del tracto gastrointestinal, que se recuperan por sí solas. Los objetivos de la quimioterapia dependen del tipo de cáncer y de cuánto se haya diseminado.
En el caso de las pacientes con cáncer de mama localmente avanzado,  la quimioterapia puede ser:</p>

      <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">Administrada como primera opción terapéutica (antes de la cirugía), por lo que recibe el nombre de quimioterapia neoadyuvante, primaria, de inducción o preoperatoria. La quimioterapia neoadyuvante tiene como objetivos principales: (1) mejorar la resecabilidad quirúrgica de los tumores que no son susceptibles a cirugía de entrada; (2) aumentar las tasas de cirugía conservadora o preservadora de la mama; (3) disminuir el estadio; (4) seleccionar terapias individualizadas, mediante la identificación temprana de la respuesta al tratamiento.</li>
        <li class="text text--justif">Administrada  posterior al tratamiento quirúrgico, recibe el nombre de quimioterapia adyuvante o quimioterapia secundaria, para ayudar a combatir las células cancerosas que persistan.</li>
      </ul>

      <p class="text text--justify">
        La quimioterapia antes  o después de la cirugía tiene un objetivo sistémico, es decir destruir las células de cáncer de mama que pueden estar “escondidas u ocultas” en otros órganos tales como hígado, pulmón, hueso o cerebro. Estas células ocultas son llamadas micrometástasis, las cuales son usualmente tan pequeñas que no son detectadas por los exámenes de laboratorio ni por los estudios de imágenes. Por lo que, la completa eliminación de las micrometástasis es un aliado extremadamente importante a la cirugía para la erradicación de la enfermedad.
      </p>

      <p class="text text--justify">
        En el caso de las pacientes con cáncer de mama metastásico,  la quimioterapia puede ser:
      </p>

      <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">Administrada como primera opción terapéutica, para el cáncer metastásicode novo.</li>
        <li class="text text--justify">Administrada en caso que el cáncer regrese: recurrencia loco-regional y/o distancia.</li>
      </ul>

      <h4 class="text text--right frontal frontal--secundario-3">Plan de Tratamiento</h4>
      <p class="text text--justify">
        El plan de tratamiento de cada persona será diferente, pero hay ciertas consideraciones generales que los médicos oncólogos toman en cuenta cuando se administra quimioterapia para tratar casos de cáncer de avanzado de mama.
      </p>

      <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">El estado de los receptores de hormonas y del receptor HER2.</li>
        <li class="text text--justify">La disponibilidad de las opciones de tratamiento.</li>
        <li class="text text--justify">Edad, y antecedentes médicos. Si presenta enfermedades cardíacas, hipertensión o alguna otra afección por la que recibe tratamiento, probablemente debe evaluarse posibles opciones de medicamentos de quimioterapia.</li>
        <li class="text text--justify">El estado menopáusico.</li>
        <li class="text text--justify">El equilibro entre los beneficios del medicamento con los posibles efectos secundarios, para lo que se debe considerar las preferencias del paciente.</li>
        <li class="text text--justify">Si ya le han administrado quimioterapia, en los casos de pacientes con cáncer de mama metastásico recurrente,  se debe tomar en cuenta el tratamiento que recibió anteriormente. El médico puede prescribir un sólo medicamento quimioterapéutico a la vez, o terapia secuencial,  lo cual significa uno después del otro, en lugar de en combinación.</li>
        <li class="text text--justify">En general, en las pacientes en estadio IV o metastásico, la mayoría de los medicamentos quimioterapéuticos se pueden administrar hasta que los efectos secundarios causen problemas, o bien hasta que dejen de ser eficaces. Si uno de ellos o una combinación de ellos no es eficaz, siempre hay otras posibilidades que se pueden intentar.</li>
      </ul>

      <h4 class="text text--right frontal frontal--secundario-3">Cronograma de Tratamiento</h4>
      <p class="text text--justify">
        El tratamiento se administra por períodos cortos de tiempo que se denominan “ciclos”, seguidos de un período de recuperación.  La cantidad de ciclos de un tratamiento y la duración total de cada uno varía según los medicamentos que se usen, pero la mayoría demora de 3 a 6 meses en completarse. El intervalo de tiempo entre cada ciclo dependerá del tipo de fármaco, y generalmente oscila entre 3 y 4 semanas. O bien, es posible que se reciba quimioterapia durante varios días consecutivos, o día por medio, (dosis densas) y luego se tendrá un período de recuperación. Esto generalmente significa que los medicamentos se administran aproximadamente cada 2 semanas en lugar del cronograma normal, que estipula la administración cada 3 semanas. La decisión de usar un cronograma tradicional o de dosis densas depende del tipo de quimioterapia que se considere emplear.
      </p>

      <p class="text text--justify">
        Generalmente, recibirá más de un medicamento (combinación de quimioterapia) que se conoce como esquema de tratamiento.
      </p>

      <h4 class="text text--right frontal fronta--secundario-3">
        Consideraciones a tener en cuenta por parte de la Paciente con Cáncer de Mama  Avanzado antes de Iniciar la Quimioterapia
      </h4>

      <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">Metas del Tratamiento: Curación en el caso de pacientes con cáncer de mama localmente avanzado o control de enfermedad en el caso de pacientes con cáncer de mama metastásico.</li>
        <li class="text text--justify">Existen alternativas de tratamiento en caso de no respuesta al esquema de quimioterapia.</li>
        <li class="text text--justify">Lugar de aplicación del tratamiento, puede ser Hospital, Consultorio Médico u Hogar.</li>
        <li class="text text--justify">
          <span>Vía de administración:</span>
          <ul class="listas listas--circulo listas--secundario-3">
            <li class="text text--justify">Endovenosa en gotas (infusión), a través de una vía periférica, en miembros, a la que se accede a través de la piel por venipunción en cada ciclo; o una vía central, a través de un catéter o de puertos. Los puertos son (port-a-cath o  mediport) de larga duración y deben ser colocados por el cirujano, ya que su inserción requiere de un pequeña cirugía que a menudo precisa de sedación y anestesia local (cirugía ambulatoria). El puerto queda oculto debajo de la piel de la parte superior de tórax, que se comunica a una vena de gran calibre a través de un tubo blando y delgado, denominado catéter. Una vez el medicamento se coloca a través de una aguja especial que se acopla al reservorio, no es necesaria la punción de la vena, por lo que el proceso resulta más fácil y más cómodo. Cuando se hayan completado los ciclos de la quimioterapia, el reservorio se extrae durante otra cirugía ambulatoria. Un catéter  es un tubo delgado y blando que se inserta en una vena de gran calibre durante un procedimiento ambulatorio. El otro extremo del catéter permanece fuera del cuerpo. Es prácticamente igual a un reservorio, pero sin la inserción del dispositivo. Los medicamentos quimioterapéuticos se administran a través de una aguja especial que se acopla al catéter. Es removido de manera ambulatoria una vez se hayan completado todos los ciclos de la quimioterapia. Constituye  la opción ideal para tratamientos cortos, ya que no pueden permanecer insertados  por largos períodos de tiempo.</li>
            <li class="text text--justify">Oral, en forma de comprimidos o cápsulas.</li>
            <li class="text text--justify">Subcutánea o Intramuscular.</li>
            <li class="text text--justify">Otro tipo de quimioterapia puede administrarse directamente en la columna vertebral y recibe el nombre de quimioterapia intratecal.</li>
          </ul>
        </li>

        <li class="text text--justify">Antes de la administración de terapia sistémica debe evaluarse su funcionamiento cardíaco, por lo que se le solicitará un Ecocardiograma.</li>
        <li class="text text--justify">Informe a su oncólogo médico que medicamentos está tomando, realice y lleve consigo a la consulta una lista de todos los medicamentos, tanto los prescritos por otro profesional de la salud como los que no, es decir los polivitamínicos, productos herbarios o cualquier otro producto. Sólo su Oncólogo médico podrá decirle si está bien o no que mantenga el tratamiento mientras recibe la quimioterapia.</li>
      </ul>

      <h4 class="text text--right frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la Paciente con Cáncer de Mama  Avanzado durante la Quimioterapia
      </h4>

      <ol class="listas listas--alfabetico listas--secundario-2">
        <li>
          <strong>Preparación previa al tratamiento:</strong>
          <p class="text text--justify"><i>Trate de  hacer un desayuno el día del tratamiento, ya que le ayudará a tolerar los efectos gastrointestinales.</i></p>
        </li>
      </ol>
    </div>
HTML;
    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="./" class="navegar__enlace">
      <span>Inicio</span>
      <span data-src="multimedia/vectores/inicio.svg"></span>
    </a>
HTML;
    
    
    $avanzar = <<<HTML
    <a href="?terapia-dirigida" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Terapia Dirigida</span>
    </a>
HTML;
  }