//
function menuindex(){
    var menui = "activate";
    $.post("../controllers/menudesingcontroller.php",{
        postmenui:menui
    },function(responsemenui){
        if(responsemenui == 1){
            $("#buttondos").text("Sesión Iniciada");
            $("#buttondos").attr("class","dropdown-menu");
            $("#buttondos").attr("aria-labelledby","navbarDropdown");
            $("#iniciarseid").hide();
            $("#buttondos").html("<a class='dropdown-item' href='miespacio.php' >Ir a Panel</a></br>");
            $("#buttondos").append("<a class='dropdown-item' href='../controllers/sessiondestroy.php' >Cerrar Sesión</a>");
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
    $("#btnbuscar").attr("href","");
    $("#btnbuscar").attr("onclick","location.href='index.php';");
    $("#buttondos").append("<a href='index.php' >Ir al Inicio</a>");
}
function menucompletes(){
    $("#buttondos").text("Ir al Inicio");
    $("#buttondos").attr("onclick","location.href='index.php';");
}
function menulogingo(){
    $("#btnbuscar").text("Ir al Inicio");
    $("#btnbuscar").removeAttr("onclick");
    $("#btnbuscar").attr("onclick","location.href='index.php';");
    $("#buttondos").html("<a href='registergo.php' >Registrate</a></br>");
    $("#buttondos").append("<a href='index.php' >Ir al Inicio</a>");
}

function registratemenu(){
    $("#buttondos").text("Ir al Inicio");
    $("#buttondos").attr("onclick","location.href='index.php';");
    // $("#buttondos").append("<a href='#' data-toggle='modal' data-target='#modalLRForm'>Ingresar</a>");
    $("#btnbuscar").hide();
}