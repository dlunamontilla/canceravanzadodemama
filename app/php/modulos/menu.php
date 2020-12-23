<?php

if ( ! isset($get) )
  exit;
  
$enlace = [
  "inicio" => "./",
  "nosotros" => "?nosotros",
  "herramientas" => "?herramientas",
  "conozca" => "?conozca",
  "paciente" => "?paciente"
];

$enlace = (object) $enlace;

$menu = "";
$border = "";

$selectInicio = $selectNosotros = $selectHerramientas = $selectConozca = $selectPaciente = "";

switch( true ) {
  case $get -> distribuirEnModulos( obtenerDatos($menuNosotros, "param") ):
    $selectNosotros = " menu__item--select";
    break;

  case $get -> distribuirEnModulos( obtenerDatos($menuHerramientas, "param") ):
    $selectHerramientas = " menu__item--select";
    break;

  case $get -> distribuirEnModulos( obtenerDatos($menuConozcaSuEnfermedad, "param") ):
    $selectConozca = " menu__item--select";
    break;

  case $get -> distribuirEnModulos( obtenerDatos($menuLaPaciente, "param") ):
    $selectPaciente = " menu__item--select";
    break;
}
// Menú predeterminado:
$menuHOME = <<<HTML
<ul class="menu menu--inner flex__item">
  <li class="menu__item menu__item--inner">
    <a class="menu__enlace menu__enlace--inner flex" href="$enlace->inicio">
      <div class="menu__icon" data-src="multimedia/vectores/inicio.svg"></div>
      <div class="menu__icon">Inicio</div>
    </a>
  </li>

  <li class="menu__item menu__item--inner$selectNosotros">
    <a class="menu__enlace menu__enlace--inner flex" href="$enlace->nosotros">
      <div class="menu__icon" data-src="multimedia/vectores/nosotros.svg"></div>
      <div class="menu__icon">Nosotros</div>
    </a>
  </li>

  <li class="menu__item menu__item--inner$selectHerramientas">
    <a class="menu__enlace menu__enlace--inner flex" href="$enlace->herramientas">
      <div class="menu__icon" data-src="multimedia/vectores/herramientas.svg"></div>
      <div class="menu__icon">Herramientas para la toma de desiciones</div>
    </a>
  </li>

  <li class="menu__item menu__item--inner$selectConozca">
    <a class="menu__enlace menu__enlace--inner flex" href="$enlace->conozca">
      <div class="menu__icon" data-src="multimedia/vectores/conozca-su-enfermedad.svg"></div>
      <div class="menu__icon">Conozca su enfermedad</div>
    </a>
  </li>

  <li class="menu__item menu__item--inner$selectPaciente">
    <a class="menu__enlace menu__enlace--inner flex" href="$enlace->paciente">
      <div class="menu__icon" data-src="multimedia/vectores/la-paciente.svg"></div>
      <div class="menu__icon">La paciente y su proceso</div>
    </a>
  </li>

</ul>
HTML;

$menu = $menuHOME;

if (count($_GET) < 1) {
  $border = " class=\"border border--home\"";

  $menuHOME = <<<HTML
  <ul class="menu menu--portada flex__item">
    <li class="menu__item"><a class="menu__enlace flex" href="$enlace->inicio">Inicio</a></li>
    <li class="menu__item"><a class="menu__enlace flex" href="$enlace->nosotros">Nosotros</a></li>
    <li class="menu__item"><a class="menu__enlace flex" href="$enlace->herramientas">Herramientas para la
        toma de desiciones</a></li>
    <li class="menu__item"><a class="menu__enlace flex" href="$enlace->conozca">Conozca su enfermedad</a>
    </li>
    <li class="menu__item"><a class="menu__enlace flex" href="$enlace->paciente">La paciente y su
        proceso</a></li>
  </ul>
HTML;

  $menu = $menuHOME;
}

// Menú para el pie de página:
$footerMenu = <<<HTML
<ul class="menu menu--vertical">
  <li class="menu__item"><a class="menu__enlace flex text--small" href="$enlace->inicio">Inicio</a></li>
  <li class="menu__item"><a class="menu__enlace flex text--small" href="$enlace->nosotros">Nosotros</a></li>
  <li class="menu__item"><a class="menu__enlace flex text--small" href="$enlace->herramientas">Herramientas para la
      toma de desiciones</a></li>
  <li class="menu__item"><a class="menu__enlace flex text--small" href="$enlace->conozca">Conozca su enfermedad</a>
  </li>
  <li class="menu__item"><a class="menu__enlace flex text--small" href="$enlace->paciente">La paciente y su
      proceso</a></li>
</ul>
HTML;