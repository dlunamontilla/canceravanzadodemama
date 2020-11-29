<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("herramientas-comunicacion") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">
        Herramientas de Comunicación
      </h2>

      <p class="text text--justify">
        La buena comunicación entre las pacientes de cáncer avanzado de mama, los familiares que los cuidan y el equipo de atención de salud es un aspecto crítico de su  bienestar psicosocial, ya que reduce sus preocupaciones, mejora su entendimiento del proceso, promueve la adherencia al tratamiento y ayuda a mejorar su calidad de vida.
      </p>

      <p class="text text--justify">
        La palabra cáncer o sus equivalentes semánticos no se pronuncian con la regularidad debida en nuestra sociedad, ni hablar de las implicaciones que se le atribuyen a la palabra metástasis. Muchas veces la paciente y sus familiares no preguntan,  por lo que el médico ofrece pocos detalles de la enfermedad, algo visto tácitamente como un convenio social y culturalmente establecido entre la paciente, su familia y su médico tratante. Por lo que, para establecer metas de una buena comunicación para las pacientes  se deben implementar  y desarrollar herramientas de interacción abierta con la familia y su médico tratante, con la finalidad de adecuar la toma de decisión   y permitir el soporte emocional para abordar su proceso.
      </p>

      <!-- Alfabético -->
      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Familia</strong></p>

          <p class="text text--justify">
            La paciente tiene el derecho de decidir a quienes compartir  su diagnóstico, de qué manera y de qué forma. Es  importante que le cuente a los familiares cercanos porque tiene más probabilidad de recibir de ellos el apoyo emocional y práctico. La familia es el primer cuidador, con una interacción cotidiana, por lo que debe saber cómo pedir y cómo recibir ayuda. Muchas veces resulta incómodo pedir ayuda, responder preguntas sobre cómo está o expresar que necesita su propio tiempo y espacio, para establecer límites propios. De igual manera debe entender que en ocasiones hacen comentarios incorrectos como “sé fuerte”, “sé positiva” o “todo depende de la actitud”, no por falta de consideración, sino porque simplemente no saben cómo abordar la situación. Si está en tratamiento sin efectos secundarios visibles, los familiares pueden que le expresan comentarios como que “no parece” o “no te ves así,” evite tomarlos como algo personal y enfóquese en comunicarles el apoyo que de ellos necesita.
          </p>

          <!-- Romano -->
          <ol class="listas listas--romano listas--bold">
            <!-- i. -->
            <li>
              <p><strong>Pareja</strong></p>

              <p class="text text--justify">
                La comunicación abierta y efectiva puede estar asociada con un número de beneficios para ambos. La honestidad es esencial y necesaria para navegar la nueva realidad de la pareja. Una comunicación más abierta ha sido asociada con mayor satisfacción, mayor intimidad, menos tensión y menos negación de la circunstancia. En algunas culturas, como la nuestra, discutir preocupaciones y satisfacciones como pareja es un tema sensible; sin embargo, a pesar de estas susceptibilidades, evitarlo no es la mejor solución. La comunicación abierta permite a la pareja navegar por el proceso, al lidiar con los problemas sexuales, los problemas emocionales,  las limitaciones físicas, las preocupaciones económicas e incluso la posibilidad de la muerte, al  aumentar el apoyo del uno en el otro. Siempre debe tomar tiempo para expresarse, sea honesta (diga exactamente lo que quiere, nunca dé por sentado que su pareja está consciente de lo que necesita o comprende cómo se siente. Dele tiempo y espacio a su pareja también, para expresar lo que ésta requiera o necesita.  Acepte los pensamientos y sentimientos de su pareja sin criticar ni culpar.
              </p>

              <p class="text text--justify">
                El médico tratante puede ser un modelo para las parejas al demostrar el valor de una comunicación respetuosa, honesta, abierta y culturalmente sensible, al permitirla expresión de sus sentimientos sin recurrir a las negativas consecuencias de la crítica. De igual manera, éste puede proporcionar estrategias efectivas para la adecuada comunicación con la pareja.
              </p>
            </li>

            <!-- ii. -->
            <li class="text text--justify">
              <p><strong>Hijos</strong></p>

              <p class="text text--justify">
                Las pacientes se preguntan si decirles a los niños su diagnóstico, cómo compartir la noticia de una manera adecuada, qué reacciones puede producir y  qué recomendaciones pueden proporcionarse para su soporte emocional. Algunas recomendaciones para la comunicación con sus hijos son:
              </p>

              <ul class="listas listas--disco listas--secundario-3">
                <li class="text text--justify">
                  Proporcione información precisa y apropiada para la edad del niño. No tenga miedo de usar la palabra cáncer. Indícale la parte del cuerpo que afecta. Debe estar preparada para preguntas difíciles por parte de sus hijos, si no sabe la respuesta está bien decir no sé.  Los padres sienten que protegen a los niños, sino dicen nada, pero si es necesario que ellos estén informados. Asegúrale que no fue su culpa que su mamá enfermara. Puede ayudar identificar algún familiar o adulto de confianza con quien él o ella puedan hablar respecto al cáncer. Anime a  los niños a expresar sus sentimientos y use el lenguaje apropiado para su edad. Esté preparado para dialogar sobre el  significado de la muerte con sus hijos.
                </li>

                <li class="text text--justify">
                  Escoja el tiempo específico y el lugar adecuado. Los niños se sienten cómodos hablando en casa, en privado, uno a uno, puede plantear este tipo de conversaciones en momentos que los niños son más abiertos como en los paseos en carro y a la hora de dormir. Para informar actualizaciones o informaciones generales las reuniones familiares son una opción.
                </li>

                <li class="text text--justify">
                  Explique como el tratamiento la afectará. Los niños sienten curiosidad y preocupación por las manifestaciones físicas de la enfermedad como la pérdida de cabello, fatiga y náuseas. Una vez ellos entiendan que estos eventos son causados por el tratamiento, necesitan ser reforzados que estos efectos significan que está siendo tratada. 
                </li>
              </ul>
            </li>
          </ol>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Médicos</strong></p>

          <p class="text text--justify">
            La comunicación eficaz y compasiva es un componente central en el tratamiento de las pacientes con cáncer avanzado de mama. Los médicos pueden ofrecerle información respecto  a una miríada de temas  a todo largo del espectro de la enfermedad, tal como su diagnóstico, el tipo de recurrencia o progresión de la enfermedad, las opciones terapéuticas, los efectos secundarios y cómo afrontarlos, lo que puede y debe hacer durante el tratamiento así como su pronóstico, seguimiento y preparación para el final de la vida. La interacción médico-paciente es un proceso dinámico, socialmente construido y recíproco que se basa en al menos dos participantes, tanto el médico como la paciente deben participar activamente y ser comunicadores competentes. Las habilidades de comunicación del médico desempeñan un rol esencial y decisivo en el modo en que el paciente aborda su proceso.
          </p>

          <p class="text text--justify">
            De igual manera, las competencias de comunicación de la paciente puede, de hecho, influir en las respuestas del profesional de la salud, por lo que la información proporcionada por éste debe adaptarse al entorno social y cultural de cada paciente y su familia. El objetivo es  evitar que la paciente no entienda o malinterprete la manera en que la  información médica se le está brindando. Si necesita más detalle después que su médico le da una explicación, DIGALO. Algunas veces los médicos utilizan palabras técnicas que son difíciles de entender. Si la respuesta no es clara o no queda bien entendida, pida que se lo expliquen nuevamente. Asegúrese de saber lo que necesita o le preocupa antes de salir del consultorio. Al hablar con el médico, debe hacer preguntas específicas sobre cualquier preocupación que se tenga.
          </p>

          <p class="text text--justify">
            El paciente debe preguntarse cuánto desea saber sobre su enfermedad, incluyendo su extensión, sus metas y la intención del tratamiento.  Algunas pacientes se sienten en  control cuando conocen todos los hechos; otras se sobrecargan con la información, se sienten abrumadas y prefieren no discutirlo; y otras optan por dejar que su médico tome las decisiones pertinentes para su caso.
          </p>
        </li>
      </ol>

      <div class="imagen imagen--mediana" data-src="multimedia/vectores/imagen-4-lapaciente-comunicaciones.svg">
        <img src="https://i.ibb.co/Kbq0SbC/imagen1la-paciente-4.png" alt="">
      </div>

      <p class="text text--justify">
        Alcanzar una decisión de tratamiento compartida entre médico-paciente, debe incluir temas sensibles al estilo de vida, los aspectos socio-culturales y a la disponibilidad real de recursos para hacer frente al tratamiento. Si bien se debe enfatizar y apoyar la autonomía del paciente, esto  no implica que los médicos deban ser pasivos y retener su propia recomendación en cuanto al tratamiento óptimo de elección. No se debe perder la objetividad,  aunque tampoco la subjetividad, se debe mantener un equilibrio entre sensibilidad y  la realidad. El objetivo es comprender las emociones por las que la paciente transita, responder  a ellas  con empatía y generar el apoyo para la resolución de los problemas cuando sea apropiado. Los límites de la medicina hacen que los pacientes no siempre puedan ser curados, por lo que la comunicación médico-paciente es un componente central en  el tratamiento de la enfermedad, al proporcionar soporte y  confianza para abordar el proceso.
      </p>

      <p class="text text--justify">
        Las conversaciones sobre el final de la vida deben iniciarse durante el tratamiento de la recurrencia, utilizando un lenguaje apropiado para la situación cambiante y adaptada a las necesidades del paciente. Tener esta discusión crítica más temprano que tarde aumentará la cantidad de tiempo disponible para una planificación activa y eficaz. Sin embargo, las pacientes pueden malinterpretar estas conversaciones como si no queda esperanza, y esta es una de las muchas razones por las que se experimenta resistencia a tenerlas, ya que se consideran particularmente difíciles. Siempre, es necesario  tener la perspectiva  de la paciente, que permita la construcción del consenso sobre los objetivos de su atención.
      </p>
    </div>
HTML;

    $adicionales = "";

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?su-entorno" class="navegar__enlace">
      <span>La Paciente y su Entorno</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;


    $avanzar = <<<HTML
    <a href="?paciente" class="navegar__enlace">
      <span data-src="multimedia/vectores/volver.svg"></span>
      <span>Volver</span>
    </a>
    HTML;
  }