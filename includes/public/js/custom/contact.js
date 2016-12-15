/**
 * Created by mariocue on 15/12/2016.
 */

$(document).ready(function () {
    $('#contactForm').submit(function(){
        $('#mensaje_servidor').slideUp();
        $.ajax({
            url: "contacto/sendMessage",
            type: "POST",
            cache: false,
            data: $('#contactForm').serialize(),
            dataType: 'json',
            async: false,
            success: function (data) {
                $('#mensaje_servidor').html('El mensaje fue enviado correctamente');
                $('#mensaje_servidor').slideDown();
                $('#id_mensaje').val('');
                $('#id_email').val('');
                $('#id_nombre').val('');
                $('#id_telefono').val('');
            }
        });
        return false;
    });
});