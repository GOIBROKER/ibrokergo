function ruser(){
    //ideuser
    var truser = $("#truser").val();
    var activatereset ="ac";
    $.post("../controllers/resetuser.php",{
        postactivatereset:activatereset,
        posttruser:truser
    },function(responsereset){
        $("#ideuser").html(responsereset);
    });
}