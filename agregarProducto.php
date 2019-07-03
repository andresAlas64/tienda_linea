<?php
    $titulo = 'Agregar producto';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3 color-gray">Agregar producto</h2>
            </div>
        </div>
    </div>

    <div class="contentProducto">
    <div class="container mb-5">
        <form action="services/insertarProducto.php" method="POST" enctype="multipart/form-data" onsubmit="return validarProducto();">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" placeholder="Ingrese el titulo del producto" autofocus maxlength="60">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" aria-describedby="emailHelp" placeholder="Ingrese el precio del producto">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control" name="categoria" id="categoria">
                            <option value="" disabled selected>Buscar por categoría</option>
                            <option value="1">Tecnologia</option>
                            <option value="2">Programas</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripcion del producto" maxlength="140"></textarea>
                    </div>
                    <div class="form-group">
                        <label id="labelFile"><i class="fas fa-folder"></i> Ingrese el archivo
                            <input type="file" id="imagen" name="imagen" size="60">
                        </label> 
                    </div>    
                    <button type="submit" class="btn btn-color"><i class="fas fa-shopping-cart"></i> Agregar producto</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>