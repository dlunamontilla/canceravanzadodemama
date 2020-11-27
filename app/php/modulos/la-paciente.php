<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("paciente") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">
        Emociones de la Paciente a través del Proceso de su Enfermedad
      </h2>

      <p class="text text--justify">
        El cáncer de mama puede ser desafiante tanto emocionalmente como físicamente, por el hecho de conllevar a un cambio. El diagnóstico de cáncer, los hallazgos de las biopsias y de los exámenes radiológicos, la preocupación por resultados del tratamiento, la ansiedad por seguimiento de la superviviente, así como la desesperanza, tristeza y enojo por la aparición de recidiva o progresión hasta el cuidado al final de la vida conlleva a retos emocionales a todo lo largo de la enfermedad.  El bienestar emocional es un indicador clave de calidad de vida en las pacientes con cáncer de mama avanzado.
      </p>

      <div class="imagen imagen--verde" data-src="multimedia/vectores/imagen-1-lapaciente-emociones.svg"></div>

      <p class="text text--justify">
        La paciente puede experimentar no sólo con emociones negativas y sino también con emociones positivas que pueden ser expresadas como esperanza, paz, y aprecio por la vida cuando tiene claridad de los objetivos del tratamiento, cuando mantienen un papel activo en su terapéutica, y cuando es capaz de afrontar los efectos colaterales. Es posible que se dé cuenta de que tiene la fuerza que nunca pensó que tenía. Sin embargo, tenga en consideración  que su reacción ante su proceso es única. Mantener el equilibrio, en  el caso de pacientes con cáncer de mama metastásico que afrontan la experiencia de la enfermedad recurrente, es fundamental.  Se deben encontrar  recursos internos y externos para enfrentar los desafíos de la situación,  para recuperar el control, aprovechar sus miedos, luchar por mantener la normalidad y crear la estabilidad y continuidad en su vida.
      </p>

      <p class="text text--justify">
        Las necesidades de la paciente, así como sus  experiencias con la enfermedad son diversas y muy personales. Permítase expresar sus sentimientos libremente porque estar emocionalmente saludable le ayudará a enfrentar mejor su tratamiento. Comunicar sus inquietudes a su equipo de atención médica, sus familiares y amigos sobre los síntomas emocionales, es importante. Su médico puede ayudarle a tener la mejor calidad de vida posible durante este tiempo y sugerir recursos o herramientas para usted y su familia. Por lo tanto, resulta importante que pueda reconocer y definir sus emociones, entre estas  tenemos:
      </p>

      <!-- Alfabético -->
      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Ira:</strong></p>

          <p class="text text--justify">
            Puede ocurrir antes (al recibir el diagnóstico), durante (al producirse cambios en su rutina) y a veces mucho después de su tratamiento contra el cáncer. Dese permiso para poseer y expresar su enojo sin sentirte culpable. La ira es una respuesta emocional natural. Encuentre formas seguras de reconocerla y liberarla, no la retenga. No enfoque su ira en otras personas. Golpee una almohada, grite en privado o realice una actividad física que la libere. Comparta sus sentimientos con otros: un familiar, con un amigo o un consejero.
          </p>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Ansiedad:</strong></p>
          <p class="text text--justify">
            A menudo se describe como sentirse nerviosa, preocupada, sobrecargada y / o tensa. Es una emoción normal, que se produce por breves período de tiempo y se manifiesta con síntomas  tales como latidos cardíacos más rápidos, dolor abdominal, náuseas, diarrea, acidez estomacal o cambios en el apetito, dificultad para concentrarse, opresión en el área del pecho, sensación de asfixia, temblores o mareos; los cuales alertan al organismo que responda ante una amenaza. Por lo que, si se mantiene por mucho tiempo puede transformarse en un trastorno que puede interferir con su vida diaria y la manera en que interactúa con los demás. Muchas pacientes experimentan con síntomas de ansiedad, causados por la aprensión al tratamiento, sus efectos colaterales y a una recidiva; además de por la incertidumbre o sensación pérdida de control de su futuro, la dependencia en otro (sentirse como un carga) y el resquemor a la muerte.  Estar ansioso puede dificultar el tratamiento, la toma  de  decisiones y puede evitar que su cuerpo se recupere a éste adecuadamente. En consecuencia, identificar y manejar la ansiedad son aspectos importantes de su tratamiento. Trate de hablar abiertamente de la ansiedad con su equipo de atención médica. Explore técnicas de relajación, como yoga o masajes. Considere consultar a un especialista en salud mental.
          </p>
        </li>

        <!-- c. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Depresión:</strong></p>
          <p class="text text--justify">
            Es más compleja que simplemente sentirse triste, desesperanzado o irritable, lo que hace más difícil sobrellevar el tratamiento del cáncer, así como dificulta  la toma de decisiones sobre su atención. En consecuencia, la identificación y el tratamiento de la depresión son aspectos importantes. Es más probable que ocurra cuando no obtiene alivio de los efectos secundarios y también puede ser un efecto colateral de algunos tratamientos. Es crucial hablar con su equipo de atención médica sobre el llanto excesivo, sensación de desesperación y aislamiento, pérdida de interés en las actividades cotidianas o disminución del deseo sexual, especialmente si tales sentimientos duran más de un par de días o incluso semanas. Obtenga atención médica inmediata si tiene pensamientos de que no vale la pena vivir o pensamientos de lastimarse a sí misma. Las personas con depresión generalmente se benefician de un tratamiento especializado. Solicite ayuda.
          </p>
        </li>

        <!-- d. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Sobrecarga emocional:</strong></p>
          <p class="text text--justify">Es una sensación de estar fuera de control, en cada aspecto de su vida: trabajo, vida familia y no contar con el presupuesto para cubrir la totalidad del tratamiento. Aprender nuevos términos médicos, planificar y acudir a múltiples citas médicas y someterse a un tratamiento puede ser abrumador. Pídale a su médico que le explique su diagnóstico y el plan de tratamiento para ayudarlo a sentirse más cómodo con lo que le espera. Esté consciente de sus limitaciones, priorice sus actividades, concéntrese en las cosas que pueda hacer: una opción es fraccionarlas y hacerlas cuando pueda, si no las puede cubrir o cumplir, pida ayuda. Existen estrategias para manejar el estrés como realizar alguna actividad física moderada, tal es el caso de caminar o alguna actividad al aire libre. Involúcrese en actividades sociales, en líneas generales realice una tarea o pasatiempo que disfrute. Mantenga un estilo de vida sano.  Únase a grupos de soporte, o tal vez hable con un familiar, amigo o consejero  con quien pueda compartir sus experiencias. Explore técnicas de relajación, como yoga o masajes.</p>
        </li>

        <!-- e. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Miedo:</strong></p>
          <p class="text text--justify">
            Es una reacción común al descubrir que tiene cáncer y tiene que someterse a un tratamiento y a sus efectos secundarios. Puede temer al dolor durante o después del tratamiento; al no poder realizar sus actividades diarias; a un cambio en la apariencia física (pérdida de cabello o cicatrices); a problemas de fertilidad o a desafíos sexuales. Hable con su equipo de atención médica acerca de los efectos secundarios o colaterales del tratamiento, así se sentirá confiada y preparada para enfrentarlos. Comparta sus sentimientos con un especialista en salud mental, un grupo de apoyo o con sus seres queridos.
          </p>
        </li>

        <!-- f. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Duelo:</strong></p>
          <p class="text text--justify">
            Es la sensación de angustia o dolor debido a la pérdida de algo y culmina con la aceptación de los hechos. Es normal sentir la pérdida de su salud, su apariencia o sus expectativas del futuro sin cáncer. A medida que el tiempo pasa puede sentir el duelo en cualquier momento de su enfermedad, sin que esto signifique que  durará por siempre. Es difícil, pero lo más importante es que debe darse permiso para expresarlo, reconocer que es algo natural,  momentáneo y manejable, no lo eluda  o trate de disimularlo. Compártalo con algún amigo, familiar o consejero. Si siente que se intensifica, le causa temor o se mantiene de manera constante en un estado de evasión, considere contactar a su profesional de salud. Comprométase con una actividad que signifique algo para usted, tome el control de los sentimientos y no los evada.
          </p>
        </li>

        <!-- g. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Culpa:</strong></p>
          <p class="text text--justify">
            Es la sensación de que has hecho algo mal o de arrepentimiento. Puede sentir culpa por no haber notado los síntomas a tiempo; por no haber acudido a sus controles anuales; por no tener hábitos de vida saludables; por sentir que es una carga para sus seres queridos; y por contribuir al detrimento del presupuesto familiar al tener que afrontar los costos  de su  tratamiento. Usted puede sentirse culpable durante el proceso por no tener una actitud positiva todo el tiempo. Sea amable consigo misma, tener cáncer no fue su culpa. Los sentimientos de culpa pueden llevar a depresión. Compártalos, hable con otros sobrevivientes o un terapeuta.
          </p>
        </li>

        <!-- h. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Soledad:</strong></p>
          <p class="text text--justify">
            Es la sensación de estar sola y aislada. Puede sentir que su diagnóstico le impide vivir la vida que una vez tuvo. Si los amigos evitan visitar o llamar, puede asumir que nadie entiende por lo que está pasando. En pacientes con enfermedad metastásica a menudo su funcionamiento social puede deteriorarse, en conjunto con su confianza, ya que volver a experimentar cambios en su apariencia como la pérdida del cabello, las hacen sentir  que han perdido el control, por lo que tienden a aislarse. Las pacientes tienden a  modificar su comportamiento al quedarse en casa para así limitar las oportunidades de socializar con sus familiares, amigos o en el lugar de trabajo. Hablar con otras personas que tienen el mismo estadio de cáncer que usted le puede ayudar.
          </p>
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
    <a href="?actitudes" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>La Paciente: Actitudes</span>
    </a>
HTML;
  }