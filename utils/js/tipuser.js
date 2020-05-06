function validate(){
    var activatetipuser="activate";
    $.post("../controllers/login.php",{
        requestactivatetipuser:activatetipuser
    },function(responsesesion){
        $(location).attr('href',"especialistago.php");
    });

}