function menuindex(){
    var menui = "activate";
    $.post("../controllers/menudesingcontroller.php",{
        postmenui:menui
    },function(responsemenui){
        if(responsemenui == 1){
            $("#button2").text("Sesión Iniciada");
            $("#iniciarseid").hide();
            $("#buttondos").html("<a href='miespacio.php' >Ir a Panel</a>");
        }
        if(responsemenui == 0){
            // para más adelante  
        }
        // Si la sesión esta iniciada se cambiara el menú
    });
}

function menuregistergo(){
    $("#btnbuscar").text("Ir al Inicio");
    $("#btnbuscar").removeAttr("onclick");
    $("#btnbuscar").attr("onclick","location.href='index.php';");
}

function menulogingo(){
    $("#btnbuscar").text("Ir al Inicio");
    $("#btnbuscar").removeAttr("onclick");
    $("#btnbuscar").attr("onclick","location.href='index.php';");
    $("#buttondos").html("<a href='registergo.php' >Registrate</a>");
}

function registratemenu(){
    $("#btnbuscar").hide();
}