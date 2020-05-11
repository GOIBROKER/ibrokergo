function borrarsesiones(){
    var activatedeletesesion = "activate";
    $.post("../controllers/frontcontrollers/deletesesionesfront.php",{
        postactivatedeletesesion:activatedeletesesion
    },function(responseactivatedeletesesion){
        // Enviar mensajes de elimina de sesiones.
    });
}