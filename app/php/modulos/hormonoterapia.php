<?php
  if ( !isset($get) )
    exit;

  if ( $get->modulo("hormonoterapia") ) {
    $contenido = <<<HTML
    <div class="content__item">
      <h2 class="text text--right">Terapia Hormonal. Hormonoterapia</h2>

      <p class="text text--justify">
      La terapia hormonal, hormonoterapia o terapia endocrina son tratamientos contra el cáncer de mama con receptores hormonales positivos, que retardan o detienen el crecimiento del cáncer que utiliza hormonas para proliferar.
      </p>

      <div class="destacado destacado--secundario-3">
        <p>La terapia hormonal, hormonoterapia o terapia endocrina son tratamientos contra el cáncer de mama con receptores hormonales positivos, que retardan o detienen el crecimiento del cáncer que utiliza hormonas para proliferar. </p>
        <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
      </div>

      <p class="text text--justify">
        En general, se recomienda la terapia hormonal para todos los pacientes con cáncer de mama receptores hormonales positivos. La hormonoterapia se emplea para reducir el riesgo de recurrencia del cáncer de mama con receptores de hormonas positivos en estadio temprano posterior al tratamiento quirúrgico (cirugía), o para reducir o desacelerar el crecimiento del cáncer de mama con receptores de hormonas positivos en estadios  avanzado o metastásico.
      </p>

      <div class="destacado destacado--morado">
        <p>La determinación del tipo y duración de la terapia hormonal va a depender del estado menstrual de la paciente (pre o post-menopáusica) y del estadio. La hormonoterapia se puede administrar antes, durante o después de otras modalidades de tratamiento contra el cáncer de mama.</p>
        <div class="destacado__imagen" data-src="multimedia/vectores/guia-icon.svg"></div>
      </div>

      <p class="text text--justify">
        La hormonoterapia en pacientes con cáncer de mama estadio IV, dependerá de si está o no en menopausia, el tipo de tratamiento que ya recibió, y si presenta o no síntomas.
      </p>

      <p class="text text--justify">
        Tipos de Terapia Hormonal. La terapia hormonal se divide en dos grandes grupos:
      </p>

      <ol class="listas listas--alfabetico listas--bold listas--secundario-2">
        <li>
          <p><strong>Los que anulan o bloquean la capacidad del organismo para producir estrógeno.</strong></p>

          <ul class="listas listas--disco listas--secundario-3">
            <li class="text text--justify">
              En mujeres premenopáusicas, se denomina supresión ovárica. La supresión ovárica puede ser médica o quirúrgica. La supresión ovárica quirúrgica se realiza a través de la cirugía de extirpación de los ovarios, lo que se conoce como ooforectomía bilateral. La supresión ovárica médica puede hacerse con medicamentos que bloquean la producción de estrógeno por parte de los ovarios, lo que determina que las células cancerosas no puedan obtener el estrógeno que necesitan para crecer. Dentro de este grupo están los agonistas de la luliberina u hormona liberadora de gonadotropina (LHRH): la Goserelina  (nombre comercial Zoladex) y el Leucoprolide (nombre comercial Lupron). Estos medicamentos actúan temporalmente, es decir una vez deje de administrarse el medicamento, los ovarios volverán a funcionar nuevamente. El tiempo de recuperación de la función ovárica, varía de una mujer a otra. Goserelina se administra bajo la piel (implante subcutáneo), una vez mensual o cada tres meses y Leucoprolide  se administra por inyecciónen el músculo (intramuscular) 1 vez al mes, debajo de la piel (subcutánea) cada 4 semanas o depósito cada 3 meses.
            </li>

            <li class="text text--justify">
              En pacientes postmenopáusicas los inhibidores de la aromatasa: Anastrozol (nombre comercial Arimidex), Letrozol(nombre comercial Femara) y  Exemestano (nombre comercial Aromasin), previenen que el organismo produzca estrógeno. Si recibe un Inhibidor de Aromatasa debe evaluar su densidad ósea, debido a que el efecto secundario más común de los éstos es la pérdida de la densidad ósea.
            </li>
          </ul>
        </li>

        <li>
          <p class="text text--justify"><strong>Los que interfieren con la actividad del estrógeno en el cuerpo, al impedir que las hormonas se unan a sus receptores presentes en las células cancerígenas. En este grupo se encuentran:</strong></p>

          <ul class="listas listas--disco listas--secundario-3">
            <li class="text text--justify">
              Los Modulares Selectivos de los Receptores de Estrógenos, que se unen a los receptores de estrógenos de las células simulando la actividad de los estrógenos en ciertos órganos, pero en otros como en la mama tienen un efecto antiestrogénico, es decir se unen al receptor limitando el espacio para que el estrógeno se acople a la célula. Si el estrógeno no se une a la célula de la mama,  éstas no reciben las señales del estrógeno que le indican que debe crecer y multiplicarse.En este grupo tenemos el Tamoxifeno, el Raloxifeno (nombre comercial Evista) y el Toremifeno (nombre Comercial Fareston). Se administran diariamente por vía oral.  Si se considera la posibilidad de incluirse en el tratamiento algún tipo de estos modulares selectivo debe informársele al médico tratante antecedentes médicos de importancia como alguna coagulopatía o isquemia cardíaca, así como debe reportarse la presencia o no de hábitos tabáquicos.
            </li>
          </ul>

          <p class="text text--justify">
            Al iniciar el tratamiento debe tener presente los signos de alarma que debe reportar de manera inmediata a su médico tratante:
          </p>

          <ul class="listas listas--disco listas--secundario-3">
            <li>Hemorragia o sangrado vaginal anormal.</li>
            <li>Dolor o pesadez en pelvis.</li>
            <li>Aumento de volumen o sensibilidad en las piernas.</li>
            <li>Dolor de pecho.</li>
            <li>Dificultad para respirar.</li>
            <li>Cefalea Súbita e Intensa.</li>
            <li>Hormigueo y adormecimiento en rostro.</li>
            <li>Trastornos en la visión.</li>
          </ul>

          <p class="text text--justify">
            Los efectos secundarios comunes para las mujeres que reciben Terapia Hormonal con Modulares Selectivos de los Receptores de Estrógenos incluyen:
          </p>

          <ul class="listas listas--disco">
            <li>Sofocos.</li>
            <li>Sequedad vaginal.</li>
            <li>Cambios en sus períodos si aún no ha alcanzado la menopausia.</li>
            <li>Pérdida de interés en el sexo.</li>
            <li>Náusea.</li>
            <li>Cambios de humor.</li>
            <li>Fatiga.</li>
          </ul>

          <p class="text text--justify">
            Si experimenta algún signo de alarma o algún efecto secundario al tomar un medicamento consulte a su médico.
          </p>

          <ul class="listas listas--disco">
            <li>Antagonista del Receptor de Estrógeno.</li>
          </ul>
        </li>
      </ul>

      <p class="text text--justify">
        Se une al receptor de estrógeno del tejido mamario, por lo que impide la unión del estrógeno a la célula y  ésta no recibe las señales de crecimiento y proliferación. Además este medicamento disminuye la cantidad de receptores de estrógeno y modifican la estructura del mismo.  A este grupo pertenece el Fulvestrant  (nombre comercial Faslodex). El Faslodex se administra una vez por mes mediante una inyección en el músculo (intramuscular).
      </p>

      <div class="imagen imagen--verde" data-src="multimedia/vectores/imagen-2.3-herramientas-hormonoterapia.svg">
        <img src="https://i.ibb.co/C6kkKK0/imagen-2-3-herramientas.png" alt="">
      </div>
    </div>
HTML;

  // Botones de atrás y avanzar:
  $atras = <<<HTML
  <a href="?terapia-dirigida" class="navegar__enlace">
    <span>Terapia Dirigida</span>
    <span data-src="multimedia/vectores/atras.svg"></span>
  </a>
HTML;
    
    
  $avanzar = <<<HTML
  <a href="?cirugia" class="navegar__enlace">
    <span data-src="multimedia/vectores/adelante.svg"></span>
    <span>Cirugía</span>
  </a>
HTML;
  }