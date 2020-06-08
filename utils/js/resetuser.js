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

function tokenreset(){

    var tremail = $("#tremail").val();
    var txtoken = $("#txtoken").val();
    var actitoken = "acti";
    $.post("../controllers/resetuser.php",{
        posttremail:tremail,
        posttxtoken:txtoken,
        postactitoken:actitoken
    },function(responsetoken){
        if(responsetoken == 2){
            $("#divtoken").html("<h5 class='card-title'>Ingresa <strong>Tu Nueva Contraseña!</strong></h5><p class='card-text'>Favor de no actualizar o salir de la página o <strong>Tendrás que solicitar nuevamente el token!.</strong></p><label>Password.:</label><input type='password' class='form-control' id='mypass1' aria-describedby='hint' placeholder='Contraseña'><label>Repetir Contraseña.:</label><input type='password' class='form-control' id='mypass2' aria-describedby='hint' placeholder='Repetir Contraseña'><input type='checkbox' onclick='myFunctionpass()'><strong> Mostrar contraseña</strong><div id='iderrortoken'></div></br><a href='#' onclick='resetpass()' class='btn btn-primary'>Resetar Contraseña</a>");
        }else{
            $("#iderrortoken").html(responsetoken);
        }
        
    });
}

function resetpass(){
   
    var mypass1 = $("#mypass1").val();
    var mypass2 = $("#mypass2").val();
    var actpass = "activado";
    $.post("../controllers/resetuser.php",{
        postactpass:actpass,
        postmypass1:mypass1,
        postmypass2:mypass2
    },function(responsereset){
        if(responsereset == 0){
            $("#iderrortoken").html("Ocurrio un error , intentarlo más tarde");
        }else if(responsereset == 1){
            alert("Gracias , se actualizo tu contraseña - Inicia Sesión");
            $(location).attr('href',"logingo.php");
        }
        
    });
}

function reenviaremail(){

    var txtemail = $("#txtemail").val();
    var activateemail ="ac";
    $.post("../controllers/resetuser.php",{
        postactivateemail:activateemail,
        posttxtemail:txtemail
    },function(responseactivateemail){
        $("#iderroruser").html(responseactivateemail);
    });
}