function searchfront(){
    var valboton = $("#btntable").val();
    var tuser = $("#tuser option:selected").val();
    var identipservicio = $("#identipservicio option:selected").val();
    var txtsearchbar = $("#txtsearchbar").val();
    var activatesearch = "activate";
    var validateubic = $("#txtdep").val();
    $.post("../controllers/resultableespecialista.php",{   
        postactivatesearch : activatesearch,
        posttuser : tuser,
        postidentipservicio : identipservicio,
        postvalidateubic : validateubic,
        posttxtsearchbar : txtsearchbar
    },function(responsectivatesearch){



        $("#resultable").html(responsectivatesearch);
        $("#buttonbusq").html("<button type='button' class='btn btn-danger btn-lg btn-block' id='btntable' value='1' onclick='addtable()'><i class='fas fa-wifi pr-2' aria-hidden='true'></i>Cargar más resultados</button>");
    });




}