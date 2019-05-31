$(document).ready(function() {
    $('#btn-registro').click(function() {
        var nombre = $('#nombre').val();
        var direccion = $('#direccion').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var contrasena = $('#contrasena').val();

        insertarRegistro(nombre, direccion, telefono, correo, contrasena);
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