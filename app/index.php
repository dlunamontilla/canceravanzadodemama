<?php
  include __DIR__ . "/php/DLTools/index.php";
  include __DIR__ . "/php/panel/index.php";
?>

<!DOCTYPE html>
<html lang="es-VE">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../multimedia/favicon/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="../multimedia/favicon/favicon.png" type="image/png" />

   <!-- Estilos -->
   <link rel="stylesheet" href="../vista/css/style.css?v20" />

   <!-- JavaScript -->
  <script src="js/main.js?v20" type="module" defer></script>
</head>
<body>
  <main id="app">
    <div class="panel">
      <header class="panel__header"></header>
    </div>
  </main>
</body>
</html>