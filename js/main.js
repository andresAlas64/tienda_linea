$(document).ready(function() {
    $('#btn-registro').click(function() {
        var nombre = $('#nombre').val();
        var direccion = $('#direccion').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var contrasena = $('#contrasena').val();

        insertarRegistro(nombre, direccion, telefono, correo, contrasena);
    }); 

    $('#btn-admin').click(function() {
        var correoAdmin = $('#correoAdmin').val();
        var contrasenaAdmin = $('#contrasenaAdmin').val();

        insertarAdmin(correoAdmin, contrasenaAdmin);
    });
});

function insertarRegistro(nombre, direccion, telefono, correo, contrasena) {
    var parametros = {
        nombre: nombre,
        direccion: direccion,
        telefono: telefono,
        correo: correo,
        contrasena: contrasena
    };
    
    $.ajax({
        type: 'POST',
        url: 'services/insertarRegistro.php',
        data: parametros,
        success: function(response) {
            if(response == 1) {
                alertify.success('Agregado con exito');
            }else {
                alertify.error('Fallo el servidor');
            }
        }
    });
}

function insertarAdmin(correoAdmin, contrasenaAdmin) {
    var parametros = {
        correoAdmin: correoAdmin,
        contrasenaAdmin: contrasenaAdmin
    };

    $.ajax({
        type: 'POST',
        url: 'services/insertarAdmin.php',
        data: parametros,
        success: function(response) {
            if(response == 1) {
                alertify.success('Agregado con exito');
            }else {
                alertify.error('Fallo el servidor');
            }
        }
    });
}