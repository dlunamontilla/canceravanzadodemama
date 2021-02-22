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
  <!-- <meta property="og:image" content="https://canceravanzadodemama.com/multimedia/fotos/FotoSparc1.jpg" /> -->
  <!-- <meta property="og:video" content="https://canceravanzadodemama.com/video" /> -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="multimedia/favicon/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="multimedia/favicon/favicon.png" type="image/png" />

  <!-- Estilos -->
  <link rel="stylesheet" href="vista/css/style.css?b18" />

  <!-- Buscador de Google  -->
  <script async src="https://cse.google.com/cse.js?cx=152873a5aa8cc05c3"></script>
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- JavaScript -->
  <script src="app/js/main.js?b18" type="module" defer></script>

  <!-- Búsqueda con Google -->
  <script src="app/js/busqueda.js?v1" type="module" defer></script>
</head>

<body<?= $overflow; ?>>
  <!-- Plantilla para la ventana Modal -->
  <template id="plantillaModal"><?= $plantillaModal; ?></template>

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

  <?= $ventanasModales; ?>

  <!-- Ventana de búsqueda -->
  <div class="busqueda busqueda--none" id="busqueda-modal">
    <div class="busqueda__content" id="contenedor-busqueda">
      <div class="gcse-search"></div>
    </div>
  </div>
</body>

</html>