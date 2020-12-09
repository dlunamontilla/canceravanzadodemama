<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("cirugia") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Cirugía</h2>

      <p class="text text--justify">
        En las pacientes con diagnóstico de Cáncer Localmente Avanzado de Mama, la cirugía generalmente se realiza posterior al tratamiento neoadyuvante. El proceso de decisión del tipo de cirugía dependerá de la respuesta tumoral.
      </p>

      <p class="text text--justify">
        Los procedimientos quirúrgicos pueden ser la Mastectomía Radical Modificada, que consiste en la mastectomía total más la remoción en bloque del tejido axilar (disección axilar); o la Mastectomía Parcial o Mastectomía Conservadora de Mama o Lumpectomía, que consiste en la extirpación del tumor con una cantidad de tejido circundante, denominado margen, recomendada en casos seleccionados en los que se haya obtenido buena respuesta a la neoadyuvancia, acompañado por un procedimiento en la axila. Ambas circunstancias deben ir seguidas de Radioterapia.
      </p>

      <p class="text text--justify">
        La disección axilar o extirpación de los ganglios linfáticos generalmente es el procedimiento de abordaje de la axila. La biopsia del ganglio centinela en pacientes con cáncer de mama localmente avanzado inoperable de inicio es un proceso controvertido, aunque puede ser recomendado sólo en ciertos casos muy específicos de pacientes con baja carga axilar de inicio (N0-N1) y una respuesta completa axilar posterior al tratamiento sistémico. El cirujano debe tener en cuenta todas las recomendaciones universalmente aceptadas para la biopsia de ganglio centinela post-neoadyuvancia. La reconstrucción mamaria puede realizarse durante el procedimiento de la mastectomía o posteriormente meses o años después, todo depende de la decisión de la paciente. La reconstrucción mamaria no es indicada en paciente con diagnóstico de carcinoma inflamatorio.
      </p>

      <p class="text text--justify">
        En los casos de cáncer de mama metastásico, la cirugía sólo está recomendada para hacer control local de la enfermedad en pacientes o lesiones vegetantes, sangrantes y/o infectadas.
      </p>

      <div class="destacado destacado--secundario-3">
        <p>En las pacientes con diagnóstico de Cáncer Localmente Avanzado de Mama, la cirugía generalmente se realiza posterior al tratamiento neoadyuvante. En los casos de cáncer de mama metastásico, la cirugía sólo está recomendada para hacer control local de la enfermedad en pacientes o lesiones vegetantes, sangrantes o infectadas.</p>
        <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
      </div>

      <h3 class="text text--right frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la paciente con Cáncer de Mama  Avanzado antes de la Cirugía
      </h3>

      <p>
        En toda cirugía se debe realizar una planificación pre-operatoria.
      </p>

      <ol class="listas listas--alfabetico listas--secundario-2 listas--bold">
        <li>
          <p><strong>Planificación Preoperatoria</strong></p>

          <ul class="listas listas--disco listas--secundario-3">
            <li>
              <p>Información Médica relevante.</p>

              <p class="text text--justify">
                Durante la planificación de la cirugía su médico tratante debe considerar:
              </p>

              <ul class="listas listas--circulo">
                <li class="text text--justify">
                Antecedentes médicos: Patología médicas previas y qué medicamentos está tomando actualmente, incluyendo suplementos vitamínicos. De igual manera debe discutir con su equipo médico si toma aspirina o algún tipo de terapia anticoagulante, ya que debe ser descontinuada días antes de su intervención quirúrgica.
                </li>

                <li>Antecedentes quirúrgicos de intervenciones previas.</li>
                <li>Alergia a medicamentos.</li>
                <li>Hábitos tabáquicos.</li>
              </ul>
            </li>

            <li>
              <p>Donación de sangre:</p>

              <p class="text text--justify">
                Especialmente en los casos de mastectomía y reconstrucción.  Hable con su cirujano qué tipo de donante y qué cantidad de unidades son necesarias. Tenga en consideración que debe planearse con algunas semanas de anticipación.
              </p>
            </li>

            <li>
              <p>Estudios Preoperatorios:</p>

              <ul class="listas listas--disco">
                <li class="text text--justify">
                  Análisis de Sangre: Hemoglobina y Hematocrito,  Cuenta Blanca, Urea y Creatinina. Perfil Hepático. Pruebas de Coagulación. Serología y Perfil para Hepatitis B-C.
                </li>

                <li class="text text--justify">
                  Radiografía de tórax y electrocardiograma para la evaluación cardiovascular preoperatoria, y evaluación pre-anestésica. La evaluación cardiovascular permite clasificar a los pacientes en grupos de riesgo según la presencia de comorbilidades y anormalidades en las pruebas preoperatoria.  La evaluación pre-anestésica permite discutir con el anestesiólogo el  plan de administración de anestesia durante la cirugía.
                </li>
              </ul>
            </li>

            <li class="text text--justify">
              El ingreso hospitalario se realiza o bien el día antes de la cirugía o el mismo día. Asegúrese de ir acompañada. Volver a casa el mismo día es complicado, ya que muchos medicamentos administrados durante la cirugía mantendrán su efecto durante cierto tiempo.  Generalmente, permanecerá hospitalizada durante todo ese día, por lo que necesitará de ayuda.
            </li>

            <li class="text text--justify">
              Al ingresar a la Institución Hospitalaria, deberá firmar un formulario que recibe el nombre de consentimiento informado, en el que voluntariamente acepta someterse a la cirugía, comprende el procedimiento planificado y acepta los riesgos inherentes. Lea atentamente el formulario y asegúrese de analizar que lo que está firmando es el procedimiento acordado con su cirujano con antelación.
            </li>

            <li class="text text--justify">
              El día antes  de la cirugía no debe ingerir alimentos ni bebidas después de la media noche.
            </li>
          </ul>
        </li>
      </ol>
      
      <h3 class="text text--right frontal fronta--secundario-3">
        Consideraciones a tener en cuenta por parte de la paciente con Cáncer de Mama  Avanzado durante la Cirugía
      </h3>

      <ol class="listas listas--alfabetico listas--secundario-2 listas--bold">
        <li>
          <p><strong class="frontal frontal--secundario-2">Monitoreo Intraoperatorio/Postoperatorio Inmediato</strong></p>
          
          <p class="text text--justify">
            El quirófano puede ser un sitio desconcertante cuando entra por primera vez, ya que va a  estar en contacto con muchas personas que no ha visto antes. Generalmente el cirujano o su asistente suelen estar en el quirófano mientras esté despierta. El quirófano es  un ambiente frío por lo que puede pedir un manta para mantenerle caliente.
          </p>

          <p class="text text--justify">
            Todo el personal que ve en el quirófano, está para asistir el procedimiento. Por lo que una vez allí, le colocarán unos electrodos en el pecho y la espalda para monitorizar su ritmo cardíaco, un sensor en el dedo que mide la presión de oxígeno. En un brazo un manguito para tomarle la presión, y en otro brazo una vía de infusión endovenosa periférica por donde le administran los fluidos (soluciones) y los medicamentos para la anestesia. Este monitoreo se realiza durante toda la cirugía. Para la mastectomía más la disección axilar y/o la reconstrucción mamaria se emplea anestesia general. Durante el procedimiento el anestesiólogo le colocará una máscara de oxígeno sobre la nariz y la boca para administrarle la anestesia inhalatoria,  que le mantendrá dormida y sin dolor durante la cirugía. Si la cirugía es prolongada es posible que le coloquen medias de compresión  para evitar la formación de coágulos en las piernas.
          </p>

          <p class="text text--justify">
            Luego de la cirugía será trasladada a la  Sala de Recuperación o de Cuidados Post-anestésicos, donde se mantiene monitorizada la presión arterial, frecuencia cardíaca y respiración hasta estar completamente consciente y estable. Si siente dolor, refiéralo. El personal de enfermería  está preparado para administrarte los analgésicos que el cirujano haya indicado en las órdenes médicas. De igual manera puede solicitarle una manta si siente frío, lo cual es normal durante la recuperación de la cirugía.
          </p>

          <p class="text text--justify">
            Verifique el procesamiento de la biopsia quirúrgica, así como el día y la forma de entrega de los resultados. Estos resultados deben ser vistos por el cirujano quien evaluará y discutirá con usted los pasos a seguir.
          </p>
        </li>
      </ol>

      <div class="destacado destacado--morado">
        <p>Verifique el procesamiento de la biopsia quirúrgica, así como el día y la forma de entrega de los resultados. Estos resultados deben ser vistos por el cirujano quien evaluará y discutirá con usted los pasos a seguir.</p>
        <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
      </div>

      <h3 class="text text--right frontal frontal--secundario-3">
        Consideraciones a tener en cuenta por parte de la paciente con Cáncer de Mama  Avanzado después de la Cirugía
      </h3>

      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <li>
          <p><strong class="frontal frontal--secundario-2">Drenajes.</strong></p>

          <p class="text text--justify">
            Son catéteres de plástico que terminan en un reservorio, que se utilizan en las pacientes sometidas a mastectomías y/o disección axilar. Estos drenajes colectan el líquido inflamatorio normal que se acumula posterior a la cirugía, mantienen una presión  de succión y permiten la coaptación de los colgajos. Se fijan por puntos de suturas en piel. Usualmente se mantienen durante 1 a 3 semanas, pero esto va a depender volumen de líquido que drena (puede retirarse cuando el drenaje es menor de 30 cc o ml al día durante 2 días consecutivos). La paciente o cuidador debe tener un registro diario de la cantidad de líquido drenado, así como debe conocer su manejo para el mantenimiento de la presión negativa del reservorio que facilita la succión.
          </p>
        </li>

        <li>
          <p><strong class="frontal frontal--secundario-2">Efectos Colaterales.</strong></p>

          <p class="text text--justify">
            Efectos Colaterales o posibles las complicaciones asociados con una cirugía de cáncer de mama.
          </p>

          <ol class="listas listas--romano lista--secundario-3">
            <li>
              <p>Dolor.</p>

              <p class="text text--justify">
                Cualquier procedimiento quirúrgico produce dolor en el sitio de la incisión (cicatriz quirúrgica). Puede controlarse con la prescripción Analgésicos Antinflamatorio No Esteroideos (AINES).  Generalmente resuelve a  la semana del procedimiento. Si persiste o no puede ser controlado con la medicación consulte a su médico porque se puede estar en presencia de una infección.
              </p>
            </li>

            <li>
              <p>Seroma.</p>

              <p class="text text--justify">
                Consiste en la acumulación de líquido transparente en la cavidad quirúrgica, es decir en el área donde se ha removido tejido. Si se ha realizado una Mastectomía Parcial, el seroma ayuda a mantener la apariencia normal del contorno de la mama. Sin embargo, en ocasiones la acumulación excesiva de líquido puede producir una sensación de presión u opresión desagradable para la paciente. Si esto se produce,  el fluido debe ser aspirado percutáneamente con una jeringa con aguja fina en el consultorio médico.
              </p>
            </li>

            <li>
              <p>Hemorragia, Equimosis y Hematoma.</p>

              <p class="text text--justify">
                Cualquier procedimiento quirúrgico tiene riesgo de sangrar y generalmente ocurre durante las primeras 48 horas. Los pequeños moretones que son comúnmente evidenciable en el sitio quirúrgico,  reciben el nombre de equimosis, y se producen por la extravasación a piel de pequeñas cantidades de sangre. Éstos resuelven en un período de 1 a 3 semanas con el proceso normal de cicatrización. Si la cantidad de sangre es mayor por debajo de la piel con equimosis y ésta se colecta, es lo que se conoce como hematoma. Los hematomas pueden tratarse son vendaje compresivo y en algunas ocasiones a consideración del equipo médico con la evacuación quirúrgica.
              </p>
            </li>

            <li>
              <p>Infección de la herida.</p>

              <p class="text text--justify">
                Es tratada con antibióticos. Ocurre a los 5 a 10 días del postoperatorio y se caracteriza por dolor, rubor e inflamación en la piel que rodea la incisión quirúrgica, y/o fiebre. Si se produce colección de pus, recibe el nombre de absceso. En estos casos puede considerarse el drenaje percutáneo (por aspiración) o el drenaje quirúrgico.
              </p>
            </li>

            <li>
              <p>Insensibilidad (adormecimiento) de la piel alrededor de la incisión o sensibilidad aumentada</p>

              <p class="text text--justify">
                En el caso de la mastectomía total  corresponde al área de la pared torácica y en el caso que  se haya realizado un vaciamiento axilar corresponde a la parte interna del brazo. La sensación de adormecimiento usualmente es permanente. Algunas veces el acariciar suavemente con su mano puede ayudar a disminuir las molestias en esta área.
              </p>

              <p class="text text--justify">
                Usted podría experimentar el Síndrome Postmastectomía,  como posible efecto colateral, que  consiste en dolor persistente en el área del tórax, la axila y el brazo. Los síntomas son opresión, ardor, hormigueo o picazón en estas zonas. El Dolor de Miembro Fantasma, es otro tipo de patología, en la que su cerebro mantiene la idea que en el sitio de la mastectomía se conserva presente la mama. Esta sensación es temporal hasta que el cerebro se adapte a la ausencia de la mama.
              </p>
            </li>

            <li>
              <p>Cordón o Banda fibrosa.</p>

              <p class="text text--justify">
                Síndrome de Red Axilar. En esta afección, se forma un tejido cicatricial tenso parecido a un cordón que se extiende desde la axila, por la parte interna del brazo, hasta la muñeca, lo que produce molestias, dolor y limita la amplitud de los movimientos. El síndrome de red axilar se debe a la inflamación y cicatrización de los vasos sanguíneos o linfáticos en la zona de la axila. Los vasos se endurecen, y esto hace que se forme como una especie de  cuerda. El calor, los masajes y los ejercicios de estiramiento constituyen alternativas terapéuticas. Al igual que con el linfedema, es importante consultar a un fisioterapeuta acreditado.
              </p>
            </li>

            <li>
              <p>Linfedema.</p>

              <p class="text text--justify">
                Es la acumulación anormal de líquidos en tejidos blandos debido a una disrupción en el sistema linfático. Es una potencial secuela en pacientes con cáncer de mama de la linfadenectomía o vaciamiento axilar, y/o si reciben radioterapia en el tórax y axila. Puede aparecer después de meses o incluso años del tratamiento, el riesgo nunca desaparece.
              </p>
            </li>
          </ol>
        </li>
      </ol>

      <div class="imagen imagen--verde" data-src="multimedia/vectores/imagen-2.4-herramientas-cirugia.svg">
        <img src="https://i.ibb.co/V9CXHRs/imagen-2-4-a-herramientas.png" alt="">
      </div>


    </div>
HTML;

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?hormonoterapia" class="navegar__enlace">
      <span>Hormonoterapia</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;
    
    
    $avanzar = <<<HTML
    <a href="?radioterapia" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Radioterapia</span>
    </a>
HTML;
  }