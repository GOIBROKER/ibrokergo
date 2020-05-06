$(document).ready(function(){

    // código de Cabecera
    var activategsolicitud = "activate";
    $.post("../controllers/gsolicitudcontroller.php",{
        resquestactivategsolicitud:activategsolicitud
    },function(responsegsolicitud){
        $("#dvicabecera").html(responsegsolicitud);
    });
});

function editarservicio(){
    var destroy="destroysolicitud";
    $.post("../controllers/gsolicitudcontroller.php",{
        resquestdestroygsolicitud:destroy
    },function(responsegsolicitud2){
        $("#dvicabecera").html(responsegsolicitud2);
    });
}

function generarsolicitud(){

        var idcombogsolicitud = $("#cmbtrabajo option:selected").val();
        var idcmbrangoprecio = $("#cmbrangoprecio option:selected").val();
        var optionservice = $('input:radio[name=tservicio]:checked').val();
        var txttitulo = $("#txttitulo").val();
        var txtareadata = $("#txtdescripcion2").val();
        var activateregistrar = "Activate";
        $.post("../controllers/gsolicitudcontroller.php",{
            requestidcombogsolicitud:idcombogsolicitud,
            requestidcmbrangoprecio:idcmbrangoprecio,
            requestoptionservice:optionservice,
            requesttxttitulo:txttitulo,
            requesttxtareadata:txtareadata,
            requestactivateregistrar: activateregistrar
        }, function (responseregistrarsol) {
           
            if (responseregistrarsol==1) {
           
                $("#modalnotexistdata").modal("show");
                var activatefirstform = "activate";
                $.post("../controllers/datospersonales.php",{
                    requestactivateformfirst:activatefirstform
                },function(responseformfirs){
                    $("#informationgopublic").html(responseformfirs);
                    // Deshabilitar Boton Actualizay y Cancelar del formulario registro de datos.
                    
                    $("#btnactualizar").hide();
                    $('#btncancelar').hide();
                });
            }else if(responseregistrarsol==2){
                // Levantar show de información
                $("#modalconfirmardata").modal("show");
             
            }else{
                // Si no existe entrara en error
                $("#infoerrorsolicitud").html(responseregistrarsol);
            }
        });
        

}

function registrardata(){
    //Activar el registro   
    registrar();
    //$_SESSION['flagactivador']  -- La sesión se va activar cuando la función registrar registre correctamente.

    // Vamos a consultar la sesión y si existe se cerrara el formulario y se activara el registro de informacion

    var activateflagactivador = "Activate";
    $.post("../controllers/gsolicitudcontroller.php",{
        postvalidateupdateusers:activateflagactivador
    },function(responseflagactivador){
        alert(responseflagactivador);
       
        if(responseflagactivador == 1){
        // Condicional si parece 1 en la respuesta , significa que grabo correctamente , se debe cerrar formulario 
        // y proceder con el registro de la solicitud de PC
        $("#modalnotexistdata").modal("hide");
        // generarsolicitud();
        }else if(responseflagactivador == 0){
         // Si aparece cero , se debe mantener el form de registro abierto
         alert ("Grabado Incorrectamente");
        }
        

    });
}

function valdescripcionpublic(){
    var txtdescripcion = $("#txtdescripcion2").val();
    if(txtdescripcion === ""){
        $("#informedpublic").html();
    }else{
   
        var activatetxtdescripcion = "activate";
        $.post("../controllers/gsolicitudcontroller.php",{
            postactivado:activatetxtdescripcion,
            posttxtdescripcion:txtdescripcion
        },function(respondeactivate){
           
            $("#informedpublic").html(respondeactivate);
        }); 
        
    }
    
}

function valtitulopublic(){
    var txttitulo = $("#txttitulo").val();
    if(txttitulo === ""){
        $("#informedpublictitulo").html();
    }else{
        var activatevaltxttitulo = "activate";
        $.post("../controllers/gsolicitudcontroller.php",{
            postactivadotitulo:activatevaltxttitulo,
            posttxttitulo:txttitulo
        },function(responseactivatevaltxttitulo){
            $("#informedpublictitulo").html(responseactivatevaltxttitulo);
        });
        
    }
}

