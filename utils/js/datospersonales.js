function valubi() {
    var valorubi = $("#txtubicacion").val();
    var activateubicacion = "activate";
    if (valorubi === "") {
        $("#smsubicacion").html("");
    } else {
        $.post("../controllers/datospersonales.php", {
            requestvalorubi: valorubi,
            requestactivateubicacion: activateubicacion
        }, function (responseubicacion) {
            $("#smsubicacion").html(responseubicacion);

        });
    }
}

function valdescripcion() {
    var valordescripcion = $("#txtdescripcion").val();
    var activatedescripcion = "activate";

    if (valordescripcion === "") {
        $("#smspresentacion").html("");
    } else {
        var canttotaldescripcion = valordescripcion.length;
        $.post("../controllers/datospersonales.php", {
            requestactivatedescripcion: activatedescripcion,
            requestcanttotaldescripcion: canttotaldescripcion
        }, function (resposnedescripcion) {
            $("#smspresentacion").html(resposnedescripcion);
        });
    }
}

function registrar() {
    var ubicacion = $("#iddistrito option:selected").val();
    var txtname = $("#txtname").val();
    var txtdireccion = $("#txtdireccion").val();
    var txtdescripcion = $("#txtdescripcion").val();
    var txtcel = $("#txtcel").val();
    //Tomar valor del selected
    var selectedtipodoc = $("#selectedtipodoc option:selected").val();
    var txtnrodoc = $("#txtnrodni").val();
    var txtubicacion = $("#txtubicacion").val();
    // smserrordatospersonales
    var activateregister = "activate";
    var sespecialidad = $("#selectespecialidad").val();
    $.post("../controllers/datospersonales.php", {
        requestactivateregister: activateregister,
        requesttxtname: txtname,
        requesttxtdireccion: txtdireccion,
        requesttxtdescripcion: txtdescripcion,
        requesttxtcel: txtcel,
        requesttxtnrodoc: txtnrodoc,
        requestselectedtipodoc: selectedtipodoc,
        requesttxtubicacion: txtubicacion,
        requestsespecialidad:sespecialidad,
        requestubicacion:ubicacion
    }, function (responseregister) {

        
        if(responseregister.trim() === "0"){
            alert("Hubo un error de actualización , intentalo más tarde");
            $("#smserrordatospersonales").html("<code>Intentalo más tarde</code>");
        }else if(responseregister.trim() === "1"){
               var validateupdateusers = "Activate";
       
            $.post("../controllers/gsolicitudcontroller.php", {
                postvalidateupdateusers: validateupdateusers
            }, function (responseupdateusers) {
            if (responseupdateusers == 1) {
                mostrarvar = "activate";
    
                $.post("../controllers/datospersonales.php", {
                    requestmostrar: mostrarvar
                },function(responseeditar){
                   
                alert("Tu información fue actualizada! , Gracias.");
                $("#datospersonales").html(responseeditar);
                });
            }
        });
        }else{
            $("#smserrordatospersonales").html(responseregister);
        }
      
     
       
    });


}
// Cargar Si existe o no la data
function mostrarformfirst(){
    
    var activatefirstform = "activate";
    $.post("../controllers/datospersonales.php",{
        requestactivateformfirst:activatefirstform
    },function(responseformfirs){
        $("#datospersonales").html(responseformfirs);

    });
}

function cancelar(){
    var cancelarform = "activate";
    $.post("../controllers/datospersonales.php",{
        requestmostrar:cancelarform
    },function(responsecancelar){
        $("#datospersonales").html(responsecancelar);
    });
}



