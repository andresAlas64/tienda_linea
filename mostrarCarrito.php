<?php
    $titulo = 'Lista del carrito';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/config.php';
?>
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2 class='mb-4 color-gray'>Lista del carrito</h2>
        </div>
    </div>
</div>
<?php if(!empty($_SESSION['CARRITO'])) { ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th width="40%">Descripcion</th>
                            <th width="15%" class="text-center">Cantidad</th>
                            <th width="20%" class="text-center">Precio</th>
                            <th width="20%" class="text-center">Total</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0;?>
                        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) { ?>
                            <tr>
                                <td width="40%"><?php echo $producto['NOMBRE']?></td>
                                <td width="10%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
                                <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
                                <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
                                <td width="5%" class="text-center">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY);?>">
                                        <button type="submit" title="Eliminar producto del carrito" class="btn btn-color btn-sm" name="btnAccion" value="Eliminar"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php $total = $total + ($producto['PRECIO']*$producto['CANTIDAD']);?>    
                        <?php } ?>
                        <tr>
                            <td colspan="3" align="right"><h4>Total</h4></td>
                            <td align="right"><h4><?php echo number_format($total, 2);?></h4></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <form action="pagar.php" method="post">
                                    <div class="alert alert-color">
                                        <div class="form-group">
                                            <label for="my-input">Correo</label>
                                            <input id="email" name="email" class="form-control" type="email" placeholder="Ingrese su correo" required>
                                            <small id="emailHelp" class="form-text text-muted">
                                                Los productos se enviáran a este correo
                                            </small>
                                        </div>
                                        <button type="submit" name="btnAccion" class="btn btn-color btn-block" value="Proceder">
                                            Proceder a pagar
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
<?php }else { ?>
    <div class="container">
        <div class="alert alert-color">
            No hay productos en el carrito
        </div>
    </div>
<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'include/docCierre.php';
?>