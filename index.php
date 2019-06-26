<?php
    $titulo = 'Tienda';
  
    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<!-- Hero -->
<div class="hero-image mb-5">
  <div class="hero-text">
    <div class="container">
      <h1>Somos Tecnosoft</h1>
      <p>And I'm a Photographer</p>
    </div>
  </div>
</div>
<!-- Hero -->

<!-- Titulo -->
<div id="productos" class="container">
  <h1 class="mb-3 color-gray">Catálogo de productos</h1>
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
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>