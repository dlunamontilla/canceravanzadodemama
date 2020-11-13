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

		<h3 class="text text--right">Tipos de biopsias</h3>
		<p class="text text--justify">La biopsia puede ser tomada por el cirujano, si se trata de una lesión palpable, en caso contrario, el médico radiólogo podrá realizar la toma guiada por una técnica de imagen. Existen diversos tipos de biopsia, no obstante la elección del procedimiento dependerá del objetivo y del tipo de información que se desea obtener.</p>

		<p class="text text--justify">
			La biopsia puede efectuarse con una aguja a través de la piel de la mama para extraer la muestra de tejido. Para ello existen diferentes tipos de biopsia con aguja,  dependiendo de su grosor, tal como: la Punción Aspiración con Aguja Fina (PAAF), que es un método citológico; la biopsia por Punción con Aguja Gruesa (BAG); y la Biopsia con Aguja Gruesa Asistida por Vacío (BAV). No obstante, la biopsia puede ser también un procedimiento quirúrgico para extraer la totalidad (biopsia excisional) o parte de la lesión de sospecha (biopsia incisional).
		</p>

		<h3 class="text text--right">
		Secciones del Informe de Anatomía</h3>

		<p class="text text--justify">
			El informe emitido posteriormente a la toma de la biopsia es el informe de inicio. El informe definitivo, más detallado se obtiene posterior a la cirugía con la extracción de la pieza quirúrgica.
		</p>

		<p class="text text--justify">
			En general el Informe de Anatomía Patológica, además del tipo de muestra, resumen de la historia clínica y el diagnóstico clínico, incluye las siguientes partes fundamentales:
		</p>

		<ul>
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

		<h3 class="text text--right">
				Información contenida en el Informe de Anatomía Patológica
		</h3>

		<p class="text text--justify">
			La información contenida en el informe, permite determinar qué clase de células se encuentran en la muestra (benignas o malignas), es decir si la lesión es cancerosa o no. En el caso de ser cáncer, además el informe permite conocer:
		</p>

		<ol type="a">
			<li class="text text--justify">
				<strong>Características del tumor: el tipo de cáncer de mama y si es infiltrante o no.</strong>

				<p class="text text--justify">
				El tipo de carcinoma de mama depende de la localización de las células en la que se desarrolla. Generalmente se origina a partir de las células epiteliales y recibe el nombre de adenocarcinoma. Existen otros tipos menos frecuentes de cáncer de mama que se desarrollan a partir del tejido conectivo, músculo o grasa que reciben el nombre de sarcomas. Para diferenciar si el tumor es ductal o lobulillar se utiliza una prueba llamada E-cadherina. Las células de los carcinomas lobulillares invasivos son negativas para E-cadherina.
				</p>

				<p class="text text--justify">
				Cuando las células del carcinoma siguen confinadas a los conductos mamarios, sin escaparse ni crecer en el tejido circundante, se considera carcinoma in situ.  Una vez que las células del carcinoma han crecido y han salido de los conductos o lobulillos, es lo que se conoce como carcinoma invasivo o infiltrante. En el carcinoma invasivo, las células tumorales pueden propagarse a otras partes del cuerpo a través de la sangre o del sistema linfático.
				</p>

				<div>
					<div data-src="multimedia/vectores/imagen-1.1-herramientas-informe.svg"></div>
					<p class="text text--justify"><i>Material educativo para pacientes, desarrollado por la Fundación Venezolana para la Educación e Investigación contra el Cáncer de Mama (FUVEICAM)</i></p>
				</div>
			</li>

			<li class="text text--justify">
				<strong>Grado de Diferenciación Celular</strong>

        <p class="text text--justify">
          Existen tres grados histológicos dependiendo de cuán diferente son las células tumorales en relación a las células normales o sanas de la mama: 
        </p>

        <ul type="none">
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
        <strong> Otros Parámetros</strong>

        <ol type="i">
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
        <strong>Receptores Hormonales</strong>

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

        <ul type="disc">
          <li>
            <p class="text text--justify">
            Análisis inmunohistoquímico (IHQ): Indica si hay demasiada proteína HER2 en las células cancerígenas. Los resultados del análisis de IHQ pueden ser: 0 (negativo), 1+ (también negativo), 2+ (ambiguo), o 3+ (positivo - sobreexpresión de la proteína HER2-).
            </p>

            <!-- Lista desordenada anidada -->
            <ul type="none">
              <li>Análisis por hibridación fluorescente in situ (FISH), Análisis de HER2 mediante hibridación cromogénica in situ con tecnología de sonda por sustracción (CISH) SPoT- Light o Análisis de HER2 mediante hibridación in situ (ISH) dual: Estas pruebas indican si hay demasiadas copias del gen HER2 en las células cancerígenas,  pueden ser positivas (amplificación del gen HER2) o negativas (sin amplificación del gen HER2).</li>

              <li>Es importante saber qué prueba para el receptor del HER2 se realizó. En general, sólo los casos de cáncer de mama que tienen resultados IHQ 3+, FISH positivo, SPoT-Light HER2 CISH positivo o HER2 ISH dual positivo responden a la terapia dirigida contra receptores HER2 positivos. Un resultado de análisis IHQ 2+ se denomina indeterminado o ambiguo. De ser así, se debe analizar la muestra mediante un análisis de HER2 más preciso, tal como el análisis por hibridación fluorescente in situ (FISH), el análisis de HER2 mediante hibridación cromogénica in situ (CISH) SPoT-Light o el análisis de HER2 mediante hibridación in situ (ISH) dual.</li>
            </ul>
          </li>
        </ul>

        <br>
      </li>

      <!-- Opción e -->
      <li>
        <strong>Informe de Anatomía Patológica de la Pieza Quirúrgica</strong>

        <p>Se reporta el tamaño tumoral en centímetros y se analiza el tejido normal que lo rodea,  lo que se denomina margen quirúrgico o  de resección. Según la presencia o no de células tumorales en el margen,  se define como margen negativo a la no presencia de células tumorales, y como margen positivo a la presencia de células tumorales en el borde del tejido, por lo que con frecuencia se lleva a cabo otra cirugía de ampliación de márgenes.</p>
        <p>De igual manera  se reporta si existe afectación de los ganglios linfáticos y si esta llegase a existir, cuántos de  estos ganglios presentan tumor.</p>
      </li>
		</ol>
</div>
HTML;

	$sidebar = <<<HTML
<div class="sidebar__item">
	<h2>Sidebar</h2>
</div>
HTML;

  $atras = <<<HTML
<a href="?nosotros" class="navegar__enlace">
  <span>Inicio</span>
  <span data-src="multimedia/vectores/inicio.svg"></span>
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
  <div data-src="multimedia/vectores/imagen-1.2-herramientas-subtipos.svg"></div>
  <p>&nbsp;</p>
</div>
HTML;

      $atras = <<<HTML
<a href="?nosotros" class="navegar__enlace">
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
?>