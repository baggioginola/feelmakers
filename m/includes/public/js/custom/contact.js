/**
 * Created by mariocue on 15/12/2016.
 */

$(document).ready(function () {
    var form = $('#contactForm').submit(function(){
        $.ajax({
            url: "contacto/sendMessage",
            type: "POST",
            cache: false,
            data: $('#contactForm').serialize(),
            dataType: 'json',
            async: false,
            success: function (data) {
                console.log(data);
                if(data.status === 200){
                    form.trigger("reset");
                    bootbox.alert('Gracias por contactarnos');
                }
            }
        });
        return false;
    });
});