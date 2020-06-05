function loadtickets(){

    var loadticket = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postloadticket:loadticket
    },function(responseloadticket){
        $("#contenttickets").html(responseloadticket);
    });
}

function loadticketsasginados(){
    var loadticket2 = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postloadticket2:loadticket2
    },function(responseloadticket2){
        $("#contenttickets").html(responseloadticket2);
    });
}

function terminarsol(codticket){
    var activarsol = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postactivarsol:activarsol,
        postsesionidhist:codticket
    },function(responseactivarsol){
        $("#datalleno").html(responseactivarsol);
        $("#idregister").modal("show");
    });
}

function secondconcluido(){
    var optionsol = $("#selectsol option:selected").val();
    if(optionsol==2){
        var finish = "activate";
        $.post("../controllers/loadmypanelcont.php",{
            postfinish:finish
        },function(responsefinish){
            $("#continueform").html(responsefinish);
            // cambiamos el nombre del boton y la funcion de grabar al boton continuar
            $("#btnext").html("Grabar");
            $("#btnext").attr("onclick","grabar()");
        });
     
    }
    if(optionsol==4){
        var noconcluido = "activate";
        $.post("../controllers/loadmypanelcont.php",{
            postnoconcluido:noconcluido
        },function(responsenconcluido){
            $("#continueform").html(responsenconcluido);
            $("#idregister").modal("show");
            $("#btnext").hide();
        });
    }
}

function grabar(){

    var puntaje1 = $('input:radio[name=estrellas]:checked').val();
    var puntaje2 = $('#slspuntaje2 option:selected').val();
    var comentario = $("#txtcomentario").val();
 
    var acti ="activate";
    if(puntaje1<1 || puntaje1>=6 || puntaje1 == null){
        $("#errorf1").html("<code>Tienes que indicar un puntaje válido de atención de especialista</code>");
    }else if(puntaje2<1 || puntaje2>=6 || puntaje2 == null){
        $("#errorf1").html("<code>Tienes que indicar un puntaje válido de protección anti Covid</code>");
    }else{
        $.post("../controllers/loadmypanelcont.php",{
            grabarflujo1:acti,
            postpuntaje1:puntaje1,
            postpuntaje2:puntaje2,
            postcomentario:comentario
        },function(responseacti){
            $("#errorf1").html("<code>"+responseacti+"</code>");
            if(responseacti == 1){
                alert("se registro correctamente");
                $("#idregister").modal("hide");
                loadtickets();
            }
            if(responseacti == 0){
                alert("Hubo un error, intentalo más tarde");
            }
        });
    }


}
function finalizartrabajo(){
    var loadticket3 = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postloadticket3:loadticket3
    },function(responseticket3){
        $("#contenttickets").html(responseticket3);
    });
}

function cerrarservicio(tscodigo){
    var closeservesp = "activate";

    $.post("../controllers/loadmypanelcont.php",{
        postcloseservesp:closeservesp,
        postcod:tscodigo
    },function(responseclose){
        $("#dataconcluirserv").html(responseclose);
        $("#idconcluirserv").modal("show");
    });
}

function terminarserv(){
    var alertac = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postalertac:alertac    
    },function(responsefinish){

        if(responsefinish == 1){
            alert("Registrado correctamente");
            $("#idconcluirserv").modal("hide");
            finalizartrabajo();
        }
        // Si fuera 0 más adelante se van a colocar mas acciones
    })
}
//
function ticketnottermin(){
    var grabarflujo2 = "finish";
    var coment = $("#txtcommen").val();
    var selecterrorserv = $("#selecterrorserv option:selected").val();
    $.post("../controllers/loadmypanelcont.php",{
        postgrabarflujo2:grabarflujo2,
        postcoment:coment,
        postselecterrorserv:selecterrorserv
    },function(responseflujo2){
        
        if(responseflujo2 == 1){
            alert("Haremos lo mejor posible para mejorar el servicio , Gracias");
            $("#idregister").modal("hide");
            loadtickets();
        }else if(responseflujo2 == 0){
            alert("Hubo un error en la insercción , Intentalo más tarde");
        }else {
            alert(responseflujo2);
        }

    });
}

function valsesionloadaviso(){
var activate = "activate";
$.post();
}