function validateemail(valor) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var respuestavalidate = expr.test(valor);
    if (!respuestavalidate) {
        var mensaje = "false";
    } else {
        var mensaje = "true";
    }
    return mensaje;
}

function registrar() {

    // Rutas 

    var rutaclienteorespecialistago = "../controllers/registroclient.php";

    // Rutas para verificar si que tipo de usuario es / Cliente o Especialista GO

    // Recibir valores de especialidad.php or register.php
    var varpass1 = $("#txtpass1").val();
    var varpass2 = $("#txtpass2").val();
    var inputemail = $("#txtemail").val();
    var inputnombres = $("#txtnombrescompletos").val();
    var activate = "activate";
    // if($("#checkterm").attr('checked')){
    //     alert('seleccionado');
    // }

    var condiciones = $("#aceptar").is(":checked");

    if (!condiciones) {
        var mensajecondiciones = "false";
    } else {
        var mensajecondiciones = "true";
    }

    //Va a realizar la validación del Email
    var valemail = validateemail(inputemail);

    $.post(rutaclienteorespecialistago, {
        resquestvalemail: valemail,
        requestpass1: varpass1,
        requestpass2: varpass2,
        requestvalcondiciones: mensajecondiciones,
        requestemail: inputemail,
        requestnamecompleto: inputnombres,
        requestactivate: activate
    }, function (responseregisterclient) {
        
        if (responseregisterclient == 1) {
            alert("Ya tienes cuenta - Te vamos a redireccionar");
            $(location).attr('href', "logingo.php");
        }else if(responseregisterclient == 69){
            alert("Error desconocido , intentalo más tarde");
        }else if(responseregisterclient == 3){
            alert("Error desconocido , intentalo más tarde");
        }else if(responseregisterclient == 4){
            alert("Se ha enviado un correo de Activación al Email Indicado , revisar tambien en tu bandeja de Spam en caso no te llegue ir a Recuperar Contraseña");
            $(location).attr('href', "logingo.php");
        }else{
            $("#alertval").html(responseregisterclient);
        }
    });
           }