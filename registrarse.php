<?php
    $titulo = 'Registrarse';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form-registro">
                <div class="container">
                    <h5 class="color-gray mb-4">Formulario de registro</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el telefono">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="text" class="form-control" id="correo" placeholder="Ingrese el correo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese la contraseña">
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn-registro" class="btn btn-color">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once 'include/docCierre.php';
?>