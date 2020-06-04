function registerservice(){
    var activaterse = "activate";
    titulo = $("#txttitulo").val();
    detalle = $("#txtdetalleob").val();
    select = $("#selectserv option:selected").val();

    $.post("../controllers/gsolicitudfront.php",{
        postactivaterse:activaterse,
        posttitulo:titulo,
        postdetalle:detalle,
        postselect:select
    },function(responseregister){

        if(responseregister.trim() === "1"){
            $("#modalcontacespe").modal("hide");
            $("#modalwhatsapp").modal("show");
        }
        $("#errorfrontcontact").html(responseregister);
    });
}

function contactarwha(){
    var activatewha = "activate";
    $.post("../controllers/modules.php",{
        postactivatewha:activatewha
    },function(responseactivatewha){
        $(location).attr('href',responseactivatewha);
        
    });


}