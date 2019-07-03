<?php
    $titulo = 'Panel de administrador';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
    include_once 'services/conexion.php';

    session_start();

    $administrador = $_SESSION['administrador'];

    //$query = "SELECT correo FROM administrador";

    $query = "SELECT nombre, correo, telefono, direccion FROM administrador";

    $result = mysqli_query($con, $query);

    echo "<div class='content'><div class='container mb-5'>
        <div class='row'>
            <div class='col-md-12'>
            <a href='agregarAdmin.php' class='btn btn-color mb-3'><i class='fas fa-user-plus'></i> Agregar administrador</a>
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($fila = mysqli_fetch_array($result)) {
                            echo "<tr>
                                <td>".$fila['nombre']."</td>
                                <td>".$fila['direccion']."</td>
                                <td>".$fila['telefono']."</td>
                                <td>".$fila['correo']."</td>
                            </tr>";
                        }
                        echo "</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></div>";

    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>
