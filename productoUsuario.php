<?php
    $titulo = 'Productos';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
?>
<!-- Titulo -->
<div id="productos" class="container">
    <h2 class="mb-3 color-gray">Agregar productos al carrito</h2>
</div>
<!-- Titulo -->

<!-- Buscador -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2" id="buscarProductoUsuario" maxlength="60">
        <div class="input-group-append">
          <button class="btn btn-color" type="button" id="button-addon2" onclick="limpiarUsuario();">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Buscador -->
<div id="tablaProductoUsuario" class='mb-4'></div>
<!--<div class="mb-4"></div>-->
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>