<?php
    $titulo = 'Tienda';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<!-- Carousel -->
<div class="bd-example mb-5">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen uno"> <!-- img 1600x600 -->
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen dos">
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen tres">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Carousel -->

<!-- Titulo -->
<div id="productos" class="container">
    <h1 class="mb-3 color-gray">Catalogo de productos</h1>
</div>
<!-- Titulo -->

<!-- Buscador -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2" id="buscarProducto" maxlength="60">
        <div class="input-group-append">
          <button class="btn btn-color" type="button" id="button-addon2" onclick="limpiar();">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Buscador -->

<!-- Card -->
<div id="tablaProductos" class='mb-4'></div>
<!-- Card -->
<div class="mb-4"></div>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>