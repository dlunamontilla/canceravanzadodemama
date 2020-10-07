<?php
$buscador = "";

$buscador = <<<HTML
<div class="buscador flex__item">
  <form action="#" class="buscar" method="get">
    <label class="label label--buscar">
      <input type="search" name="buscar" id="buscar" placeholder="Buscar..." autocomplete="off"
        class="input input--buscar">
      <button class="button button--buscar" data-src="multimedia/vectores/buscar.svg"></button>
    </label>
  </form>
</div>
HTML;
