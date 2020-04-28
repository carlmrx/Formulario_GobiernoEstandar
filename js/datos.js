$(document).ready(function() {
    $('#ok').click(function() {

        if ($('#nombre').val() == "") {
            alert("Debes agregar un nombre");
            return false;
        } else if ($('#apellido').val() == "") {
            alert("Debes agregar un apellido");
            return false;
        } else if ($('#curp').val() == "") {
            alert("Debes agregar un curp");
            return false;
        } else if ($('#rfc').val() == "") {
            alert("Debes agregar un rfc");
            return false;
        } else if ($('#correo').val() == "") {
            alert("Debes agregar un coreo de contacto");
            return false;
        } else if ($('#telefono').val() == "") {
            alert("Debes agregar un telefono de contacto");
            return false;
        } else if ($('#texto').val() == "") {
            alert("Por favor da mas detalles de el problema para ayudarle");
            return false;
        }
        alert('todo en orden');
    });
});