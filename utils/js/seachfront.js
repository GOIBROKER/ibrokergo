function searchfront(){
    var valboton = $("#btntable").val();
    var tuser = $("#tuser option:selected").val();
    var identipservicio = $("#identipservicio option:selected").val();
    var txtsearchbar = $("#txtsearchbar").val();
    var activatesearch = "activate";
    var txtnameespe = $("#txtnameespe").val();
    // var validateubic = $("#txtdep").val();
    //Registros de ubicación
    
    var iddepartamento = $("#iddepartamento option:selected").val();
    var idprovincia = $("#idprovincia option:selected").val();
    var iddistrito = $("#iddistrito option:selected").val();
    alert(iddepartamento+idprovincia+iddistrito+txtnameespe);
    $.post("../controllers/resultableespecialista.php",{   
        
        postactivatesearch : activatesearch,
        posttuser : tuser,
        postidentipservicio : identipservicio,
        // postvalidateubic : validateubic,
        posttxtsearchbar : txtsearchbar,
        postiddepartamento:iddepartamento,
        postidprovincia:idprovincia,
        postiddistrito:iddistrito,
        posttxtnameespe:txtnameespe
    },function(responsectivatesearch){
        alert(responsectivatesearch);
        $("#resultable").html(responsectivatesearch);
        $("#buttonbusq").html("<button type='button' class='btn btn-danger btn-lg btn-block' id='btntable' value='1' onclick='addtable()'><i class='fas fa-wifi pr-2' aria-hidden='true'></i>Cargar más resultados</button>");
        
    });




}