<?php
  if ( !isset($get) )
    exit;

  // Quimioterapia:
  if ( $get->modulo("quimioterapia") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Quimioterapia</h2>

      <p class="text text--justify">La quimioterapia, terapia citotóxica, o “quimio” consiste en la administración de medicamentos que destruyen las células tumorales e impiden su rápida replicación, al alterar la síntesis de los ácidos nucleicos (ADN o ARN) de las células. Es una terapia sistémica, lo cual significa que afecta a todo el cuerpo a través del torrente sanguíneo.  La quimioterapia afecta a las células que tienen un rápido crecimiento, como las células cancerosas, pero también las del cabello, la sangre y del tracto gastrointestinal, que se recuperan por sí solas. Los objetivos de la quimioterapia dependen del tipo de cáncer y de cuánto se haya diseminado. En el caso de las pacientes con cáncer de mama localmente avanzado,  la quimioterapia puede ser:</p>

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

      <h5 class="text text--left title frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la Paciente con Cáncer de Mama  Avanzado antes de Iniciar la Quimioterapia
      </h5>

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

      <h5 class="text text--left title frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la Paciente con Cáncer de Mama  Avanzado durante la Quimioterapia
      </h5>

      <ol class="listas listas--alfabetico listas--secundario-2">
        <!-- a. -->
        <li>
          <strong class="frontal frontal--secundario-2">Preparación previa al tratamiento:</strong>
          <p class="text text--justify"><i>Trate de  hacer un desayuno el día del tratamiento, ya que le ayudará a tolerar los efectos gastrointestinales.</i></p>

          <p class="text text--justify">
            Debe ir preparada, usar ropa holgada y portar un bolso con efectos personales que le puedan proporcionar comodidad. La mayoría de los centros cuentan con una sala con sillones, pero durante el tiempo que toma la administración del medicamento, lo más probable es que se fastidie, por lo que debería llevar consigo:
          </p>

          <ul class="listas listas--disco listas--secundario-3">
            <li>Música y audífonos. Es tentativo algunas personas prefieren recostarse y mantenerse tranquilas.</li>
            <li>Algún tipo de lectura como un libro, crucigramas u otro pasatiempo (computadora portátil, teléfono inteligente, cónsola de videojuegos, juego de cartas o un cuaderno de dibujo o escritura). Puede usarlo o no, muchas veces pierde la capacidad de mantener la de concentración o atención fija en algo,  por lo que ir acompañada es importante para compartir una conversación.</li>
            <li>Una almohada pequeña o reposa cabeza.</li>
            <li>Una manta pequeña y medias, generalmente los sitios donde se administra la quimioterapia son fríos.</li>
            <li>Agua Mineral para hidratarse. Beba mucha agua. Los medicamentos de la quimioterapia se eliminan por la orina, en la cual se concentran. La orina puede volverse anaranjada, roja o más amarilla, o tener un fuerte olor a medicina.</li>
            <li>Galletas saladas para combatir el sabor metálico en la boca.</li>
            <li>Manteca de cacao o vaselina para hidratar los labios.</li>
            <li>Implementos de aseo personal como toallitas húmedas y desinfectante de manos en gel.</li>
          </ul>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">El día de tratamiento:</strong></p>

          <ul class="listas listas--disco listas--secundario-3">
            <li>Debe registrarse en el centro que administra la quimioterapia, como cuando se presenta en el consultorio de un médico.</li>
            <li>Se registran los datos de sus signos vitales, es decir la presión arterial, el pulso, la temperatura y la frecuencia respiratoria.</li>
            <li>Le colocan una vía endovenosa. Cuando haya recibido la totalidad del medicamento, se extrae la vía. Si ya tiene un puerto o catéter, recibe el medicamento a través de éste y no es necesario colocar una vía endovenosa. Inician el tratamiento con la administración de medicamentos para prevenir náuseas y reacciones alérgicas (medicamentos pre-quimioterapia). Asimismo, le  administran líquidos que ayudan a optimizar los efectos de los medicamentos de la quimioterapia.</li>
            <li>Antes de que le administren los medicamentos de la quimioterapia, la enfermera o enfermero de oncología verificará su ficha o plan de tratamiento: el medicamento y la dosificación indicada.</li>
            <li>Comienzan con el proceso de infusión endovenosa. El procedimiento puede demorar varias horas en completarse. Cuando finaliza la sesión de quimioterapia, el personal de enfermería se asegura que sus signos vitales (pulso, frecuencia cardíaca y respiratoria) sean estables.</li>
          </ul>
        </li>

        <!-- c. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Mantenimiento de las actividades diarias durante el tratamiento:</strong></p>

          <p class="text text--justify">
            Muchas pacientes pueden mantener su cotidianidad, como seguir trabajando o estudiando; pero la presencia y magnitud de los efectos secundarios pueden restringir algunas actividades. La paciente debe estar consciente que el día de la administración del tratamiento, es no laborable, y posiblemente el día posterior, trate de descansar.
          </p>

          <p class="text text--justify">
            Si los efectos de la quimioterapia le impiden mantenerse en sus actividades puede realizar ciertos cambios tales como, recibir la quimioterapia justo antes del fin de semana, o bien puede considerar tener un cambio en su horario de trabajo y/o estudio mientras se encuentra bajo tratamiento. 
          </p>
        </li>
      </ol>

      <h5 class="text text--left title frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la Paciente con Cáncer de Mama  Avanzado posterior a la Quimioterapia
      </h5>

      <p class="text text--justify">
        Los efectos secundarios más comunes son náuseas, vómitos, fatiga, trastornos gastrointestinales, caída del cabello, cambios en las uñas, inflamación de la boca (que incluso se puede acompañar de la aparición de llagas o úlceras), y descenso del número de glóbulos rojos, glóbulos blancos y/o plaquetas. No obstante pueden aparecer otros como el dolor, pero no todas las pacientes los experimentan y  pueden variar en intensidad y duración. Deben ser notificados a su médico tratante, ya que existen alternativas de tratamiento. Recuerde que no todas las pacientes reciben el mismo tratamiento, algunos fármacos generan más efectos secundarios que otros. Su estado general de salud y su condición física afectará también la forma que su cuerpo reacciona a la quimioterapia. En la mayoría de las pacientes los efectos secundarios pueden controlarse, son transitorios y desaparecen con el tiempo una vez haya completado el tratamiento.
      </p>

      <p class="text text--justify">
        En general, la quimioterapia afecta las partes del cuerpo en las que las células normales se dividen constantemente como la boca, los folículos pilosos, las uñas, el tubo digestivo (incluyendo el esófago, el estómago y el intestino), y la médula ósea disminuyendo la producción de células sanguíneas: glóbulos rojos, glóbulos blancos y plaquetas.
      </p>

      <p class="text text--justify">
        Entre la culminación de un ciclo y el inicio del siguiente, el médico oncólogo solicitará una prueba de laboratorio: la Hematología Completa y Química Sanguínea. La química sanguínea, permite conocer cómo está funcionando su hígado y los riñones. La hematología completa o recuento sanguíneo da la información respecto a la cantidad de células sanguíneas: glóbulos rojos o eritrocitos, a través de la Hemoglobina y el hematocrito; glóbulos blancos o leucocitos a través de la cuenta blanca y fórmula y plaquetas.
      </p>

      <!-- Recuendo de las plaquetas | Diagrama -->
      <div class="imagen imagen--verde" data-src="multimedia/vectores/imagen-2.1-herramientas-quimioterapia.svg">
        <!-- Header -->
        <div class="plaquetas__item plaquetas__item--header">
          <div class="plaquetas__header plaquetas__header--morado">Recuento de Células Sanguíneas durante la Quimioterapia</div>
          <div class="plaquetas__content text text--center">
            Entre la culminación de un ciclo y el inicio del siguiente, el médico oncólogo solicitará una prueba de laboratorio: la hematología completa y química sanguínea. La química sanguínea, permite conocer cómo está funcionando su hígado y los riñones. La hematología completa o recuento sanguíneo da la información respecto a la cantidad de células sanguíneas: glóbulos rojos o eritrocitos, a través de la hemoglobina y el hematocrito; glóbulos blancos o leucocitos a través de la cuenta blanca y fórmula y plaquetas.
          </div>
        </div>

        <!-- Content -->
        <div class="plaquetas__item plaquetas__item--plateado plaquetas__item--left">
          <div class="plaquetas__header plaquetas__header--turquesa">Información acerca de las Células Sanguíneas</div>
          <div class="plaquetas__content">
            <div class="flex flex--top">
              <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/globulos-rojos.svg"></div>
              <div class="flex__item">Los glóbulos rojos o eritrocitos, contienen hemoglobina, que es la proteína encargada de transportar el oxígeno en la sangre a todas partes del cuerpo, por lo que cuando disminuyen los niveles de glóbulos rojos (lo que se denomina anemia), los tejidos del cuerpo no reciben el suficiente oxígeno para funcionar adecuadamente. Se evalúan a través de la Hemoglobina y el Hematocrito (fracción del volumen sanguíneo total conformada por glóbulos rojos).</div>
            </div>

            <hr>

            <div class="flex flex--top">
              <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/globulos-blancos.svg"></div>
              <div class="flex__item">Los glóbulos blancos o leucocitos, combaten las infecciones. El recuento de glóbulos blancos o leucocitos, generalmente comienza a descender alrededor de una semana después del inicio de cada ciclo de tratamiento. Los niveles de glóbulos blancos o leucocitos alcanzan su punto más bajo alrededor de 7 a 14 días después de la quimioterapia. Esto es lo que se conoce como nadir. Este es el período de mayor susceptibilidad a una infección. A partir de aquí, su recuento de glóbulos blancos o leucocitos comienza a aumentar nuevamente hasta alcanzar un nivel normal, lo que puede llevar de 3 a 4 semanas, el tiempo que toma la médula ósea en reanudar su producción normal de leucocitos. Una vez alcance el nivel normal de glóbulos blancos, se podrá aplicar el siguiente ciclo de quimioterapia. Sin embargo, su médico puede demorar el siguiente ciclo si los neutrófilos (tipo de glóbulo blanco o leucocito) permanecen bajos, lo que se denomina neutropenia.</div>
            </div>

            <hr>

            <div class="flex flex--top">
              <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/plaquetas.svg"></div>
              <div class="flex__item">Las plaquetas, intervienen en la coagulación de la sangre para detener las hemorragias. Su disminución puede provocar sangrados o hematomas. Debes tener presente que la aspirina tiene un efecto sobre las plaquetas, alterando la coagulación, de igual manera la ingesta de ciertos suplementos vitamínicos y herbales: Debe informar a su médico los medicamentos que toma, así como evitar automedicarse para el dolor.</div>
            </div>
          </div>
        </div>

        <div class="plaquetas__item plaquetas__item--plateado plaquetas__item--right">
          <div class="plaquetas__header plaquetas__header--verde">Signos y Síntomas de la Disminución de las Células Sanguíneas</div>
          <div class="plaquetas__content">
            <p>Debe recurrir de inmediato al médico en caso de presentar alguno de los siguientes síntomas o signos:</p>

            <div class="flex flex--top">
              <!-- Parte izquierda -->
              <div class="flex__item flex__item--50">
                <strong>Disminución de Glóbulos Rojos (Anemia):</strong>
                <div class="flex flex--top">
                  <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/disminucion-globulos-rojos.svg"></div>
                  <div class="flex__item not-padding">
                    <ul>
                      <li>Palidez (piel, boca o encías).</li>
                      <li>Sensación de frío.</li>
                      <li>Fatiga.</li>
                      <li>Debilidad muscular.</li>
                      <li>Mareos.</li>
                      <li>Palpitaciones.</li>
                    </ul>
                  </div>
                </div>

                <p><strong>Disminución de las Plaquetas:</strong></p>
                <div class="flex flex--top">
                  <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/disminucion-plaquetas.svg"></div>
                  <div class="flex__item not-padding">
                    <ul>
                      <li>Moretones sin antecedente traumático.</li>
                      <li>Petequias o pequeños puntos rojos en la piel.</li>
                      <li>Orina roja o rosada.</li>
                      <li>Evacuaciones negras o con sangre.</li>
                      <li>Hemorragia nasal o de encías.</li>
                      <li>Dolor de cabeza y dolores articulares.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Parte derecha -->
              <div class="flex__item">
                <p><strong>Disminución de Glóbulos Blancos:</strong></p>
                <div class="flex flex--top">
                  <div class="flex__item plaquetas__icon" data-src="multimedia/vectores/disminucion-globulos-blancos.svg"></div>
                  <div class="flex__item not-padding">
                    <ul>
                      <li>Fiebre.</li>
                      <li>Escalofríos o sudores.</li>
                      <li>Ardor al orinar.</li>
                      <li>Diarrea o dolor abdominal.</li>
                      <li>Flujo vaginal anormal.</li>
                      <li>Tos y dolor de garganta.</li>
                      <li>Dolor, calor y enrojecimiento de una herida o del puerto de inserción de un catéter.</li>
                    </ul>
                  </div>
                </div>

                <p>&nbsp;</p>
                <div class="plaquetas__icon" data-src="multimedia/vectores/celulas.svg"></div>
                <div class="plaquetas__thumbnail-svg" data-src="multimedia/vectores/pacientes-sintomas.svg"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="plaquetas__item plaquetas__item--footer">
          <div class="plaquetas__header plaquetas__header--morado">Consejos para el paciente:</div>
          <div class="plaquetas__content">
            <div class="text text--center">Debe recurrir de inmediato al médico en caso de presentar:</div>

            <div class="flex flex--bottom flex--wrap">
              <div class="flex__item flex__item--2-5">
                <div>
                  <strong>Disminución de Glóbulos Rojos (Anemia):</strong>
                  <p>Los médicos tratan la anemia en función de la causa y los síntomas.</p>
                </div>

                <!-- Elementos con íconos -->
                <div class="flex">
                  <!-- Lavarse las manos con frecuencia -->
                  <div class="flex__item">
                    <div class="svg svg--icon" data-src="multimedia/vectores/lavarse-las-manos.svg"></div>
                    <span>Lavarse las manos con frecuencia y utilizar gel antibacteriano para las manos.</span>
                  </div>

                  <!-- Evitar aglomeramiento -->
                  <div class="flex__item">
                    <div class="svg svg--icon" data-src="multimedia/vectores/evitar-aglomeramiento.svg"></div>
                    <span>Evitar las aglomeraciones de personas. Usar tapabocas.</span>
                  </div>
                </div>
              </div>

              <!-- Disminución de glóbulos blancos -->
              <div class="flex__item flex__item--5">
                <div>
                  <strong>Disminución de Glóbulos blancos:</strong>
                  <p>Lo más adecuado es la prevención:</p>
                </div>

                <div>
                  <div class="svg svg--icon" data-src="multimedia/vectores/evitar-cortes-de-piel.svg"></div>
                  <span>Evitar cortes en piel: Mantener humectada la piel para prevenir grietas cutáneas por resequedad.</span>
                </div>
              </div>

              <!-- Lavarse las manos -->
              <div class="flex__item flex__item--5">
                <div class="svg svg--icon" data-src="multimedia/vectores/lavar-verduras.svg"></div>
                <span>Lavar las verduras y frutas antes de ingerirlas.</span>
              </div>

              <!-- Cuadro color turquesa -->
              <div class="flex__item flex__item--5">
                <div class="padding padding--all fondo fondo--html fondo--secundario-3 frontal frontal--blanco">En pacientes con neutropenia, el médico oncólogo puede indicar antibióticos, para prevenir infecciones, mientras ésta persista. Si se produce neutrocitopenia con ebre, es posible que el médico le prescriba medicamentos denominados factores estimuladores de colonias, que son proteínas a ayudan al cuerpo a producir glóbulos blancos, y así ayudar a evitar las infecciones.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
HTML;
    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?glosario" class="navegar__enlace">
      <span>Glosario</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;
    
    
    $avanzar = <<<HTML
    <a href="?terapia-dirigida" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Terapia Dirigida</span>
    </a>
HTML;
  }