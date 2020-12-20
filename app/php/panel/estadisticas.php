<?php

if ( !isset($get) )
  exit;


$estadisticas = <<<HTML
<div class="panel__estadisticas">
  <h1>Estadística de la encuesta</h1>
  <hr>

  <div class="panel__descargas">
    <a href="app/#">
      <span data-src="multimedia/vectores/descargas.svg"></span>
      <span>Descargar CSV</span>
    </a>

    <a href="app/">
      <span data-src="multimedia/vectores/volver-2.svg"></span>
      <span>Volver</span>
    </a>
  </div>

  <div class="preguntas">
    <div class="preguntas__item">
      <p>¿Cree usted que el cáncer de mama es curable?</p>
      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cree usted que el diagnóstico temprano del cáncer de mama contribuye a su curación?</p>
      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Tiene usted un familiar o conocido con diagnóstico de cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿De dónde recibe información del cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Familia o amigos:</div>
        <div class="opciones__item">Médicos:</div>
        <div class="opciones__item">Medios de comunicación:</div>
        <div class="opciones__item">Redes Sociales:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿El cáncer de mama se produce después de un golpe o traumatismo en la mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿El cáncer de mama es la principal causa de cáncer en el país?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cuál de los siguientes factores aumentan el riesgo de cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Edad:</div>
        <div class="opciones__item">Familiares con cáncer:</div>
        <div class="opciones__item">Fumar:</div>
        <div class="opciones__item">Obesidad:</div>
        <div class="opciones__item">Embarazo antes de los 30 años.</div>
        <div class="opciones__item">Tomar pastillas anticonceptivas:</div>
        <div class="opciones__item">Tomar hormonas durante la menopausia:</div>
        <div class="opciones__item">No dar lactancia materna:</div>
        <div class="opciones__item">Ninguna de las anteriores:</div>
        <div class="opciones__item">Todas las anteriores:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿El cáncer de mama generalmente produe dolor?</p>

      <div class="opciones opciones--none">
        <div class="opciones opciones__item">Si.</div>
        <div class="opciones opciones__item">No.</div>
        <div class="opciones opciones__item">No sabe.</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Todo cambio en la apariencia de la piel y el pezón puede ser cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cualquier drenaje a través del pezón puede estar vinculado a cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si:</div>
        <div class="opciones__item">No:</div>
        <div class="opciones__item">No sabe:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>Con respecto al diagnóstico de cáncer de mama ¿Cuál es el mejor método para la detección temprana?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Autoexamen:</div>
        <div class="opciones__item">Consulta Médica:</div>
        <div class="opciones__item">Mamografía:</div>
        <div class="opciones__item">Todas las anteriores:</div>
        <div class="opciones__item">Ninguno:</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cada cuánto tiempo se realiza el autoexamen?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Pocos días antes de la menstruación.</div>
        <div class="opciones__item">Pocos días después de la menstruación.</div>
        <div class="opciones__item">Con la menstruación.</div>
        <div class="opciones__item">Sin tiempo específico.</div>
        <div class="opciones__item">No sabe.</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cuándo debe comenzar a realizarse la mamografía?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">35 años.</div>
        <div class="opciones__item">40 años.</div>
        <div class="opciones__item">45 años.</div>
        <div class="opciones__item">No sabe.</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cada cuánto tiempo debe esperar para realizar el siguiente control mamográfico?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Una vez al año.</div>
        <div class="opciones__item">Cada ses (06) meses.</div>
        <div class="opciones__item">Cada dos (02) años.</div>
        <div class="opciones__item">No sabe.</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>En caso de no contar con seguro médico que cubra la mamografía, ¿costearía usted este estudio?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Si</div>
        <div class="opciones__item">No</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿Cuál es el método que usa usted para la detección precoz del cáncer de mama?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Autoexamen.</div>
        <div class="opciones__item">Consulta Médica.</div>
        <div class="opciones__item">Mamografía.</div>
        <div class="opciones__item">Todas las anteriores.</div>
        <div class="opciones__item">Ninguno.</div>
      </div>
    </div>
    
    <div class="preguntas__item">
      <p>¿A cuál consulta asiste usted para un control mamario?</p>

      <div class="opciones opciones--none">
        <div class="opciones__item">Mastología.</div>
        <div class="opciones__item">Ginecología.</div>
        <div class="opciones__item">Medicina Interna.</div>
        <div class="opciones__item">Ninguna.</div>
      </div>
    </div>
  </div>
</div>
HTML;