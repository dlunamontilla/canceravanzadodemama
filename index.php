<?php
include __DIR__ . "/app/php/DLTools/index.php";
include __DIR__ . "/app/php/modulos/index.php";

$protocolo = new DLProtocolo([
  "canceravanzadodemama.com",
  "www.canceravanzadodemama.com"
]);

$protocolo -> https();

$idNavigation = $idLogotipo = "";

if ( count($_GET) < 1 ) {
  $idNavigation = "nav-header";
  $idLogotipo = "logotipo-header";
}

?>

<!DOCTYPE html>
<html lang="es-VE" prefix="og: https://ogp.me/ns#">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>

  <!-- Palabras claves -->
  <meta name="keywords" content="Cáncer Avanzado de Mama, Cáncer, Mama, Cáncer de Mama, tratamientos">
  <meta name="description" content="Facilitar a las pacientes con cáncer de mama a desarrollar una mejor perspectiva de su enfermedad, aportándoles las herramientas necesarias para la toma de decisiones.">
  
  <!-- Protocolo OpenGraph -->
  <meta property="og:title" content="Cáncer Avanzado de Mama" />
  <meta property="og:description"
    content="Facilitar a las pacientes con cáncer de mama a desarrollar una mejor perspectiva de su enfermedad, aportándoles las herramientas necesarias para la toma de decisiones." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://canceravanzadodemama.com/">
  <meta property="og:image" content="https://canceravanzadodemama.com/multimedia/fotos/FotoSparc1.jpg" />
  <!-- <meta property="og:video" content="https://canceravanzadodemama.com/video" /> -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="multimedia/favicon/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="multimedia/favicon/favicon.png" type="image/png" />

  <!-- Fuentes tipográficas -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">  -->

  <!-- Bootstrap CDN CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->


  <!-- Estilos -->
  <link rel="stylesheet" href="vista/css/style.css?v17" />

  <!-- jQuery -->
  <!--
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	-->

  <!-- JS, Popper.js, and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->

  <!-- JavaScript -->
  <script src="app/js/main.js?v9" type="module" defer></script>
</head>

<body>
  <main id="app">
    <header class="header header--fondo">
      <div<?= $border; ?>>
        <nav class="navigation flex flex--between default" id="<?= $idNavigation; ?>">
          <div id="<?= $idLogotipo; ?>" class="logotipo logotipo--header flex__item">
            <a href="./" data-src="multimedia/vectores/logotipo.svg"></a>
          </div>

          <?= $menu; ?>
          <?= $buscador; ?>
        </nav>
      </div>
    </header>

    <div class="content<?= $classContent; ?>">
      <?= $cabecera; ?>
      <?= $content; ?>
      <?= $portada; ?>
      <?= $recursos; ?>
    </div>

    <?= $footer; ?>
  </main>
</body>

</html>