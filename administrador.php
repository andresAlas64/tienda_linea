<?php
    $titulo = 'Panel de administrador';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
    include_once 'services/conexion.php';

    session_start();

    $administrador = $_SESSION['administrador'];

    //echo 'El administrador es: ' . $administrador;

    $query = "SELECT * FROM administrador";

    $result = mysqli_query($con, $query);

    echo "<div class='container'>
        <div class='row'>
            <div class='col-md-12'>
            <a href='agregarAdmin.php' class='btn btn-color mb-3'><i class='fas fa-user-plus'></i> Agregar admin</a>
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th class='text-center'>Editar</th>
                                <th class='text-center'>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($fila = mysqli_fetch_array($result)) {
                            echo "<tr>
                                <td>".$fila['correo']."</td>
                                <td>".$fila['clave']."</td>
                                <td class='text-center'><a href='#' class='btn btn-color btn-sm'><i class='fas fa-pencil-alt'></i></a></td>
                                <td class='text-center'><a href='#' class='btn btn-color btn-sm'><i class='fas fa-trash-alt'></i></a></td>
                            </tr>";
                        }
                        echo "</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>";

    include_once 'include/docCierre.php';
?>
