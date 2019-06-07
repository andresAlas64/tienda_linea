<?php
    $titulo = 'Editar producto';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';

    $id = $_GET['id'];

    $consulta = consultaEditarProducto($id);

    function consultaEditarProducto($id) {
        include_once 'services/conexion.php';

        $query = "SELECT id, titulo, descripcion, precio FROM producto
        WHERE id = '$id'";

        $result = mysqli_query($con, $query);

        $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return [
            $fila['titulo'],
            $fila['descripcion'],
            $fila['precio'],
        ];
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4 color-gray">Editar producto</h2>
        </div>
    </div>
</div>
<!--  -->
<div class="container">
    <form action="services/editarProducto.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" aria-describedby="emailHelp" value="<?php echo rtrim($consulta[0])?>" placeholder="Edite el titulo del producto">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" name="precio" aria-describedby="emailHelp" value="<?php echo rtrim($consulta[2])?>" placeholder="Edite el precio del producto">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" aria-describedby="emailHelp" value="<?php echo rtrim($consulta[1])?>" placeholder="Edite la descripcion del producto">
                </div>
                <div class="form-group">
                    <label id="labelFile"><i class="fas fa-folder"></i> Edite el archivo
                        <input type="file" id="imagen" name="imagen" size="60" required>
                    </label> 
                </div>    
                <button type="submit" class="btn btn-color"><i class="fas fa-shopping-cart"></i> Editar producto</button>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'include/docCierre.php';
?>