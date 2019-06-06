<?php
    $titulo = 'Agregar producto';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4 color-gray">Agregar producto</h2>
        </div>
    </div>
</div>

<div class="container">
    <form action="services/insertarProducto.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" aria-describedby="emailHelp" placeholder="Ingrese el titulo del producto">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" name="precio" aria-describedby="emailHelp" placeholder="Ingrese el precio del producto">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingrese la descripcion del producto"></textarea>
                </div>
                <!--<div class="form-group">
                    <input type="file" id="imagen" name="imagen">
                </div>-->
                <div class="form-group">
                    <label id="labelFile"> Ingrese el archivo
                        <input type="file" id="imagen" name="imagen" size="60">
                    </label> 
                </div>    
                <!--<a href="#" class="btn btn-color"><i class="fas fa-shopping-cart"></i> Agregar producto</a>-->
                <!--<button id="agregarProducto" class="btn btn-color"><i class="fas fa-shopping-cart"></i> Agregar producto</button>-->
                <!--<input type="submit" class="btn btn-color" value="Agregar producto">-->
                <button type="submit" class="btn btn-color"><i class="fas fa-shopping-cart"></i> Agregar producto</button>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'include/docCierre.php';
?>