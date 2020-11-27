<?php

  if ( !isset($get) )
    exit;

  if ( $get->modulo("actitudes") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">
        La Paciente: Actitudes
      </h2>

      <!-- Alfabético -->
      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <!-- a. -->
        <li>
          <p><strong class="frontal frontal--secundario-2">Estructuración del Expediente Médico:</strong></p>
          <p class="text text--justify">
            Cada institución de salud que visite tendrá su propia historia médica sobre su caso. Aunque su plan terapéutico se discute entre las personas del equipo médico en las reuniones multidisciplinarias, no siempre ocurre así, por lo que resulta adecuado que tenga sus propios expedientes completos y actualizados, con la debida información sobre su atención médica durante el proceso de diagnóstico, tratamiento y seguimiento del cáncer de mama, que permita brindarle la información precisa a cada médico tratante. De esta manera, usted se involucra con un rol activo con la debida información de su enfermedad y se garantiza recibir la mejor atención posible.
          </p>

          <div class="imagen">
            <img src="https://i.ibb.co/YWQ8SMW/imagen1la-paciente-2.png" alt="">
          </div>

          <p>Los médicos que forman parte de su equipo deben:</p>
          <ul class="listas listas--disco listas--secundario-3">
            <li class="text text--justify">
              Contar con todos los resultados de sus análisis y biopsias.
            </li>

            <li class="text text--justify">
              Tener acceso inmediato a sus imágenes. Su médico tratante debe ver las imágenes, ya que comparación de los resultados a lo largo del tiempo constituye una parte esencial en la planificación del tratamiento. Es por ello que usted debe contar con el respaldo físico de todas las imágenes mamarias que se haya realizado. Estos archivos, tanto los recientes como los antiguos deben estar almacenados en el centro donde se las realizó. Si cambia de Institución Médica debe solicitar todos sus registros de imágenes mamarias, las cuales le podrían ser entregadas en forma de placas o en formato digital, esto es, en un CD o DVD en lugar de copias impresas. Las copias impresas de sus imágenes mamarias, no constituyen la forma más adecuada para evaluar alguna alteración en la mama. Asegúrese que le entreguen los archivos completos. Recuerde que son suyos y tiene derechos sobre ellos.
            </li>

            <li class="text text--justify">
              <p class="text text--justify">
                Disponer del resumen clínico de todos sus procedimientos. Trate de llevar su propio expediente médico donde figuren las pautas del tratamiento sistémico y del tratamiento local, esto le permite continuar su tratamiento para el cáncer de mama en cualquier lugar. Por lo tanto, debe tener a su alcance:
              </p>

              <ul class="listas listas--circulo">
                <li class="text text--justify">
                  Una copia del Informe de Anatomía Patológica de la Biopsia y el Informe de Anatomía Patológica de la Cirugía.
                </li>

                <li class="text text--justify">
                  Si se sometió a una Cirugía, una copia del Informe Quirúrgico y la una copia del Resumen de Egreso o del Alta Médica.
                </li>

                <li class="text text--justify">
                  Si se ha sometido a Radioterapia, una copia del Resumen o Ficha de su Tratamiento.
                </li>

                <li class="text text--justify">
                  Si recibió Quimioterapia, la Ficha de Tratamiento, es decir la lista de medicamentos que ha recibido (esquemas), con las dosis y fechas de inicio y culminación.
                </li>

                <li class="text text--justify">
                  Haga un directorio con el nombre de todos sus médicos, especialistas y su forma de contacto.
                </li>
              </ul>

              <p class="text text--justify">
                La recopilación de estos detalles durante o poco después del tratamiento puede ser más fácil que tratar de obtenerlos en algún momento posterior. Usted forma parte integral de su equipo de atención médica, por lo que usted debe acudir de manera cabal a sus citas, cumplir con rigor el tratamiento y notificar sobre cualquier efecto colateral o inquietud que tenga.
              </p>
            </li>
          </ul>
        </li>
      </ol>

    </div>
HTML;


    $url = "https://www.cancer.org/es/tratamiento/como-comprender-su-diagnostico/cancer-avanzado/que-es.html";
    $datos = get_meta_tags($url);

    $imagen = $datos["twitter:image"];
    $titleCard = $datos["twitter:title"];
    $description = $datos["description"];

    $adicionales = <<<HTML
    <div class="adicionales">

      <div class="enlaces-externos">
        <h3 class="frontal frontal--secundario-3">American Cancer Society</h3>

        <div class="bibliograficas">
          <a href="$url" target="_blank" class="bibliograficas__item">
            <div class="bibliograficas__imagen">
              <img src="$imagen" alt="$description">
            </div>

            <div class="bibliograficas__caption">
              <h6 class="frontal frontal--secundario-3">Cáncer de Mama Avanzado y Metastásico</h6>
              <p class="text text--justify frontal frontal--base">$titleCard</p>
            </div>
          </a>

          <div class="bibliograficas__item">

          </div>

          <div class="bibliograficas__item">

          </div>

          <div class="bibliograficas__item">

          </div>
        </div>
      </div>

    </div>
HTML;

    // Botones de atrás y avanzar:
    $atras = <<<HTML
    <a href="?paciente" class="navegar__enlace">
      <span>La Paciente</span>
      <span data-src="multimedia/vectores/atras.svg"></span>
    </a>
HTML;


    $avanzar = <<<HTML
    <a href="?su-entorno" class="navegar__enlace">
      <span data-src="multimedia/vectores/adelante.svg"></span>
      <span>La paciente y su entorno</span>
    </a>
    HTML;
  }