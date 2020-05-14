function searchfront(){
    
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
    });




}