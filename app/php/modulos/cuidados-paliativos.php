<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("cuidados-paliativos") ) {
    $contenido = <<<HTML
    <div class="content__item">
       <h2 class="text text--right">Cuidados Paliativos</h2>

       <p class="text text--justify">
        Los cuidados paliativos o la atención médica de apoyo, consisten en el manejo de los efectos físicos secundarios, los efectos emocionales, sociales y económicos que provoca el cáncer y su tratamiento.
       </p>

       <p class="text text--justify">
        Los cuidados paliativos no son lo mismo que la atención para enfermos terminales. Los cuidados paliativos abarcan un amplio abanico de actividades que responden a los problemas de la paciente y sus cuidadores, en todos los niveles de atención que van desde soporte y tratamiento activo del dolor, hasta un plan de atención para los efectos colaterales como la fatiga, pérdida del apetito, náuseas, vómitos, e insomnio. La atención paliativa proporciona también recursos para afrontar inquietudes emocionales y prácticas espirituales, para ayudar a la paciente a vivir activamente como sea posible hasta el final de sus días. Por lo tanto, los cuidados paliativos están centrados en la persona no en la enfermedad y se incluyen junto con los tratamientos destinados a tratar el cáncer, independientemente de la edad, del tipo y estadio.
       </p>

       <p class="text text--justify">
        En general, funcionan mejor cuando se inician poco después del diagnóstico de cáncer y pueden continuar recibiéndolos a lo largo de su tratamiento y de su seguimiento. Pueden ser administrados por su equipo de atención médica, pero además se pueden incluir: un trabajador social que le apoya para afrontar sus tareas cotidianas; un psicólogo que le ayuda con las necesidades emocionales o de salud mental y con sus problemas familiares; y un consejero espiritual (pastor, capellán u otra guía espiritual), que constituyen una guía y soporte emocional. Igualmente, dentro de este equipo se incluye el nutricionista y el fisioterapeuta.
       </p>

       <h3 class="text text--right">
        Tratamiento del Dolor
       </h3>

       <!-- Alfabéticos -->
       <ol class="listas listas--alfabetico listas--secundario-2 listas--bold">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Definición</strong></p>
        
          <p class="text text--justify">
            La Asociación Internacional para el Estudio del Dolor define dolor como "una experiencia sensorial y emocional desagradable asociada a una lesión tisular real o potencial o descrito en términos de dicho daño.” Si usted tiene cáncer es usual que le preocupe sentir dolor. El dolor puede afectar muchos aspectos de su vida, puede alterar de alguna manera la forma en que usted realiza sus actividades diarias, su calidad de sueño, sus hábitos alimenticios, sus relaciones con sus amigos y familiares y en general su calidad de vida.
          </p>

          <p class="text text--justify">
            Nunca debe aceptar el dolor como algo normal de su enfermedad. Debe saber que el tratamiento del dolor es parte de la terapéutica de pacientes con cáncer y éste a su vez, puede ser manejado de manera satisfactoria en la mayoría de las personas. El manejo del dolor es mucho más efectivo si empieza lo más antes posible y debería mantenerse a lo largo de cada una de las etapas del tratamiento y continuar durante el seguimiento. Puede que no siempre sea posible aliviar completamente el dolor causado por el cáncer, pero su equipo médico puede colaborar con usted para desarrollar un plan personalizado que permita controlarlo y reducirlo lo más posible.
          </p>

          <p class="text text--justify">
            Saber cómo informar y describir el dolor puede ayudar a su equipo de atención médica a encontrar la combinación perfecta y el tipo correcto de tratamiento para afrontarlo de manera aceptable y de esta manera permitir que su diagnóstico y tratamiento sean más fácilmente tolerables y efectivos. De igual manera, el manejo adecuado del dolor le ayudará a compartir más tiempo y realizar actividades sociales y cotidianas con sus familiares y amigos, contribuyendo de esta manera a una mejor calidad de vida. Tratar el dolor de manera eficaz puede contribuir a prevenir la exacerbación de síntomas colaterales o la aparición de otros.
          </p>
        </li>

        <!-- b. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Enfoque del dolor en pacientes con cáncer</strong></p>

          <p class="text text--justify">
            El dolor puede afectarle no sólo física sino mental y emocionalmente. Sin embargo, la capacidad de la paciente de hacerle frente dependerá de la efectividad del tratamiento médico, del apoyo social y familiar, y de su capacidad de confrontación. Prevenir su instalación, así como su agravamiento es una de las formas más efectivas para manejarlo. Por lo que debe asumir el control al informar a su equipo tratante, familiares, cuidadores y amigos respecto a lo que está experimentando. De igual forma, debe solicitarle al equipo médico el asesoramiento para realizar un enfoque terapéutico objetivo.
          </p>

          <div class="imagen imagen--verde imagen--mediana"><img src="multimedia/img/conozca-su-enfermedad/graficos fuveicam-02.png" alt=""></div>
        </li>

        <!-- c. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Causas del dolor en pacientes con cáncer de mama</strong></p>

          <p class="text text--justify">
            El plan adecuado de manejo del dolor de las pacientes debe contemplar su causa. El dolor puede ser producido por:
          </p>

          <!-- Listas | Romanos -->
          <ol class="listas listas--romano listas--bold">
            <!-- i. -->
            <li>
              <p><strong>El tumor o a su diseminación a distancia.</strong></p>

              <p class="text text--justify">
                El dolor es un síntoma poco común de presentación en las pacientes con cáncer de mama, pero puede ser el síntoma de presentación del carcinoma inflamatorio de mama. En este caso la instalación de la sintomatología es rápida y se acompaña de calor, enrojecimiento y la presencia de hoyuelos en la piel que cubre la mama que da una característica de “piel de naranja”.
              </p>

              <p class="text text--justify">
                La diseminación a distancia o metástasis del cáncer de mama puede producir dolor. Dependiendo de la localización de las metástasis puede experimentar dolor en espalda, cadera u otros huesos por metástasis óseas; dolor de cabeza por metástasis cerebral; dolor en columna y debilidad en los miembros por metástasis de los cuerpos vertebrales que provocan compresión medular; y dolor abdominal en la parte superior derecha por metástasis hepática.
              </p>
            </li>

            <!-- ii. -->
            <li>
              <p><strong>Efecto del tratamiento:</strong></p>

              <ul class="listas listas--disco listas--secundario-3">
                <!-- Quimioterapia -->
                <li>
                  <p><strong>Quimioterapia:</strong></p>

                  <ul class="listas listas--circulo">
                    <li class="text text--justify">
                      Síndrome de pies y manos también denominado eritrodisestesiapalmoplantar El síndrome de pies y manos es una reacción cutánea causada por ciertos medicamentos: Capecitabina, 5-Fluorouracilo, Doxorrubicina y el Lapatinib, que se produce cuando una pequeña cantidad de medicamento se filtra desde los capilares de las palmas de las manos y las plantas de los pies, dañándolos tejidos circundantes. Se caracteriza por adormecimiento, molestia o hipersensibilidad en manos y pies, acompañado de sensación de hormigueo, ardor o comezón, enrojecimiento e inflamación. Si presenta este síndrome intente mantener sus manos y pies hidratados, mantener cubiertos sus pies, así como evitar la exposición de sus manos a productos químicos irritantes como los detergentes. Puede colocar hielo local en zona afectada para aliviar la sensación de ardor.
                    </li>

                    <li class="text text--justify">Dolor en boca y garganta, debido a úlceras en la boca (mucositis).</li>
                    <li class="text text--justify">Dolor Muscular, lo que se denomina mialgias.</li>
                    <li class="text text--justify">
                      Neuropatía: Dolor o molestia ocasionada por el daño a los nervios del sistema nervioso periférico. Puede comenzar en cualquier momento después de iniciado el tratamiento y puede empeorar a medida que el tratamiento avanza. Generalmente, comienza en los dedos del pie, pero puede expandirse e incluir piernas, brazos y manos. Si sospecha que tiene neuropatía, consulte con su médico de inmediato. Debe identificarla cuando se presente, y se caracteriza por: dolor repentino y punzante, hormigueo, ardor, debilidad, cosquilleo o adormecimiento en brazos, manos (pérdida del sentido del tacto), piernas y pies. Además, puede experimentar dificultad para usar las manos, levantar objetos o abrocharse prendas; así como la falta de equilibrio. Si presenta estos síntomas evite la manipulación de cualquier tipo de objeto y preste la debida atención al moverse.
                    </li>
                    <li class="text text--justify">Alteración en la sensibilidad de la piel: Puede producirse aumento de sensibilidad o hipersensibilidad, pero también reducción de la sensibilidad (hiposensibilidad) o adormecimiento.</li>
                  </ul>
                </li>

                <!-- Hormonoterapia -->
                <li>
                  <p><strong>Hormonoterapia:</strong></p>

                  <ul class="listas listas--circulo">
                    <li>Dolor óseo y articular.</li>
                    <li>Dolor muscular.</li>
                    <li class="text text--justify">
                      Flebitis: Inflamación de la vena causada por la presencia de un coágulo. Se caracteriza por calor, rubor y dolor alrededor de una vena.  Debe notificarlo de inmediato a su médico, en especial si está tomando Moduladores Selectivos de los Receptores de Estrógeno como el Tamoxifeno. 
                    </li>
                  </ul>
                </li>

                <!-- Terapia dirigida -->
                <li>
                  <p><strong>Terapia Dirigida:</strong></p>

                  <ul class="listas listas--circulo">
                    <li class="text text--justify">Síndrome de pies y manos también denominado eritrodisestesiapalmoplantar.</li>
                    <li class="text text--justify">Dolor en boca y garganta, debido a úlceras en la boca (mucositis).</li>
                    <li class="text text--justify">Dolor Muscular o mialgias.</li>
                    <li class="text text--justify">Neuropatía.</li>
                    <li class="text text--justify">Flebitis, en especial con Inhibidores de la Angiogénesis.</li>
                  </ul>
                </li>

                <!-- Cirugía -->
                <li>
                  <p><strong>Cirugía:</strong></p>
                  <p class="text text--justify">Cualquier procedimiento quirúrgico produce dolor en el sitio de la incisión (cicatriz quirúrgica). Generalmente resuelve a la semana del procedimiento. Puede experimentar el Síndrome Postmastectomía, como posible efecto colateral. Este Síndrome consiste en dolor persistente en el área del tórax, la axila y el brazo. Los síntomas son opresión, ardor, hormigueo o picazón en estas zonas. O bien, puede experimentar Dolor de Miembro Fantasma, en el que su cerebro mantiene la idea que en el sitio de la mastectomía se conserva presente la mama. Esta sensación es temporal hasta que el cerebro se adapte a la ausencia de la mama.</p>
                </li>

                <!-- Radioterapia -->
                <li>
                  <p><strong>Radioterapia:</strong></p>

                  <ul class="listas listas--circulo">
                    <li class="text text--justify">Dolor torácico, caracterizado por dolor punzante durante y después de la radiación. Es transitorio y se debe a la irritación e inflamación de los nervios de la zona.</li>
                    <li>Dolor muscular.</li>
                    <li>Neuropatía.</li>
                    <li class="text text--justify">
                      Alteración en la sensibilidad de la piel: Puede producirse aumento de la sensibilidad (hipersensibilidad), o la reducción de sensibilidad (hiposensibilidad) con adormecimiento.
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ol>
        </li>

        <!-- d. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Evaluación del Dolor</strong></p>

          <p class="text text--justify">
            No dude en referir el dolor a su médico. Informar sobre su presencia e intensidad le permitirá recibir ayuda y de esta manera logrará que el plan de tratamiento se cumpla y sea tolerable. Además del examen físico por parte del médico tratante, debe establecerse por parte de la paciente una descripción detallada de qué siente, cuándo lo siente, dónde lo siente, cuánto tiempo dura, su intensidad, qué lo aumenta y qué lo alivia.
          </p>

          <p class="text text--justify">
            Por ello es recomendable llevar un registro diario o DIARIO DEL DOLOR, en manuscrito o en computadora. Debe comenzar indicando que tipo de medicamento utiliza, la dosis y la frecuencia al día, así como cualquier cambio en la terapéutica. Debe reportar de igual manera algún otro medicamento que esté tomando.
          </p>

          <p>Registre en cada episodio de dolor:</p>
          <ul class="listas listas--disco listas--secundario-3">
            <li>Cuándo: La fecha y la hora.</li>
            <li class="text text--justify">
              Dónde: Lugar del cuerpo donde se localiza. Permanece allí o se traslada a otra localización.
            </li>
            <li class="text text--justify">Características del Dolor: El tipo (punzante, espasmódico, sordo o agudo).</li>
            <li class="text text--justify">La intensidad en una escala del 0 a 10 (0 significa ausencia de dolor y 10 dolor insoportable), ésta se denomina ESCALA VISUAL ANALÓGICA (EVA). Es un método unidimensional que mide la intensidad del dolor. Consiste en una línea recta de 10 centímetros que tiene en cada extremo señalado la menor (sin dolor) y la mayor intensidad del dolor (máximo dolor). El paciente indica en la línea el punto que identifica la intensidad del dolor y esté será el valor o resultado EVA para la paciente. Se considera Dolor Leve (EVA de 1 a 3), Dolor Moderado (EVA de 4 a 6) y Dolor Severo (EVA de 7 a 10).</li>
            <li class="text text--justify">Duración.</li>
            <li class="text text--justify">Actividades que lo exacerban y que actividades lo alivian (aumentativos y diminutivos).</li>
            <li class="text text--justify">Interferencia Funcional y en su estado de ánimo. Algunos días pueden ser mejores o peores que otros. Es posible que la presencia de dolor le afecte su capacidad de realizar bien su trabajo o ejecutar sus actividades cotidianas, como dormir, comer o hacer las tareas del hogar, lo que la hace propensa a la irritabilidad. Usted podría sentir frustración, tristeza y rabia. Esto no es inusual, por lo que es importante describir completamente todas sus características.</li>
            <li class="text text--justify">Empleo de Analgésico: Indique cuál, a qué dosis y frecuencia y si experimentó algún efecto.</li>
            <li class="text text--justify">Uso de alguna otra estrategia para aliviar el dolor y reporte que efecto tuvo.</li>
            <li class="text text--justify">Aparición de algún otro síntoma.</li>
            <li class="text text--justify">
              Notas: Algunas consideraciones que crea pertinente. En líneas generales informe si el plan está funcionando o no.
            </li>
          </ul>
        </li>

        <!-- e. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Tratamiento Multidimensional del Dolor</strong></p>

          <p class="text text--justify">Luego de la evaluación del dolor, se elabora el plan de tratamiento, que permite controlarlo. Algunos centros cuentan con especialistas en dolor y en cuidados paliativos. Estos especialistas se dedican al tratamiento de los efectos secundarios físicos y psicológicos del cáncer.</p>
          <p class="text text--justify">El dolor relacionado con el cáncer debe tratarse su causa y/o manejarse empleando estrategias diferentes a través de un enfoque multidimensional, con el uso simultáneo de terapias psicológicas y las terapias somáticas, ya que las variables psicológicas tienen un profundo impacto emocional y social en la percepción del dolor y a su vez la terapéutica farmacológica tiene un efecto en el bienestar la paciente.</p>

          <div class="imagen imagen--verde imagen--mediana"><img src="multimedia/img/conozca-su-enfermedad/graficos fuveicam-04.jpg" alt=""></div>

          <!-- Listas | Romano -->
          <ol class="listas listas--romano listas--bold">
            <!-- i. -->
            <li>
              <p><strong>Farmacoterapia o Medicamentos para el Dolor.</strong></p>
              
              <p class="text text--justify">Diferentes medicamentos se encuentran disponibles para aliviar el dolor, y a estos se les conoce como analgésicos, que pueden ser administrados por vía oral, endovenosa o bien como parches transdérmicos. La Organización Mundial de la Salud ha diseñado pautas para el tratamiento analgésico del dolor por cáncer. Estas pautas, son conocidas como la escalera analgésica de la Organización Mundial de la Salud. Este enfoque secuencial discrimina la selección de analgésicos, con eficacia demostrada y seguridad probada, en función de la gravedad del dolor.</p>

              <div class="imagen imagen--verde imagen--mediana"><img src="multimedia/img/conozca-su-enfermedad/graficos fuveicam-01.png" alt=""></div>

              <!-- Listas | Disco -->
              <ul class="listas listas--disco listas--secundario-3">
                <li>
                  <p><strong>Efecto Colaterales/Toxicidad:</strong></p>
                  <p class="text text--justify">Debe informarse sobre los efectos colaterales del tratamiento. Se debe tener información precisa de la manera de prevenirlos y cómo tratarlos para minimizarlos o aliviarlos. De igual forma, si existe algún efecto secundario debe reportarlo inmediatamente. Hable con su médico sobre los efectos secundarios que esté dispuesto a tolerar, así se estructurarán las estrategias adecuadas de control del dolor para su caso.</p>
                </li>

                <li>
                  <p><strong>Efecto Colateral de los Medicamentos No Opioides.</strong></p>

                  <ul class="listas listas--circulo">
                    <li class="text text--justify">Sintomatología Gastrointestinal, incluyendo dispepsia, acidez, así como úlcera gástrica y hemorragia gastrointestinal.</li>
                    <li>Insuficiencia Renal.</li>
                    <li>Disfunción Hepática.</li>
                  </ul>
                </li>

                <li>
                  <p><strong>Efecto Colateral de los Medicamentos Opioides</strong></p>

                  <ul class="listas listas--circulo">
                    <li>Somnolencia, confusión y sedación.</li>
                    <li class="text text--justify">Náuseas, vómitos, estreñimiento, y retención urinaria.</li>
                    <li class="text text--justify">Mioclonus y asterixis, signo temprano de neurotoxicidad que acompaña el curso de delirium inducido por opiáceo.</li>
                    <li>Depresión respiratoria.</li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- ii. -->
            <li>
              <p><strong>Psicoterapia.</strong></p>

              <p class="text text--justify">
                El objetivo del tratamiento es proveerle a la paciente el conocimiento, soporte y las destrezas necesarias para controlar el dolor y a la vez aumentar la confianza del paciente para enfrentarse a la enfermedad. El empleo de la psicoterapia permite proporcionar apoyo emocional, información y asistencia para la adaptación de la paciente a la enfermedad, lo que le aporta un sentido de control sobre el dolor; además de contribuir a la disminución del estrés, la ansiedad y depresión (factores que pueden intensificar el dolor). La psicoterapia puede emplear técnicas cognitivas y técnicas conductuales, entre las que tenemos:
              </p>

              <ul class="listas listas--disco listas--secundario-3">
                  <li>
                    <p>Psicoeducación</p>

                    <ul class="listas listas--circulo">
                      <li class="text text--justify">Información Preparatoria. Proporcionar información destinada en asistir a la paciente que experimentará incremento en la intensidad del dolor.</li>
                    </ul>
                  </li>

                  <li class="text text--justify">Automonitoreo. Descripción cronológica que la paciente mantiene para describir ciertas características asociadas al dolor.</li>

                  <li>
                    <p>Relajación.</p>

                    <ul class="listas listas--circulo">
                      <li class="text text--justify">Ejercicios de respiración: Los ejercicios de respiración puede realizarlos sentada o acostada, relajando los brazos con suavidad a cada lado. Inhale mientras cuenta hasta tres mentalmente y con lentitud. Luego, exhale por la boca, otra vez contando en silencio hasta tres. Hágalo durante cinco minutos y aumente gradualmente hasta llegar a 20 minutos.</li>
                      <li class="text text--justify">Relajación Muscular Progresiva: Esta técnica consiste en contraer y luego relajar los músculos. Puede iniciarse de manera ascendente desde los pies o de manera descendente desde la cabeza.</li>
                    </ul>
                  </li>

                  <li class="text text--justify">Distracción. Actividades que permitan distraerle del dolor, entre las que se pueden emplear: leer, ver películas o series, escuchar música, pintar, ejecutar algún tipo de manualidades y realizar una actividad al aire libre como caminar. Puede emplear también como técnica de distracción visualizaciones mentales de imágenes que le produzcan calma y paz.</li>
                  
                  <li>
                    <p>Técnicas combinadas</p>

                    <ul class="listas listas--circulo">
                      <li class="text text--justify">Desensibilización Sistemática. Ejercicios de relajación y distracción apareados con una jerarquización de estímulos que producen ansiedad presentados a través del imaginario mental en vivo, lo que conlleva al control del miedo.</li>
                      <li class="text text--justify">Meditación. Le permite relajar su mente y concentrarse en sentir paz interior. Puede realizar ejercicios de meditación que consisten en repetir suavemente una palabra que la calme, o bien puede suponer imaginarse en el sitio del dolor una sensación de relajación.</li>
                      <li>Hipnosis.</li>
                      <li class="text text--justify">Bioretroalimentación. Está técnica le enseña a controlar y relajar la respuesta de su organismo a un estímulo. Un terapeuta coloca sensores indoloros sobre la piel con el fin de obtener información sobre las funciones de su cuerpo. Se emplea para ayudarlo a centrarse en efectuar cambios como relajar músculos específicos para reducir el dolor.</li>
                      <li>Musicoterapia.</li>
                    </ul>
                  </li>

                  <li>
                    <p><strong>Terapias Cognitivas:</strong></p>

                    <p class="text text--justify">
                      Restructuración Cognitiva. Redefinición de algunos o de la totalidad de los elementos que son interpretados por la paciente como experiencias nocivas o amenazadoras, lo que produce una reducción del estrés, la ansiedad y la desesperanza.
                    </p>
                  </li>

                  <li>
                    <p><strong>Terapias Conductuales:</strong></p>
                    <ul class="listas listas--circulo">
                      <li class="text text--justify">Manejo Gradual de Tareas. Una jerarquización de tareas físicas, cognitivas y conductuales que son delimitadas y ejecutadas de manera secuencial en pasos manejables para alcanzar un objetivo identificado.</li>
                      <li class="text text--justify">Manejo de la Contingencia. Enfocar a la paciente y al familiar a responder bien sea reforzando o inhibiendo comportamientos específicos.</li>
                    </ul>
                  </li>
              </ul>
            </li>

            <!-- iii. -->
            <li>
              <p><strong>Otros métodos:</strong></p>
              <p class="text text--justify">Existen también otros métodos como la Terapia Integrativa con el uso de acupuntura.</p>
            </li>
          </ol>
        </li>

        <!-- f. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Monitoreo de la Intervención Terapéutica.</strong></p>
          <p class="text text--justify">Es esencial informar a su médico tratante acerca del funcionamiento del tratamiento. Indíquele cuando no sea efectivo. Su equipo médico sabrá buscarle una mejor opción. Recuerde que usted es la persona encargada de guiar su tratamiento. Puede hacer un reporte diario del dolor a través del empleo de la ficha del dolor.</p>
        </li>
       </ol>

       <h3 class="text text--right frontal frontal--secundario-3">
        Medicina Complementaria/Terapia Integrativa
       </h3>

       <p class="text text--justify">La medicina complementaria o alternativa se define como prácticas y recursos que no se consideran actualmente parte de la medicina convencional. Las terapias integrativas utilizan la medicina complementaria, en combinación con la medicina convencional (tratamiento médico estándar), constituyendo un enfoque que permite equilibrar a la paciente en su totalidad (física, mental y emocionalmente).</p>
       <p class="text text--justify">Las terapias complementarias incluyen enfoques de cuerpo-mente como la meditación, relajación, hipnosis, imágenes dirigidas, la aromaterapia, terapias cognitivas, arte, música y otras formas expresivas como la danza; enfoques corporales como masajes y reflexología; la acupuntura y terapias con campos energéticas que buscan afectar campos propuestos de bio-energía o meridianos, e incluyen (yoga, taichi o qigong).</p>
      
      <p>El objetivo de la medicina integrativa es:</p>
       <ul class="listas listas--disco listas--secundario-3">
        <li class="text text--justify">Aliviar los signos físicos y los efectos secundarios del tratamiento (náuseas, vómitos, fatiga, dolor y bochornos) y los efectos emocionales (ansiedad, estrés, depresión).</li>
        <li class="text text--justify">
          <p class="text text--justify">
            Mejorar la calidad de vida, mejorando el humor, la calidad del sueño, el funcionamiento físico y la sensación global de bienestar.
          </p>

          <p class="text text--justify">
            Cada terapia complementaria trata diferentes síntomas. Estas terapias funcionan mejor como parte del plan de tratamiento integral, en combinación con los tratamientos médicos estándares. Siempre consulte con el médico acerca de cualquier terapia complementaria que desee implementar, ya que algunas terapias conllevan riesgos o efectos secundarios para ciertas pacientes. De manera que su médico tratante, determinará la forma de integrarla a su plan de tratamiento y, posiblemente, le recomiende un terapeuta. LAS PACIENTES QUE UTILIZAN MEDICINA COMPLEMENTARIA DEBEN CONSULTAR A SU ONCÓLOGO SOBRE ESTOS TRATAMIENTOS, aun cuando la paciente considere que son terapias más espirituales que medicinales.  Su médico desea garantizar que recibirá la calidad de atención que merece. La coordinación entre todos los médicos y demás profesionales a los que consulte permitirá la efectiva integración de la medicina complementaria con el tratamiento convencional, lo que le ayudará a que obtenga la mejor atención posible.
          </p>
        </li>
       </ul>
    </div>
HTML;

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?cancer-mama-metastasico" class="navegar__enlace">
      <span>Cáncer De Mama Metastásico</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;

    // Botones de atrás y avanzar:
    $volver = <<<HTML
    <a href="?conozca" class="navegar__enlace">
      <span>Volver</span>
      <span data-src="multimedia/vectores/volver.svg"></span>
    </a>
HTML;

    $avanzar = <<<HTML
    <a href="?paciente" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>La Paciente</span>
    </a>
HTML;
  }