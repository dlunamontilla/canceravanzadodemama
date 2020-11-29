<?php
	if (!isset( $get ) )
		exit;

    
  // Herramientas primera página:
  // Página 1.1:
	if ( $get->modulo("herramientas") ) {
		$contenido = <<<HTML
<div class="content__item">
		<h2 class="text text--right">Informe de Anatomía</h2>
		<p class="text text--justify">Es el reporte emitido por un médico patólogo de los hallazgos de cada tejido que es extraído como muestra o espécimen de una zona sospechosa para ser analizado en el microscopio y determinar la presencia o no de cáncer. Sólo la biopsia permite dar el diagnóstico definitivo. En caso que se reporte como cáncer se precisa el tipo, el grado de diferenciación y algunos otros parámetros de interés que permiten distinguir la mejor opción terapéutica.</p>

		<h3 class="text text--right frontal frontal--secundario-3" id="tipos-de-biopsias">Tipos de biopsias</h3>
		<p class="text text--justify">La biopsia puede ser tomada por el cirujano, si se trata de una lesión palpable, en caso contrario, el médico radiólogo podrá realizar la toma guiada por una técnica de imagen. Existen diversos tipos de biopsia, no obstante la elección del procedimiento dependerá del objetivo y del tipo de información que se desea obtener.</p>

		<p class="text text--justify">
			La biopsia puede efectuarse con una aguja a través de la piel de la mama para extraer la muestra de tejido. Para ello existen diferentes tipos de biopsia con aguja,  dependiendo de su grosor, tal como: la Punción Aspiración con Aguja Fina (PAAF), que es un método citológico; la biopsia por Punción con Aguja Gruesa (BAG); y la Biopsia con Aguja Gruesa Asistida por Vacío (BAV). No obstante, la biopsia puede ser también un procedimiento quirúrgico para extraer la totalidad (biopsia excisional) o parte de la lesión de sospecha (biopsia incisional).
		</p>

		<h3 class="text text--right frontal frontal--secundario-3" id="secciones-anatomia">Secciones del Informe de Anatomía</h3>

		<p class="text text--justify">
			El informe emitido posteriormente a la toma de la biopsia es el informe de inicio. El informe definitivo, más detallado se obtiene posterior a la cirugía con la extracción de la pieza quirúrgica.
		</p>

		<p class="text text--justify">
			En general el Informe de Anatomía Patológica, además del tipo de muestra, resumen de la historia clínica y el diagnóstico clínico, incluye las siguientes partes fundamentales:
		</p>

		<ul class="listas listas--disco listas--secundario-3">
			<li class="text text--justify">
				Descripción general o macroscópica que describe como se ve la muestra a simple vista y el lugar de dónde procede. Además, puede incluir descripción del tamaño, el peso y el color. Seguidamente, 
			</li>
			
			<li class="text text--justify">
				Descripción microscópica que detalla la apariencia de las células bajo el microscopio.
			</li>

			<li class="text text--justify">
				Pruebas especiales o marcadores.
			</li>

			<li class="text text--justify">
				Diagnóstico definitivo.
			</li>
		</ul>

		<p class="text text--justify">
			Para la paciente la lectura e interpretación del informe es un evento confuso e intimidante. Es importante tener en cuenta que la información que éste aporta se interpreta como un todo, por lo que se debe evitar mantener el foco en un solo aspecto.  El informe patológico, no se entrega de inmediato, debe esperar. El procesamiento lleva su tiempo, en la mayoría de los casos de una a dos semanas, aunque algunos resultados pueden tardar más que otros.
		</p>

		<h3 class="text text--right frontal frontal--secundario-3" id="informacion-anatomia">
			Información contenida en el Informe de Anatomía Patológica
		</h3>

		<p class="text text--justify">
			La información contenida en el informe, permite determinar qué clase de células se encuentran en la muestra (benignas o malignas), es decir si la lesión es cancerosa o no. En el caso de ser cáncer, además el informe permite conocer:
		</p>

		<ol class="listas listas--alfabetico listas--secundario-2 listas--bold">
			<li class="text text--justify">
				<strong class="frontal frontal--secundario-2">Características del tumor: el tipo de cáncer de mama y si es infiltrante o no.</strong>

				<p class="text text--justify">
				El tipo de carcinoma de mama depende de la localización de las células en la que se desarrolla. Generalmente se origina a partir de las células epiteliales y recibe el nombre de adenocarcinoma. Existen otros tipos menos frecuentes de cáncer de mama que se desarrollan a partir del tejido conectivo, músculo o grasa que reciben el nombre de sarcomas. Para diferenciar si el tumor es ductal o lobulillar se utiliza una prueba llamada E-cadherina. Las células de los carcinomas lobulillares invasivos son negativas para E-cadherina.
				</p>

				<p class="text text--justify">
				  Cuando las células del carcinoma siguen confinadas a los conductos mamarios, sin escaparse ni crecer en el tejido circundante, se considera carcinoma in situ.  Una vez que las células del carcinoma han crecido y han salido de los conductos o lobulillos, es lo que se conoce como carcinoma invasivo o infiltrante. En el carcinoma invasivo, las células tumorales pueden propagarse a otras partes del cuerpo a través de la sangre o del sistema linfático.
				</p>

				<div>
					<div data-sr="multimedia/vectores/imagen-1.1-herramientas-informe.svg"></div>
					<p class="text text--justify"><i>Material educativo para pacientes, desarrollado por la Fundación Venezolana para la Educación e Investigación contra el Cáncer de Mama (FUVEICAM)</i></p>
				</div>
			</li>

			<li class="text text--justify">
				<strong class="frontal frontal--secundario-2">Grado de Diferenciación Celular</strong>

        <p class="text text--justify">
          Existen tres grados histológicos dependiendo de cuán diferente son las células tumorales en relación a las células normales o sanas de la mama: 
        </p>

        <ul class="listas listas--none">
          <li class="text text--justify">
            <p class="text text--justify"><strong>Grado 1:</strong> Bajo grado o bien diferenciado. Las células cancerosas lucen sólo un poco diferente a las células normales.</p>
          </li>
          
          <li class="text text--justify">
            <p class="text text--justify"><strong>Grado 2:</strong> Grado Intermedio o moderadamente diferenciado. Las células cancerosas no lucen como las células normales, ya que se reproducen un poco más rápido.</p>
          </li>
          
          <li class="text text--justify">
            <p class="text text--justify"><strong>Grado 3:</strong> Alto Grado o Pobremente diferenciado. Las células lucen muy diferente a las células normales, ya que se reproducen de rápida manera.</p>
          </li>
        </ul>

        <p class="text text--justify">
          El cáncer de mama tiene su propio sistema para determinar su capacidad y velocidad de crecimiento, y se denomina Sistema  de Gradación de Nottingham o  modificación de Elston-Ellis del sistema de gradación de Scarff-Bloom-Richardson.  En este caso las características que se evalúan incluyen la disposición normal de las células en los ductos (formación tubular), la evaluación del tamaño y la forma del núcleo (grado nuclear), y cuántas de las células cancerosas están en el proceso de división (índice mitótico). Se asigna  a cada categoría una puntuación del 1 al 3. 
        </p>

        <p class="text text--justify">
          Si suman un total de 3 a 5, el cáncer es de grado 1 (bien diferenciado). Los carcinomas bien diferenciados tienen células de aspecto relativamente normal que no parecen estar creciendo rápidamente. Están ordenadas en forma de pequeños túbulos para el cáncer ductal y en forma de cordones para el cáncer lobulillar. Los carcinomas bien diferenciados tienden a crecer y a propagarse lentamente, y tienen un mejor pronóstico.
        </p>

        <p class="text text--justify">
          Si suman en total 6 o 7 significa que el cáncer es de grado 2 (moderadamente diferenciado). Los carcinomas moderadamente diferenciados tienen características y un pronóstico intermedio entre estos dos tipos.
        </p>

        <p class="text text--justify">
          Si suman en total 8 o 9 significa que el cáncer es de grado 3 (pobremente diferenciado). Los carcinomas pobremente diferenciados tienen células que carecen de características normales, tienden a crecer y a propagarse rápidamente, y tienen un pronóstico peor.
        </p>

        <p class="text text--justify"><strong><i>El Grado es completamente diferente al estadio</i></strong></p>
			</li>

      <li>
        <strong class="frontal frontal--secundario-2"> Otros Parámetros</strong>

        <ol class="listas listas--romano listas--bold">
          <li>
            <strong>Índice de Proliferación Tumoral</strong>

            <p class="text text--justify">
              El reporte de la biopsia puede incluir la proporción de células cancerosas dentro del tumor que se está dividiendo y creciendo. La prueba más común y ampliamente utilizada es el Ki-67.
            </p>

            <p class="text text--justify">
              El Ki-67 es una proteína celular que se incrementa cuando la célula se prepara para dividirse.  Un proceso de coloración permite determinar el porcentaje de las células tumorales que son positivas para el Ki-67, evaluando de esta manera qué tan rápido crecen y se dividen las células cancerosas. Valores altos significan que muchas células se están dividiendo rápidamente, por lo que potencialmente el tumor es más agresivo.
            </p>

            <p class="text text--justify">
              En el cáncer de mama un resultado menor de 10% es considerado bajo, entre 10-20% es considerado intermedio y más de 20% es considerado alto.
            </p>
          </li>

          <li>
            <strong>Invasión Linfovascular o Angiolinfática</strong>

            <p class="text text--justify">
              Consiste en la presencia de células cancerosas en vasos sanguíneos pequeños o en los canales linfáticos de la muestra al microscopio. Si en el informe se reporta como presente, puede considerarse como un parámetro de mayor agresividad del tumor.  Si dicha invasión no se evidencia, el informe puede que no la mencione o se reporte como ausente. La invasión angiolinfática no es lo mismo que la afectación de los ganglios linfáticos.
            </p>
          </li>
        </ol>
      </li>

      <!-- d. -->
      <li>
        <strong class="frontal frontal--secundario-2">Receptores Hormonales</strong>

        <p class="text text--justify">
          Los receptores hormonales son proteínas, que como toda proteína su producción es controlada por genes. Las células cancerosas pueden ser receptores de estrógeno positivas, si tienen receptores para el estrógeno y receptores de progesterona positivas, si tienen receptores para la progesterona, estas señales hormonales favorecen el crecimiento tumoral. Si las células tumorales no tienen receptores para ambas hormonas se denominan receptores hormonales negativas. 
        </p>

        <p class="text text--justify">
          Los resultados de los receptores hormonales en la biopsia pueden expresarse o bien por porcentaje, es decir el número de células que tiene receptores en 100 células analizadas, que puede ir entre 0% (ninguna tiene receptor), hasta 100%  (todas tienen receptor); o bien según la escala de Allred, que analiza qué porcentaje de células dan positivo para los receptores hormonales, junto con qué tan adecuado se muestran los receptores después de la tinción (intensidad). Se clasifican en una escala de 0 a 8. Cuanto mayor sea la puntuación,  más receptores se encontraron y se identificaron más intensamente.
        </p>

        <p class="text text--justify">
          El gen <strong>Her2</strong> es un gen que se encuentra normalmente en las células de la glándula mamaria. Es el responsable de codificar y producir proteínas HER2. Estas proteínas son receptores en las células mamarias, que  en circunstancias normales, ayudan a controlar cómo crece, se divide y se repara la célula de la mama, pero en ocasiones puede ocurrir que el gen HER2 haga demasiadas copias de sí mismo, es decir se amplifique. Cuando esto sucede, los receptores HER2  sobreexpresados  estimulan  a las células mamarias para crecer y dividirse de manera incontrolada. El cáncer de mama con gen HER2 amplificado o que sobreexpresa la proteína Her2 se define como HER-2 positivo. Se caracteriza por crecer más rápido y cuenta con tratamientos o terapias dirigidas.
        </p>

        <p class="text text--left"><strong>Existen  cuatro pruebas para el HER2:</strong></p>

        <ul class="listas listas--disco">
          <li>
            <p class="text text--justify">
            Análisis inmunohistoquímico (IHQ): Indica si hay demasiada proteína HER2 en las células cancerígenas. Los resultados del análisis de IHQ pueden ser: 0 (negativo), 1+ (también negativo), 2+ (ambiguo), o 3+ (positivo - sobreexpresión de la proteína HER2-).
            </p>

            <!-- Lista desordenada anidada -->
            <ul class="listas listas--none">
              <li class="text text--justify margin margin--bottom">Análisis por hibridación fluorescente in situ (FISH), Análisis de HER2 mediante hibridación cromogénica in situ con tecnología de sonda por sustracción (CISH) SPoT- Light o Análisis de HER2 mediante hibridación in situ (ISH) dual: Estas pruebas indican si hay demasiadas copias del gen HER2 en las células cancerígenas,  pueden ser positivas (amplificación del gen HER2) o negativas (sin amplificación del gen HER2).</li>

              <li class="text text--justify">Es importante saber qué prueba para el receptor del HER2 se realizó. En general, sólo los casos de cáncer de mama que tienen resultados IHQ 3+, FISH positivo, SPoT-Light HER2 CISH positivo o HER2 ISH dual positivo responden a la terapia dirigida contra receptores HER2 positivos. Un resultado de análisis IHQ 2+ se denomina indeterminado o ambiguo. De ser así, se debe analizar la muestra mediante un análisis de HER2 más preciso, tal como el análisis por hibridación fluorescente in situ (FISH), el análisis de HER2 mediante hibridación cromogénica in situ (CISH) SPoT-Light o el análisis de HER2 mediante hibridación in situ (ISH) dual.</li>
            </ul>
          </li>
        </ul>

        <br>
      </li>

      <!-- Opción e -->
      <li>
        <strong class="frontal frontal--secundario-2">Informe de Anatomía Patológica de la Pieza Quirúrgica</strong>

        <p class="text text--justify">Se reporta el tamaño tumoral en centímetros y se analiza el tejido normal que lo rodea,  lo que se denomina margen quirúrgico o  de resección. Según la presencia o no de células tumorales en el margen,  se define como margen negativo a la no presencia de células tumorales, y como margen positivo a la presencia de células tumorales en el borde del tejido, por lo que con frecuencia se lleva a cabo otra cirugía de ampliación de márgenes.</p>
        <p class="text text--justify">De igual manera  se reporta si existe afectación de los ganglios linfáticos y si esta llegase a existir, cuántos de  estos ganglios presentan tumor.</p>
      </li>
		</ol>
</div>
HTML;

  $atras = <<<HTML
<a href="?abc-global" class="navegar__enlace">
  <span>ABC Global Alliance</span>
  <span data-src="multimedia/vectores/atras.svg"></span>
</a>
HTML;


  $avanzar = <<<HTML
<a href="?herramientas-subtipos-moleculares" class="navegar__enlace">
  <span data-src="multimedia/vectores/adelante.svg"></span>
  <span>Clasificación en Subtipos Moleculares</span>
</a>
HTML;

  }
    
    // Clasificación en Subtipos Moleculares:
    if ( $get->modulo("herramientas-subtipos-moleculares")) {
      $contenido = <<<HTML
<div class="content__item">
  <h2 class="text text--right">Clasificación en Subtipos Moleculares</h2>

  <p class="text text--justify">El cáncer de mama puede clasificarse de acuerdo con parámetros moleculares en subtipos: Luminal A, Luminal B, Her2+ y Basal, que en la práctica clínica se traducen por las características morfológicas e inmunohistoquímicas reportadas en la biopsia. Distinguir entre subtipos es importante para optimizar las estrategias de tratamiento.</p>
  
  <div class="subtipos" data-src="multimedia/vectores/imagen-1.2-herramientas-subtipos.svg"></div>
  
  <p>&nbsp;</p>
</div>
HTML;

      $atras = <<<HTML
<a href="?herramientas" class="navegar__enlace">
  <span>Informe de Anatomía</span>
  <span data-src="multimedia/vectores/atras.svg"></span>
</a>
HTML;


      $avanzar = <<<HTML
<a href="?estadificacion" class="navegar__enlace">
  <span data-src="multimedia/vectores/adelante.svg"></span>
  <span>Estadificación</span>
</a>
HTML;

  }

  // Estadificación:
  if ($get->modulo("estadificacion")) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Estadificación</h2>

      <p class="text text--justify">
      El estadio o etapa de un cáncer es una medida de la extensión y propagación del tumor, que indica la fase o etapa en la que se encuentra el cáncer, es decir cuánto ha crecido, si se ha diseminado y para dónde lo ha hecho.  Es importante conocer el estadio de la paciente para establecer el pronóstico y determinar el plan de tratamiento óptimo.
      </p>

      <p class="text text--justify">
        El sistema de estadificación más frecuentemente utilizado para el cáncer de mama es el TNM, aceptado por la American JointCommitte (AJCC) y la <a href="https://www.uicc.org/resources/tnm" target="_blank">Unión Internacional de Control de Cáncer (UICC).</a>
      </p>

      <p class="text text--justify">
        La categoría  <strong>T</strong> se basa en el tamaño del tumor en la mama (tumor primario). Los números de T más altos significan un tumor más grande y/o una propagación más extensa a los tejidos vecinos de la mama.
      </p>

      <p class="text text--justify">
        <strong>N</strong> indica la propagación a los ganglios (nódulos) linfáticos de axila, infra/supraclaviculares y mamarios internos. 
      </p>

      <p class="text text--justify">
        <strong>M</strong> se refiere a metástasis, es decir, propagación a partes distantes del cuerpo.
      </p>
      
      <br>
      <!-- Tarjetas | Etapas -->
      <div class="t-etapas">
        <div class="t-etapas__item">
          <div class="t-etapas__header t-etapas__color t-etapas__color--1">
            <div>
              <span>T.</span>
              <span>Tumor</span>
            </div>
          </div>

          <div class="t-etapas__content t-etapas__color t-etapas__color--1">
            <ul>
              <li><strong>Tx:</strong> No se puede evaluar el tumor primario.</li>
              <li><strong>T0:</strong> No hay evidencia de tumor primario en la mama.</li>
              <li><strong>Tis:</strong> Carcinoma in situ. No se ha diseminado al tejido circundante de la mama. Hay dos tipos Carcinoma Ductal In situ y Enfermedad de Paget del Pezón.</li>
              <li><strong>T1:</strong> Tumor en la mama mide ≤ 2 cm.</li>

              <li>
                <strong>T1</strong> mic ≤ 1mm

                <ul type="none" class="lista-anidada">
                  <li><strong>T1a:</strong> El tumor mide <code>1 mm</code> pero <code> ≤ 5 mm</code> en su diámetromayor.</li>
                  <li><strong>T1b:</strong> El tumor mide <code>5 mm</code> pero <code>≤ 1 cm</code> en su diámetro mayor.</li>
                  <li><strong>T1c:</strong> El tumor mide <code>1 cm</code> pero <code>≤ 2 cm</code> en su diámetro mayor.</li>
                </ul>
              </li>


              <li><strong>T2:</strong> Tumor en la mama mide <code>2 cm</code> pero <code>≤ 5 cm</code> en su diámetro mayor.</li>
              <li><strong>T3:</strong> Tumor en la mama es mayor de 5 cm.</li>

              <li>
                <strong>T4:</strong> Tumor de cualquier tamaño, que se ha extendido a pared torácica o a piel.

                <ul type="none" class="lista-anidada">
                  <li><strong>T4a:</strong> Extensión a la pared torácica.</li>
                  <li><strong>T4b:</strong> Extensión a la piel.</li>
                  <li><strong>T4c:</strong> Extensión a piel y pared torácica.</li>
                  <li><strong>T4d:</strong> Carcinoma Inflamatorio.</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <div class="t-etapas__item">
          <div class="t-etapas__header t-etapas__color t-etapas__color--2">
            <div>
              <span>N.</span>
              <span>Ganglios</span>
            </div>
          </div>

          <div class="t-etapas__content t-etapas__color t-etapas__color--2">
            <ul>
              <li><strong>Nx:</strong> No se pudo evaluar los ganglios linfáticos.</li>
              <li><strong>N0:</strong> Sin metástasis en ganglios linfáticos o los ganglios linfáticos presentan áreas de cáncer inferiores a los 0.2 mm.</li>
              <li><strong>N1:</strong> extensión a ganglios linfáticos en la axila (de 1 a 3 ganglios) o a ganglios linfáticos situados cerca del esternón (cadena mamaria interna).</li>
              <li><strong>N2:</strong> extensión a ganglios linfáticos en la axila (de 4 a 9 ganglios) o bien a ganglios linfáticos situados cerca del esternón (cadena mamaria interna), pero no a los ganglios linfáticos axilares.</li>
              <li><strong>N3:</strong> extensión a ganglios linfáticos en la axila (10 o más); o bien ganglios linfáticos situados por debajo de la clavícula (infraclaviculares) o por encima de la clavícula (supraclaviculares); o ganglios linfáticos mamarios internos.</li>
            </ul>
          </div>
        </div>

        <div class="t-etapas__item">
          <div class="t-etapas__header t-etapas__color t-etapas__color--3">
            <div>
              <span>M.</span>
              <span>Metástasis</span>
            </div>
          </div>

          <div class="t-etapas__content t-etapas__color t-etapas__color--3">
            <ul>
              <li><strong>Mx:</strong> No se puede evaluar diseminación a distancia.</li>
              <li><strong>M0:</strong> Sin evidencia clínica o radiológica de diseminación a distancia.</li>
              <li><strong>M0:</strong> (i+): Sin evidencia clínica o radiológica de diseminación a distancia. La evidencia microscópica de células tumorales se encuentra en la sangre, la médula ósea u otros ganglios linfáticos que midan más de 0.2 mm.</li>
              <li><strong>M1:</strong> Evidencia de metástasis a distancia. ternos.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Estadios -->
      <h3 class="text text--right frontal frontal--secundario-3">
        Estadios
      </h3>

      <p class="text text--justify">
        Una vez que las categorías T, N y M se han determinado, esta información se combina para asignarle al cáncer una etapa general o estadio, con el objetivo de poder identificar la extensión de la enfermedad, entender su pronóstico y guiar la toma de decisiones. Este proceso se le conoce como estadificación.
      </p>

      <p class="text text--justify">
        La determinación del estadio puede ser clínica o patológica. El estadio clínico está basado en el examen físico y los resultados de las pruebas imagenológicas que se realizan antes de iniciar el tratamiento.La determinación del estadio patológico se realiza a través del informe de biopsia de la pieza quirúrgica.
      </p>

      <p class="text text--justify">
        Existen cinco estadios y se expresan en números romanos desde I (la etapa menos avanzada) hasta IV (la etapa más avanzada), que corresponden a cáncer invasivo o infiltrante. El cáncer no invasivo (carcinoma in situ) se reporta como estadio 0.
      </p>
      
      <p class="text text--justify">
        ESTADIO 0: Carcinoma In Situ. Corresponde a un cáncer no invasivo. Las células malignas no han invadido los tejidos que están alrededor del sitio de origen del tumor, es decir la membrana basal está intacta.
      </p>
      
      <!-- Estadio 1 -->
      <h4 class="text text--right frontal frontal--secundario-2">
          ESTADIO I
      </h4>
      
      <!-- Estadio IA -->
      <p class="frontal frontal--secundario-2 text text--right"><strong>Estadio IA (T1 N0 M0)</strong></p>
      <p class="text text--justify">Tumor invasivo, pequeño (igual o inferior a 2 cm), que no se ha extendido a los ganglios linfáticos.</p>
      
      <!-- Estadio IB -->
      <p class="frontal frontal--secundario-2 text text--right"><strong>Estadio IB (T0 o T1 N1mic M0)</strong></p>
      <p class="text text--justify">
      Tumor pequeño (igual o inferior a 2 cm) o sin evidencia del tumor en mama, con extensión a ganglios linfáticos axilares, aunque estas metástasis son de pequeño tamaño (micrometástasis), que  miden más de 0.2 mm, pero menos de 2 mm.
      </p>

      <h4 class="text text--right frontal frontal--secundario-2">
          ESTADIO II
      </h4>
      
      <!-- Estadio IIA -->
      <p class="text text--right frontal frontal--secundario-2"><strong>Estadio IIA</strong></p>

      <p class="margin margin--bottom">Cualquiera de las siguientes situaciones:</p>
      <ul class="listas listas--disco listas--secundario-2">
        <li>
          <strong>T0 o T1 N1 M0:</strong> No hay evidencia del tumor en la mama o bien el tumor mide menos de 2 cm; con metástasis en ganglios linfáticos axilares en número de 1 a 3.
        </li>

        <li>
          <strong>T2 N0 M0:</strong> El  tumor en la mama mide más de 2 cm pero igual o menos de 5 cm, y no hay extensión a los ganglios linfáticos axilares.
        </li>
      </ul>

      <!-- Estadio IIB -->
      <p class="frontal frontal--secundario-2 text text--right"><strong>Estadio IIB</strong></p>
      <p>Cualquiera de las siguientes situaciones:</p>

      <ul class="listas listas--disco listas--secundario-2">
        <li><strong>T2 N1 M0:</strong> El tumor en la mama mide más de  2 cm pero igual o  menos de 5 cm, con extensión a los ganglios linfáticos axilares en número de 1 a 3.</li>
        <li><strong>T3 N0 M0:</strong> El tumor en la mama mide más de 5 cm, sin extensión a ganglios linfáticos axilares.</li>
      </ul>

      <!-- Estadio III -->
      <h4 class="text text--right frontal frontal--secundario-2">ESTADIO III</h4>

      <!-- Estadio IIIA -->
      <p class="frontal frontal--secundario-2 text text--right"><strong>Estadio IIIA</strong></p>

      <p>Cualquiera de las siguientes situaciones:</p>

      <ul class="listas listas--disco listas--secundario-2">
        <li><strong>T0 – T3 N2 M0:</strong> Tumor en la mama de cualquier tamaño o incluso en algunos casos no se detecta el tumor de la mama, con una extensión a 4 a 9 ganglios linfáticos axilares  o a ganglios linfáticos mamarios internos.</li>
        <li><strong>T3 N1 M0:</strong> Tumor en la mama mide más de 5 cm, con extensión a ganglios linfáticos axilares en número 1 a 3.</li>
      </ul>

      <!-- Estadio IIIB -->
      <p class="text text--right frontal frontal--secundario-2"><strong>Estadio IIIB</strong></p>
      <ul class="listas listas--disco listas--secundario-2">
        <li><strong>T0 – T4 N3 M0:</strong> Tumor en la mama de cualquier tamaño que se ha diseminado a 10 o más ganglios linfáticos axilares, los ganglios linfáticos mamarios internos o los ganglios linfáticos debajo o por encima de la clavícula (ganglios supra e infraclaviculares).</li>
      </ul>

      <!-- Estadio IV -->
      <h4 class="text text--right frontal frontal--secundario-2">ESTADIO IV</h4>

      <p><strong>Cualquier T cualquier N M1:</strong></p>
      <p class="text text--justify">Tumor en la mama de cualquier tamaño o con cualquier grado de extensión a los ganglios linfáticos próximos, que se ha diseminado a otros órganos, como huesos, pulmones, cerebro e hígado.</p>
    
      <p><strong>REFERENCIA</strong></p>
      <p><i>American Joint Committee on Cancer (AJCC) 2017.Cancer Staging Handbook from the AJCC Cancer Staging Manual, Eighth Edition.</i></p>

      <hr>
      <div class="estadificacion">
        <img class="estadificacion__img estadificacion__img--mediana" src="multimedia/img/inforgrafia estadiosfinal-01.jpg?v1" alt="Estadios">
      </div>
    </div>
HTML;

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?herramientas-subtipos-moleculares" class="navegar__enlace">
      <span>Clasificación en Subtipos Moleculares</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;
    
    
    $avanzar = <<<HTML
    <a href="?glosario" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Glosario</span>
    </a>
HTML;

  }

  // Glosario:
  if ( $get->modulo("glosario") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Glosario</h2>

      <div class="glosario">
        $tablaGlosario
      </div>
    </div>
HTML;
    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?estadificacion" class="navegar__enlace">
      <span>Estadificación</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;
    
    // Botones de atrás y avanzar:
    $volver = <<<HTML
    <a href="?herramientas" class="navegar__enlace">
      <span>Volver</span>
      <span data-src="multimedia/vectores/volver.svg"></span>
    </a>
HTML;

    $avanzar = <<<HTML
    <a href="?quimioterapia" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>Modalidades del Tratamiento</span>
    </a>
HTML;
  }
?>