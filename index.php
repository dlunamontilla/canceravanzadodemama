<?php
include __DIR__ . "/app/php/index.php";

$protocolo = new DLProtocolo([
  "canceravanzadodemama.com",
  "www.canceravanzadodemama.com"
]);

$protocolo -> https();
?>

<!DOCTYPE html>
<html lang="es-VE" prefix="og: https://ogp.me/ns#">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cáncer Avanzado de Mama</title>

  <!-- Palabras claves -->
  <meta name="keywords" content="Cáncer Avanzado de Mama, Cáncer, Mama">

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
  <link rel="stylesheet" href="vista/css/style.css?v6" />

  <!-- jQuery -->
  <!--
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	-->

  <!-- JS, Popper.js, and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->

  <!-- JavaScript -->
  <script src="app/js/main.js?v2" type="module" defer></script>
</head>

<body>
  <main id="app">
    <header class="header header--fondo">
      <div class="border border--home">
        <nav class="navigation flex flex--between default">
          <div class="logotipo logotipo--header flex__item" data-src="multimedia/vectores/logotipo.svg"></div>

          <ul class="menu flex__item">
            <li class="menu__item"><a class="menu__enlace flex" href="/">Inicio</a></li>
            <li class="menu__item"><a class="menu__enlace flex" href="?nosotros">Nosotros</a></li>
            <li class="menu__item"><a class="menu__enlace flex" href="?herramientas_desiciones">Herramientas para la
                toma de desiciones</a></li>
            <li class="menu__item"><a class="menu__enlace flex" href="?conozca_su_enfermedad">Conozca su enfermedad</a>
            </li>
            <li class="menu__item"><a class="menu__enlace flex" href="?la_paciente_y_su_proceso">La paciente y su
                proceso</a></li>
          </ul>

          <div class="buscador flex__item">
            <form action="#" class="buscar" method="get">
              <label class="label label--buscar">
                <input type="search" name="buscar" id="buscar" placeholder="Buscar..." autocomplete="off"
                  class="input input--buscar">
                <button class="button button--buscar" data-src="multimedia/vectores/buscar.svg"></button>
              </label>
            </form>
          </div>
        </nav>
      </div>

      <div class="portada">
        <div class="decoration decoration--left" data-src="multimedia/vectores/decoracion-izquierda.svg"></div>

        <div class="presentacion">
          <div class="presentacion__item presentacion__item--left">
            <div class="logotipo logotipo--presentacion" data-src="multimedia/vectores/logotipo-slogan.svg"></div>

            <!-- Iconos -->
            <div class="icon">
              <div class="icon__item icon__item--left">
                <a href="#" target="_blank" data-src="multimedia/vectores/fuveicam.svg"></a>
              </div>

              <div class="icon__item icon__item--center">
                <a href="#" target="_blank" data-src="multimedia/vectores/uicc.svg"></a>
              </div>

              <div class="icon__item">
                <a href="https://www.abcglobalalliance.org/" target="_blank" data-src="multimedia/vectores/abcglobalalliance.svg"></a>
              </div>
            </div>
          </div>

          <div class="presentacion__item presentacion__item--right" data-src="multimedia/vectores/seno-foto.svg"></div>
        </div>

      </div>
    </header>

    <div class="content"></div>
  </main>
</body>

</html>