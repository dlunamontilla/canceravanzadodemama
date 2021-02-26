<?php
  $DLTools = __DIR__ . "/php/DLTools/index.php";
  include $DLTools;

  if ( !isset($pdo) ) {
    echo "\$pdo se encuentra ausente";
    echo "<br>$DLTools";
    echo "\$Datos: $Datos";
    exit;
  }

  include __DIR__ . "/php/panel/index.php";
?>

<!DOCTYPE html>
<html lang="es-VE">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

  <base href="../">

  <!-- Favicon -->
  <link rel="shortcut icon" href="multimedia/favicon/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="multimedia/favicon/favicon.png" type="image/png" />

   <!-- Estilos -->
   <link rel="stylesheet" href="vista/css/style.css?v22" />

   <!-- JavaScript -->
  <script src="app/js/main.js?v22" type="module" defer></script>
</head>
<body class="main-admin">
  <div class="marca-de-agua"></div>
  <main id="app"><?= $content;?></main>
</body>
</html>