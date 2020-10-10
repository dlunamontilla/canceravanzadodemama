<?php

$enlace = [
  "inicio" => "/",
  "nosotros" => "?nosotros",
  "herramientas" => "?herramientas",
  "conozca" => "?conozca",
  "paciente" => "?paciente"
];

$enlace = (object) $enlace;

$menu = "";

$menuHOME = <<<HTML
<ul class="menu flex__item">
  <li class="menu__item"><a class="menu__enlace flex" href="$enlace->inicio">Inicio - m</a></li>
  <li class="menu__item">
    <a class="menu__enlace flex" href="$enlace->nosotros">
      <div data-src=""></div>
      Nosotros - m
    </a>
  </li>

  <li class="menu__item"><a class="menu__enlace flex" href="$enlace->herramientas">Herramientas para la
      toma de desiciones - m</a></li>
  <li class="menu__item"><a class="menu__enlace flex" href="$enlace->conozca">Conozca su enfermedad - m</a>
  </li>
  <li class="menu__item"><a class="menu__enlace flex" href="$enlace->paciente">La paciente y su
      proceso - m</a></li>
</ul>
HTML;

$menu = $menuHOME;

if (count($_GET) < 1) {
  $menuHOME = <<<HTML
  <ul class="menu flex__item">
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