<?php
    $titulo = 'Productos';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/carrito.php';
?>
<div class="container">
  <?php if($mensaje != '') { ?>
    <div class="alert alert-color">
      Información del producto <br/>

      <?php 
        echo $mensaje;
      ?>
      
      <a href="mostrarCarrito.php" class="badge badge-color">Ver el carrito</a>
    </div>
  <?php } ?>
</div>
<!-- Titulo -->
<div id="productos" class="container">
    <h2 class="mb-3 color-gray">Agregar productos al carrito</h2>
</div>
<!-- Titulo -->
<!-- Buscador -->
<div class="container mb-5">
  <div class="row">
    <div class="col-md-9">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2" id="buscarProductoUsuario" maxlength="60">
        <div class="input-group-append">
          <button class="btn btn-color" type="button" id="button-addon2" onclick="limpiarUsuario();">Limpiar</button>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Buscar por categoría</option>
          <option>Tecnologia</option>
          <option>Programas</option>
        </select>
      </div>
    </div>

  </div>
</div>
<!-- Buscador -->
<div id="tablaProductoUsuario" class='mb-4'></div>
<?php
  include_once 'include/docCierre.php';
  include_once 'include/footer.php';
?>