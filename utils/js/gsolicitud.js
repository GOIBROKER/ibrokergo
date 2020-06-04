$(document).ready(function () {

    // código de Cabecera
    var activategsolicitud = "activate";
    $.post("../controllers/gsolicitudcontroller.php", {
        resquestactivategsolicitud: activategsolicitud
    }, function (responsegsolicitud) {
        $("#dvicabecera").html(responsegsolicitud);
    });
});

function editarservicio() {
    var destroy = "destroysolicitud";
    $.post("../controllers/gsolicitudcontroller.php", {
        resquestdestroygsolicitud: destroy
    }, function (responsegsolicitud2) {
        $("#dvicabecera").html(responsegsolicitud2);
    });
}

function generarsolicitud() {

    var idcombogsolicitud = $("#cmbtrabajo option:selected").val();
    var idcmbrangoprecio = $("#cmbrangoprecio option:selected").val();
    var optionservice = $('input:radio[name=tservicio]:checked').val();
    var txttitulo = $("#txttitulo").val();
    var txtareadata = $("#txtdescripcion2").val();
    var activateregistrar = "Activate";
    $.post("../controllers/gsolicitudcontroller.php", {
        requestidcombogsolicitud: idcombogsolicitud,
        requestidcmbrangoprecio: idcmbrangoprecio,
        requestoptionservice: optionservice,
        requesttxttitulo: txttitulo,
        requesttxtareadata: txtareadata,
        requestactivateregistrar: activateregistrar
    }, function (responseregistrarsol) {

        if (responseregistrarsol == 1) {

            $("#modalnotexistdata").modal("show");

            var activatefirstform = "activate";
            $.post("../controllers/datospersonales.php", {
                requestactivateformfirst: activatefirstform
            }, function (responseformfirs) {
                $("#informationgopublic").html(responseformfirs);
                // Deshabilitar Boton Actualizay y Cancelar del formulario registro de datos.

                $("#btnactualizar").hide();
                $('#btncancelar').hide();
            });
        } else if (responseregistrarsol == 2) {
            // Levantar show de información y la vez cargar la información de aceptación del usuario

            var previapublicacion = "Activate";

            $.post("../controllers/gsolicitudcontroller.php", {
                postpreviapublicacion: previapublicacion

            }, function (responsepreviapublicacion) {

                $("#visualizarinfotrabajo").html(responsepreviapublicacion);
            });

            $("#modalconfirmardata").modal("show");

        } else {
            // Si no existe entrara en error
            $("#infoerrorsolicitud").html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h4><i class='icon fa fa-ban'></i>" + responseregistrarsol + "</h4>Hi! - Corrige los siguientes errores</div>");
        }
    });


}

function registrardata() {
    //Activar el registro   
    
    registrar();
    
    var validateupdateusers ="activate";
    $.post("../controllers/gsolicitudcontroller.php",{
        postvalidateupdateusers:validateupdateusers
    },function(response){
        
        if(response == 1){
            var validateupdateusers = "activate";
            $.post("../controllers/gsolicitudcontroller.php",{
                postvalidateupdateusers:validateupdateusers 
            },function(responseval2){
              
                if(responseval2 == 0){
                    alert("Grabado incorrectamente");
                }else if(responseval2 == 1){
                    $("#modalnotexistdata").modal("hide");
                    alert("Grabado Correctamente");
                    
                }
                
            });
        }
    });
  

}

function valdescripcionpublic() {
    var txtdescripcion = $("#txtdescripcion2").val();
    if (txtdescripcion === "") {
        $("#informedpublic").html();
    } else {

        var activatetxtdescripcion = "activate";
        $.post("../controllers/gsolicitudcontroller.php", {
            postactivado: activatetxtdescripcion,
            posttxtdescripcion: txtdescripcion
        }, function (respondeactivate) {

            $("#informedpublic").html(respondeactivate);
        });

    }

}

function valtitulopublic() {
    var txttitulo = $("#txttitulo").val();
    if (txttitulo === "") {
        $("#informedpublictitulo").html();
    } else {
        var activatevaltxttitulo = "activate";
        $.post("../controllers/gsolicitudcontroller.php", {
            postactivadotitulo: activatevaltxttitulo,
            posttxttitulo: txttitulo
        }, function (responseactivatevaltxttitulo) {
            $("#informedpublictitulo").html(responseactivatevaltxttitulo);
        });

    }
}

function formclose() {
    var activateclose = "activate";
    $.post("../controllers/gsolicitudcontroller.php", {
        postactivateclose: activateclose
    }, function (responseactivateclose) {

    });
}

function registerpublicacion() {
    var registrarinfo = "Activate";
    $.post("../controllers/gsolicitudcontroller.php", {
        varregistrarinfo: registrarinfo
    }, function (responseregistrarinfo) {

        if (responseregistrarinfo == 3) {
            formclose();
            $("#modalconfirmardata").modal("hide");
            alert("Grabado correctamente");
        }
    });
}

