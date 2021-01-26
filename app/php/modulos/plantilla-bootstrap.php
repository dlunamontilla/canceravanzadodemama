<?php

$bootstrap =<<<HTML
<div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="multimedia/img/carousel/imagen1.jpeg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        <div class="carousel-caption-text">
            <div class="carousel-icon icon">
                <a href="?nosotros" data-src="multimedia/vectores/fuveicam.svg"></a>
                <a href="https://www.uicc.org/" target="_blank" data-src="multimedia/vectores/uicc.svg"></a>
                <a href="https://www.abcglobalalliance.org/" target="_blank" data-src="multimedia/vectores/abcglobalalliance.svg"></a>
            </div>
        </div>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="multimedia/img/carousel/imagen2.jpeg" class="d-block w-100" alt="...">
     
      <div class="carousel-caption d-none d-md-block">
        <a class="carousel-enlace" href="?quimioterapia" class="carousel-caption-text">
            <h5>¿Cómo empezar?</h5>
            <p>Obtenga Información para la Toma de Decisiones</p>
        </a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="multimedia/img/carousel/imagen3.jpeg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        <a class="carousel-enlace" href="?conozca" class="carousel-caption-text">
            <h5>Seguir es el plan</h5>
            <p>Conozca sus Opciones y Metas de Tratamiento en el Cáncer Avanzado de Mama</p>
        </a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="multimedia/img/carousel/imagen4.jpeg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
          <a class="carousel-enlace" href="?paciente" class="carousel-caption-text">
            <h5>Saber Vivir</h5>
            <p>Navegue a través de su enfermedad</p>
          </a>
      </div>
    </div>
  </div>

  <!-- Avanzar y retroceder -->
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden" data-src="multimedia/vectores/atras.svg">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden" data-src="multimedia/vectores/adelante.svg">Next</span>
  </a>
</div>
HTML;