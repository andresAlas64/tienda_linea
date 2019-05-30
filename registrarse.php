<?php
    $titulo = 'Registrarse';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="container">
                    <h5 class="color-gray mb-4">Formulario de registro</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telefono</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el telefono">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el correo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la contraseña">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-color">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once 'include/docCierre.php';
    //include_once 'include/footer.php';
?>