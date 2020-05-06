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

function registrar(codtipuser) {

    // Rutas para verificar si que tipo de usuario es / Cliente o Especialista GO
    if (codtipuser == 1) {
        var rutaclienteorespecialistago = "../controllers/registroclient.php";
    } else if (codtipuser == 2) {
        var rutaclienteorespecialistago = "../controllers/registroclient.php";
    }
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
        requestcodtipuser: codtipuser,
        requestactivate: activate
    }, function (responseregisterclient) {
        if (responseregisterclient == 1) {
            // Si la sesión existe se va a crear una nueva ventana para que inicie sesión.
            var activatesesionexist = "activate";
            $.post(rutaclienteorespecialistago, {
                requestactivatesesionexist: activatesesionexist
            }, function (responsesesionexiste) {
                // Depende el usuario va a redireccionar ya que se tiene diferentes rutas
                if (codtipuser == 1) {
                    $("#gopc").html(responsesesionexiste);
                } else if (codtipuser == 2) {
                    alert("Ya tienes cuenta - Te vamos a redireccionar");
                    $(location).attr('href', "login.php");
                }


            });

        } else if (responseregisterclient == 2) {
            // Si no existe la cuenta , se va a insertar y se realizara la siguiente vista
            var activatesesionnotexist = "activate";
            $.post(rutaclienteorespecialistago, {
                requestactivatesesionnotexist: activatesesionnotexist
            }, function (responsesesionnotexiste) {
      

                if (codtipuser == 1) {
                    // Ruta para cliente GO
                    alert("Ahora Eres un Cliente - Inicia tu Sesión")
                    $(location).attr('href', "login.php");
                    // $("#gopc").html(responsesesionnotexiste);
                }else if(codtipuser == 2) {
                    // Ruta para Especialista GO
                    alert("Ahora Eres un Especialista GO - Inicia tu Sesión")
                    $(location).attr('href', "login.php");
                    
                }

            });



        } else {
            $("#alertval").html(responseregisterclient);
        }

    });
}