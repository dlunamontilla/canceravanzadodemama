<?php
	if (!isset( $get ) )
		exit;

    
	// Herramientas primera página:
	if ( $get->modulo("herramientas") ) {
		$contenido = <<<HTML
<div class="content__item">
		<h2 class="text text--right">Herramientas Informe de Anatomía</h2>
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

		<ol>
			<li class="text text--justify">
				<strong>Características del tumor: el tipo de cáncer de mama y si es infiltrante o no.</strong>

				<p class="text text--justify">
				El tipo de carcinoma de mama depende de la localización de las células en la que se desarrolla. Generalmente se origina a partir de las células epiteliales y recibe el nombre de adenocarcinoma. Existen otros tipos menos frecuentes de cáncer de mama que se desarrollan a partir del tejido conectivo, músculo o grasa que reciben el nombre de sarcomas. Para diferenciar si el tumor es ductal o lobulillar se utiliza una prueba llamada E-cadherina. Las células de los carcinomas lobulillares invasivos son negativas para E-cadherina.
				</p>

				<p class="text text--justify">
				Cuando las células del carcinoma siguen confinadas a los conductos mamarios, sin escaparse ni crecer en el tejido circundante, se considera carcinoma in situ.  Una vez que las células del carcinoma han crecido y han salido de los conductos o lobulillos, es lo que se conoce como carcinoma invasivo o infiltrante. En el carcinoma invasivo, las células tumorales pueden propagarse a otras partes del cuerpo a través de la sangre o del sistema linfático.
				</p>

				<div>
					<img src="https://i.ibb.co/NCQnvfY/image.png" alt="Material educactivo para pacientes desarrollo por la Función Venezolana para la Educación e Investigación contra el Cáncer de Mama.">
				</div>
			</li>

			<li class="text text--justify">
				
			</li>
		</ol>
</div>

HTML;


		$sidebar = <<<HTML
<div class="sidebar__item">
		<h2>Sidebar</h2>
</div>
HTML;
		}
?>