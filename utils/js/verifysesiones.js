function borrarsesiones(){
    var activatedeletesesion = "activate";
    $.post("../controllers/deletesesionesfront.php",{
        postactivatedeletesesion:activatedeletesesion
    },function(responseactivatedeletesesion){
        // Enviar mensajes de elimina de sesiones.
    });
}