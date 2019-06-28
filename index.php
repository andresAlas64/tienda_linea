<?php
  $titulo = 'Tienda';
  
  include_once 'include/docDeclaracion.php';
  include_once 'include/navbar.php';
?>
<div class="hero-image mb-5">
  <div class="hero-text">
    <div class="container">
      <div class="col-md-6">
        <h1>Tecnología avanzada para tus necesidades</h1>
        <p>Desde 1998 desarrollando software</p>
      </div>
    </div>
  </div>
</div>
<div id="productos" class="container">
  <h1 class="mb-3 color-gray">Catálogo de productos</h1>
</div>
<div class="container mb-5">
  <div class="row">
    <div class="col-md-9 mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2" id="buscarProducto" maxlength="60">
        <div class="input-group-append">
          <button class="btn btn-color" type="button" id="button-addon2" onclick="limpiar();">Limpiar</button>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <select class="form-control" name="categoria" id="categoria" onchange="mostrarSeleccion();">
          <option value="" disabled selected>Buscar por categoría</option>
          <option value="1">Tecnologia</option>
          <option value="2">Programas</option>
        </select>
      </div>
    </div>
  </div>
</div>
<div id="tablaProductos" class='mb-4'></div>
<?php
  include_once 'include/docCierre.php';
  include_once 'include/footer.php';
?>