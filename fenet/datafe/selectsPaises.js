
$(document).ready(function(){

    // Evento que se ejecuta al seleccionar un pais
    $("#pais").click(function(){
        // Hacemos una peticion ajax al archivo selects_ajax.php pasando
        // como parametro el pais seleccionado en el formulario
        // Esperamos recibir un json con dos valores:
        //  result [0|1]
        //  contenido => codigo html a poner en el <select> de la ciudad
        $.post("selects_ajax2.php", {pais:$(this).val()}, function(data){
            $("#estado").html(data.contenido)
            if(data.result==1)
            {
                $("#estado").removeAttr('disabled');
            }else{
                $("#estado").attr('disabled','disabled');
            }
        }, "json");
    });

});
