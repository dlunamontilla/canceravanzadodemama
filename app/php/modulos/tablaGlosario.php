<?php
  if ( !isset($get) )
    exit;


  $texto = <<<EOT

EOT;

  $tablaGlosario = <<<HTML
<table class="glosario__tabla">

  <thead>
    <tr>
      <th>TÉRMINO</th>
      <th>SIGNIFICADO</th>
    </tr>
  </thead>

  <tbody>
    <!-- Ablación o supresión ovárica -->
    <tr>
      <td>ABLACIÓN O SUPRESIÓN OVÁRICA</td>
      <td>
        Consiste en la detención o disminución de la cantidad de estrógeno producido en los ovarios. Los tipos de tratamiento que producen ablación ovárica incluyen la cirugía u ooforectomía bilateral, la radioterapia y la quimioterapia.También se conoce con el nombre de supresión ovárica.
      </td>
    </tr>

    <!-- AC -->
    <tr>
      <td>AC</td>

      <td>
        Abreviatura del régimen de quimioterapia combinada de Adriamicina y Ciclofosfamida.
      </td>
    </tr>

    <!-- ACELERADORES LINEALES -->
    <tr>
      <td>ACELERADORES LINEALES</td>

      <td>
        Son aparatos que se usan para dar radioterapia de haz externo a enfermos con cáncer. También se conoce como acelerador lineal de megavoltaje (MEV) o linac.
      </td>
    </tr>

    <!-- ADENOPATÍA -->
    <tr>
      <td>ADENOPATÍA</td>
      <td>Ganglios linfáticos aumentados de tamaño.</td>
    </tr>

    <!-- ADYUVANTE -->
    <tr>
      <td>ADYUVANTE</td>
      <td>Tratamiento oncológico que acompaña a uno previo considerado como el principal, con el fin de disminuir la probabilidad de recaída.</td>
    </tr>

    <!-- ALOPECIA -->
    <tr>
      <td>ALOPECIA</td>
      <td>Falta o pérdida del cabello en las partes del cuerpo donde éste se encuentra habitualmente.</td>
    </tr>

    <!-- ANGIOGÉNESIS -->
    <tr>
      <td>ANGIOGÉNESIS</td>
      <td>Proceso fisiológico que consiste en la formación de vasos sanguíneos nuevos a partir de los vasos preexistentes, es un proceso fundamental en el crecimiento tumoral de las células cancerosas.</td>
    </tr>

    <!-- ANTRACICLINAS -->
    <tr>
      <td>ANTRACICLINAS</td>
      <td>Agente antitumoral que se une al ADN de las células cancerosas, interfiriendo con su replicación, transcripción y reparación, provocándoles la muerte. A este grupo pertenece la adriamicina (doxorubicina) y su derivado, epirubicina; daunomicina (daunorubicina) y su derivado, idarubicina.</td>
    </tr>

    <!-- APOYO PSICOSOCIAL -->
    <tr>
      <td>APOYO PSICOSOCIAL</td>
      <td>Es el apoyo que se brinda para ayudar a satisfacer las necesidades emocionales, sociales y espirituales de las pacientes y sus cuidadores. Existen diversos tipos de apoyo psicosocial entre estos la orientación, la educación, los grupos de soporte y el apoyo espiritual.</td>
    </tr>

    <!-- AROMATERAPIA -->
    <tr>
      <td>AROMATERAPIA</td>
      <td>Tipo de terapia alternativa para la que se usan aceites vegetales que desprenden aromas (olores) agradables para promover la relajación y dar una sensación de bienestar.</td>
    </tr>
  </tbody>
</table>
HTML;