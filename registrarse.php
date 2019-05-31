<?php
    $titulo = 'Registrarse';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
    include_once 'services/conexion.php';

    //$mensaje = '';

    /*if(!empty($_POST['nombre']) && !empty($_POST['direccion']) && !empty($_POST['telefono']) &&  !empty($_POST['correo']) && !empty($_POST['contrasena']) && !empty($_POST['id_rol'])) {
        $query = "INSERT INTO usuario (nombre, telefono, direccion, correo, clave, id_rol)
        VALUES (:nombre, :telefono, :direccion, :correo, :clave, :id_rol)";

        $stmt = $con -> prepare($query);

        $stmt -> bindParam(':nombre', $_POST['nombre']);
        $stmt -> bindParam(':direccion', $_POST['direccion']);
        $stmt -> bindParam(':telefono', $_POST['telefono']);
        $stmt -> bindParam(':correo', $_POST['correo']);

        $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
        $stmt -> bindParam(':clave', $password);

        $stmt -> bindParam(':id_rol', $_POST['id_rol']);

        if($stmt -> execute()) {
            $mensaje = 'Se agrego el usuario';
        }else {
            $mensaje = 'Se produjo un error';
        }
    }*/

    /*agregar($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['contrasena'], $_POST['id_rol']);

    function agregar($nombre, $direccion, $telefono, $correo, $contrasena, $id_rol) {
        include_once 'services/conexion.php';

        $query = "INSERT INTO usuario (nombre, telefono, direccion, correo, clave, id_rol)
        VALUES ('$nombre', '$telefono', '$direccion', '$correo', '$contrasena', '$id_rol')";

        echo $result = mysqli_query($con, $query);
    }*/
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form-registro">
                <div class="container">
                    <h5 class="color-gray mb-4">Formulario de registro</h5>
                    <div class="row">
                        <!--<input type="hidden" name="id_rol" value="<?php echo $id_rol = 2;?>">-->
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
                    <button type="button" id="btn-registro" class="btn btn-color"><i class="fas fa-sign-in-alt"></i> Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once 'include/docCierre.php';
    //include_once 'include/footer.php';
?>