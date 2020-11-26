<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("su-entorno") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">
        La Paciente y su Entorno
      </h2>

      <p class="text text--justify">
        La complejidad del cambio de vida debido a la enfermedad puede resultar agobiante, tanto para la paciente como para su entorno. La enfermedad no debe entenderse como un hecho aislado, sino como una serie de múltiples e interconectadas capas de transiciones psicosociales, por lo que debe comprender cuál es el impacto que este cambio tiene en la forma de relacionarse con su familia en general y con su pareja e hijos en particular. De esta manera usted podrá desarrollar e implementar estrategias para mantener un ambiente saludable y establecer relaciones sólidas que le sirvan de soporte para afrontar sus desafíos.
      </p>

      <!-- Alfabético -->
      <ol class="listas listas--alfabetico listas--secundario-2 listas--bold">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Impacto Sobre la Familia</strong></p>

          <p class="text text--justify">
            La familia constituye la primera línea de apoyo en pacientes con cáncer, sobre todo en nuestro entorno cultural. Los miembros del núcleo familiar se ven directamente afectados por las presiones relacionadas con el cáncer y, a menudo, están solos para comprender la enfermedad, el tratamiento y sus efectos colaterales. Igualmente, desconocen cómo ayudar en el manejo de la paciente, cómo interpretar correctamente sus síntomas y cómo mantener el equilibrio en el hogar. La enfermedad causa una disrupción en la familia creando miedo; incertidumbre; alteración en los planes de vida; horarios y rutinas; y cambios en la forma de comunicación, incluso en las familias altamente funcionales.  La tensión puede producir en el núcleo familiar efectos físicos y psicológicos en sus miembros. Durante este período se hace necesario producir arreglos en la dinámica familiar, que permitan:
          </p>

          <ul class="listas listas--disco listas--secundario-3">
            <li class="text text--justify">
              Entender el proceso dentro del contexto familiar y no sólo en el ámbito del paciente.
            </li>

            <li class="text text--justify">
              Reconocer los puntos débiles o de factores desestabilizadores que cada miembro del núcleo familiar experimenta durante la adaptación a la enfermedad.
            </li>

            <li class="text text--justify">
              Establecer el balance entre la vida en familia y la enfermedad. 
            </li>
          </ul>

          <div class="imagen imagen--mediana" data-src="multimedia/vectores/imagen-3-lapaciente y su entorno.svg"></div>

          <!-- Romanos -->
          <ol class="listas listas--romano listas--bold">
            <!-- i. -->
            <li>
              <p><strong>Impacto sobre la Pareja</strong></p>
              
              <p class="text text--justify">
                Si está casada o vive en pareja, el cónyuge o la pareja será su cuidador primario, aun cuando ellos reciben poca o ninguna preparación y son consumidos con la responsabilidad de asistirla con sus actividades de la vida diaria, administración de medicamentos, cuidados físicos, soporte emocional, transporte y manejo del hogar.  Generalmente, dentro de esta nueva realidad las parejas no saben cómo responder de manera adecuada a las necesidades y requerimientos de las pacientes.
              </p>

              <p class="text text--justify">
                La relación paciente-pareja se convierte en una relación de interdependencia, ya que ambos lidian con las demandas del cáncer. Comparten la misma casa, los mismos recursos y confían uno en el otro para el soporte emocional y logístico en el hogar.  Los patrones de la relación que existían pueden intensificarse después del diagnóstico de cáncer mama. La pareja teme por la salud de la paciente, y se inquieta por lo que sucederá en el futuro. Además, le preocupa que la paciente no pueda realizar las tareas habituales en el hogar, trabajar, cuidar de los hijos, en general mantener la cotidianidad, por lo que frecuentemente asume sus responsabilidades.
              </p>

              <p class="text text--justify">
                La pareja tiene un número de necesidades que deben ser enfocadas por ella, para mantener su propio bienestar emocional, evitando la sobrecarga del cuidador; y poder proporcionar el cuidado efectivo a la paciente. Es por ello, que deben establecerse nuevas formas de estar juntos, ya que las demandas relacionadas con el tratamiento distraen por completo a la convivencia, esto debe enfocarse como parte de un marco de competencias que reduzcan las tensiones maritales, las dificultades en la comunicación, e impidan la desestabilización de la relación.
              </p>

              <p class="text text--justify">
                Generalmente, las parejas tratan de afrontar la enfermedad a través de la búsqueda activa de información y frecuentemente inician las búsquedas por diferentes vías sobre todo el internet y las redes sociales. La información le permite sentirse en control, y sentirse mucho mejor preparadas para afrontar lo que la paciente pueda experimentar. Es necesario, obtener información adecuada con respecto al diagnóstico, tratamiento, seguimiento del cáncer de mama, 4el final de la vida, así como los posibles efectos secundarios que se experimentarán. Numerosas estrategias pueden ser respaldadas para la búsqueda de información y la más recomendable es asistir a las consultas con usted, llevando una lista de preguntas. Si tienen alguna duda, deben preguntarle directamente al médico. De igual manera el profesional de salud es el actor más adecuado para guiarlos durante el proceso de la enfermedad.
              </p>
            </li>

            <!-- ii. -->
            <li>
              <p><strong>Impacto sobre los Hijos</strong></p>

              <p class="text text--justify">
                En los casos de familias con hijos, generalmente los padres están emocionalmente exhaustos para apoyar a sus hijos de la manera que quisieran. La principal preocupación de la paciente es responder a las necesidades emocionales de los hijos. A esto se suma, la falta de habilidades para compartir información sobre su enfermedad con sus hijos. A los niños hablarles honestamente los ayuda a sentirse seguros, ya que a la final ellos se dan cuenta de sus cambios físicos y de la disminución del nivel de energía, así como de sus visitas al hospital. Se les debe explicar cómo el plan de tratamiento afectará su vida diaria. Deles confianza de expresar y compartir sus sentimientos.
              </p>

              <p class="text text--justify">
                El diseño de estrategias para mitigar el efecto en los hijos debe estar planificado de acuerdo a la edad del niño:
              </p>

              <ul class="listas listas--disco">
                <li>
                  <p class="text text--justify">
                    <strong>Lactantes e Infantes:</strong> Los niños a esta edad no tienen la capacidad de entender la idea de cáncer. Son frecuentemente afectados por los cambios de las rutinas de los padres para cubrir el tratamiento y pueden reaccionar a este cambio siendo más difícil o rebeldes a la hora de comer o dormir. Organícese con la persona que los cuida con el fin de mantener la consistencia en los horarios de las siestas, comidas, baños y de dormir para minimizar la inestabilidad en el niño.
                  </p>
                </li>

                <li class="text text--justify">
                  <strong>Preescolares:</strong> Se benefician de escuchar una explicación directa y simple para definir la enfermedad, el lugar del cuerpo en que se encuentra y cómo la tratarán. Debe dejar claro que nada de lo que ellos hicieron causó la enfermedad; si esto no ocurre ellos son capaces de hacer su propia explicación sobre la causa que la produjo. Explicarle al niño el nombre de la enfermedad, el tratamiento y los cambios esperados en la rutina de la familia, ayudará a su adaptación. Puede expresarle que los medicamentos contra el cáncer son muy potentes y que los efectos secundarios prueban que están trabajando en su cuerpo. Dígale que es posible que se sienta triste, irritada o cansada, pero que no es culpa de ellos que se sienta así. Siempre hágale saber que cuándo tiene que salir de casa para ir al hospital o al consultorio del médico no lo abandona.
                </li>

                <li class="text text--justify">
                  <strong>Escolares:</strong> Algunos niños a esta edad podrán haber escuchado sobre la enfermedad, pero tienen una creencia errónea respecto a la causa o el curso, muchos pueden creer que es una enfermedad contagiosa. Manifestaciones somáticas tales como dolor de cabeza o dolor de estómago son expresiones frecuentes de estrés en niños de esta edad. Mantener la normalidad de la rutina lo más posible ayudará al niño a sentirse seguro. Los familiares deben involucrarlos en actividades, como paseos, por lo que trate de conservar en lo posible sus rutinas habituales. Hágale saber que es posible que a veces no pueda llevarlos a la escuela o a sus actividades especiales, jugar con ellos o prepararles la comida, ni tampoco pueda abrazarlos por un tiempo, por lo que posiblemente familiares y otras personas de confianza podrían ayudarle hasta que se recupere. Mantenga los límites de costumbre, ya que en ocasiones los padres pueden sentirse tentados a consentirlos y sobreprotegerlos, no obstante, si mantiene la estructura, esto provocará que los niños sientan más confianza que si les conceden privilegios o se le dan gustos especiales.
                </li>

                <li class="text text--justify">
                  <strong>Adolescentes</strong> La capacidad de abstracción del adolescente puede interferir en la comprensión tanto la situación como el potencial impacto de la enfermedad. Debe dársele información verdadera sobre la enfermedad y tratamiento, para que no tenga que recurrir a la búsqueda por internet o redes sociales o a comentarios de amigos en la escuela, ya que generalmente conllevan a la desinformación. Invítelos a que hagan preguntas. Informe de lo que sucede a los maestros, consejeros escolares, entrenadores y a otras personas de confianza, ya que estos adultos pueden ayudarle y ser un recurso de apoyo adicional.
                </li>
              </ul>

              <p class="text text--justify">
                Los padres frecuentemente imponen responsabilidades en los adolescentes sobre todo si son niñas, en respuesta a lo sobresaturado que ellos se encuentran por la enfermedad, por ejemplo, cuidar a sus hermanos menores, cocinar, limpiar, pero esto no debe llevar a que asuman responsabilidades a las que no están bien preparados. Ellos tratarán de cubrir ese vacío, por lo que debe hacerles saber que usted no necesita que se conviertan en los encargados de las labores domésticas. Hágales saber que deben continuar ocupándose de sus tareas escolares, de sus otras actividades y de compartir momentos con sus amigos, para mantener esa sensación de normalidad. El adolescente siente miedo de ser abandonado y expresa su tensión con cambios en su comportamiento, ellos necesitan expresar como el proceso incide en su bienestar personal, por lo que en estos casos resulta útil que un familiar, amigo cercano de la familia, o incluso un consejero profesional hable con ellos.
              </p>
            </li>
          </ol>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Sistema de Apoyo</strong></p>

          <p class="text text--justify">
            La paciente una vez diagnosticada debe encontrar información confiable y buscar apoyo. El soporte en las pacientes con cáncer está asociado con la esperanza, emocionalmente el apoyo aumenta su moral, les ayuda a mantenerse positivas, aunque realistas, a ser fuertes y a expresar las emociones, preocupaciones y miedos que sienten durante su proceso. Es importante buscar un confidente, una persona a quien acudir, alguien con quien pueda hablar de sus preocupaciones y miedos más profundos, como también de sus expectativas e ilusiones. Es posible que esa persona sea su cónyuge, su pareja, un pariente o un amigo. Si no puede hacerlo, piense en salir del círculo habitual de familiares y amigos para buscar a alguien con quien pueda hablar, para sobrellevar la situación, manteniendo su propio espacio. Esta persona puede ser: un médico o enfermero, un trabajador social, otra paciente con diagnóstico o superviviente de cáncer de mama, un líder espiritual o miembro de su iglesia, un psicólogo u otro profesional de la salud mental. El bienestar espiritual de los pacientes con cáncer tiene un efecto positivo en su estado de ánimo, y como resultado incorporan la espiritualidad y la fé como una forma para compartir sus pensamientos y elaborar un sentido de esperanza.
          </p>
        </li>
      </ol>

      <h3 class="text text--right frontal frontal--secundario-3">
        La paciente, aspiraciones y retos
      </h3>

      <!-- Alfabético -->
      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">La Paciente y su Actividad Laboral</strong></p>

          <p class="text text--justify">
            Las pacientes durante su proceso aprenden a vivir el momento, lo que les permite crecer personalmente y a su vez reducir su carga emocional. Mantener el empleo aporta beneficios psicológicos, económicos y sociales para las pacientes con cáncer. Durante el tratamiento el trabajo, mejora su bienestar, le permite la reconexión a la vida normal, y le proporciona una distracción de la enfermedad, al mantenerse ocupada en cuerpo y mente. Aunque la decisión de continuar trabajando durante el tratamiento es muy personal y depende de una serie de factores, entre ellos: su situación financiera; la capacidad real de poder o no cubrir sus gastos médicos (para muchas pacientes asumir el costo de su tratamiento resulta devastador para su presupuesto familiar); la manera como sobrelleva los tratamientos; la aparición de efectos secundarios; y su propia elección de privacidad. En líneas generales, volver al trabajo se asocia con el regreso a las actividades normales, a la recuperación social y a la rehabilitación después del tratamiento del cáncer.
          </p>

          <p class="text text--justify">
            Algunas pacientes optan por trabajar cuando están siendo tratadas por cáncer de mama. Durante el tratamiento sistémico su capacidad para mantener una rutina laboral normal dependerá de la tolerancia a los efectos colaterales, aunque puede producirse una interrupción mínima, generalmente de una a dos semanas, ya que durante ese tiempo presenta náuseas, fatiga y es propensa a infecciones. Debe tener presente que el tiempo de recuperación tras una mastectomía puede ser de varias semanas (dos o tres), pero esto depende de una serie de factores, que incluyen el tipo de mastectomía que haya tenido y si le han hecho una reconstrucción al mismo tiempo, aunado de cómo ha sido la evolución durante su postoperatorio. Durante la Radioterapia no debería tener problemas para trabajar, la mayoría de las personas solo experimentan fatiga leve. Su cronograma de tratamiento generalmente es de cinco días por semana durante cinco a siete semanas, las sesiones suelen ser cortas. Debe tener presente que, para lograr la eficacia de la radioterapia, una vez comenzado el tratamiento es clave mantener el cronograma de manera continua. 
          </p>

          <p class="text text--justify">
            En el caso de las pacientes diagnosticadas con enfermedad metastásica, el ritmo de los tratamientos suele ser más flexible. Pregúntele a su médico qué flexibilidad tiene el cronograma y organícese en función de ello. Si se mantiene en su actividad laboral, debe informar al respecto a su equipo de salud, ellos le programarán los tratamientos en función de sus horarios de trabajo; y sobretodo le aportan la información necesaria sobre los efectos secundarios que podrían aparecer y cómo hacerles frente, ya que algunos como la náusea, la fatiga y falta de concentración pueden afectar su desempeño laboral.
          </p>

          <p class="text text--justify">
            Es importante en su trabajo decidir a quién informar. Puede compartir su condición médica con todos sus compañeros, o puede limitar la información a su jefe inmediato, o a los compañeros con quien comparte labores y responsabilidades. Haga lo que considere correcto y la haga sentir cómoda, sobre todo si experimenta cambios en su aspecto físico.  Trate de mantenerlos informados sobre su salud y solicite apoyo al momento de realizar algunas actividades, así como requerir alguna flexibilización en el horario cuando no se sienta bien o necesite acudir alguna cita médica. En el caso de las pacientes con enfermedad recurrente, pueden verse “normales” para su empleador y compañeros de trabajo, por lo que debe informárseles que está en tratamiento y que puede experimentar efectos colaterales tales como, neuropatía periférica y fatiga, que no son visibles pero duraderos.
          </p>

          <p class="text text--justify">
            Su reintegración a la vida laboral es un aspecto importante del funcionamiento social, según Clasificación Internacional del Funcionamiento, de la Discapacidad y de la Salud (CIF) de la Organización Mundial de la Salud (OMS). En otras ocasiones, las pacientes optan por tomarse tiempo de descanso o reposo del trabajo, que puede ser parcial o permanente. La discapacidad a corto plazo y a largo plazo suministra un porcentaje de los ingresos en caso que su condición le impida trabajar. El empleador puede conceder la discapacidad a corto plazo o reposo temporal por un período determinado, en general entre 3 y 6 meses. Cuando finaliza el período de discapacidad a corto plazo (que generalmente cubre el período de tratamiento), se puede solicitar la discapacidad a largo plazo o la baja del empleo, cuando se considera la falta laboral por un período prolongado o indefinido.
          </p>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">La Paciente y su Sexualidad</strong></p>

          <p class="text text--justify">
            La intimidad constituye una parte importante de la calidad de vida. Es interrumpida y alterada con el diagnóstico de cáncer y el tratamiento. Los cambios son definidos como alteraciones que la mujer experimenta en una o más fases de su respuesta sexual que le producen incomodidad o dificultad para relacionarse íntimamente. Las alteraciones más frecuentes son la disminución de la líbido y el interés sexual (trastorno del deseo/excitación); y el dolor con la penetración, lo que se conoce con el nombre de dispareunia. Algunos factores pueden contribuir a la aparición de estas alteraciones, tal como el efecto del tratamiento en la función ovárica, los cambios en la imagen corporal, el cansancio, las náuseas, el dolor, así como síntomas psicológicos subyacentes como la depresión y ansiedad. El grado, frecuencia y calidad de la actividad sexual antes del diagnóstico es un factor adicional que debe ser tomado en cuenta en el contexto de las dificultades con la sexualidad en pacientes con cáncer.
          </p>

          <p class="text text--justify">
            El tratamiento de cáncer de mama produce cambios, que para la paciente son motivos de vergüenza, al igual de perjudiciales en su autoestima y en su sentido de identidad, por lo que la vulnerabilidad y el miedo son emociones frecuentes que las pacientes deben afrontar.
          </p>

          <p class="text text--justify">
            Los efectos de los diferentes tipos de tratamiento pueden variar, pero cada uno de ellos afecta directamente el funcionamiento sexual de la paciente. Para las pacientes sometidas a mastectomía no sólo se afronta con la pérdida de un órgano sexual sino la pérdida de sensibilidad en la zona y una imagen corporal alterada hasta en el contexto de la reconstrucción mamaria. En estos casos, la lencería o ropa interior adecuada puede ser el primer paso para minimizar el impacto inicial, y contribuir a la recuperación progresiva de un patrón de actividad sexual distendida, aunque tarde o temprano tendrá que asimilar los cambios físicos que ha experimentado y forzarse en recuperar una imagen positiva de sí misma. En líneas generales, muchas mujeres se dejan la ropa puesta cuando van a la cama, por lo que en el caso de las pacientes mastectomizadas, una mama reconstruida o una prótesis externa, le proporciona a su pareja una sensación muy parecida de consistencia y tacto de una mama natural. Tenga presente que casi siempre las relaciones sexuales se producen en habitaciones con la luz apagada.
          </p>

          <p class="text text--justify">
            Con la Quimioterapia, los síntomas tales como la fatiga, vómitos, náuseas en la fase aguda del tratamiento afectan el deseo sexual, la capacidad de excitarse y le dificulta la posibilidad de alcanzar el orgasmo. De igual manera, algunos tratamientos de quimioterapia pueden provocar la caída del cabello contribuyendo a la distorsión de la imagen corporal, lo que disminuye los sentimientos de interacción sexual. Los cambios hormonales debido a la menopausia prematura, por efecto de la quimioterapia u hormonoterapia, provocan atrofia y sequedad vaginal que interfieren en la respuesta sexual y causan dolor durante las relaciones (dispareunia). El dolor durante las relaciones sexuales puede destruir el interés en el sexo, además de la pérdida de la libido. Resulta lógico que sienta que ha perdido el deseo, si además emplea medicamentos que afectan negativamente la sexualidad tales como: los antieméticos, narcóticos, los antidepresivos, los ansiolíticos y los medicamentos que inducen el sueño.
          </p>

          <p class="text text--justify">
            La sexualidad posterior al diagnóstico y tratamiento del cáncer de mama puede llevar a un número de miedos y preocupaciones dentro de la pareja, por lo que se debe mantener una comunicación abierta.  Mientras se está lidiando con el proceso de la enfermedad, intente concentrarte en el placer que produce el contacto físico y el compartir, tal como quedarse dormido en los brazos del otro, besarse, mirarse a los ojos, decirse palabras y halagos que se desean oír. Durante un tiempo puede intentar restarle importancia al orgasmo, en el momento que menos piensa puede ocurrir nuevamente.  El sexo y la intimidad son eventos que deben ir recuperándose paso a paso, por lo que necesita darse tiempo.
          </p>

          <p class="text text--justify">
            Si siente que no puede hacer frente a la situación, solicite ayuda, por lo que contemple la posibilidad de acudir a un terapeuta o a un grupo de apoyo. Considere comenzar aportando información a su médico tratante, lo que no sólo le permite abordar el tema, sino que también le proporciona el tácito permiso de discutirlo, en cualquier momento en el que usted considere apropiado. La discusión abierta de estas cuestiones con la pareja y con el equipo de salud puede ser beneficiosa aunque hablar de sexualidad en nuestro medio es frecuentemente incómodo, por lo que debe darle el valor adecuado a plantearse el tema. Para la paciente el discutir esta circunstancia es un punto importante en su bienestar emocional.
          </p>
        </li>
      </ol>
    </div>
HTML;

    $adicionales = "";

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?actitudes" class="navegar__enlace">
      <span>Actitudes</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;


    $avanzar = <<<HTML
    <a href="?herramientas-comunicacion" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Herramientas de comunicación</span>
    </a>
    HTML;
  }