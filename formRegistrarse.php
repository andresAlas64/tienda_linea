<?php
    $titulo = 'Registrarse';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <form action="services/insertarRegistro.php" method="POST" onsubmit="return validar();">
                <div class="container">
                    <h5 class="color-gray mb-4">Formulario de registro</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required maxlength="60">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección" required maxlength="255">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono" required maxlength="20">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo" required maxlength="255">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese la contraseña" required maxlength="255">
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
?>