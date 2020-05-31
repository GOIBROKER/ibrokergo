$(document).ready(function(){
    // Pasará el parameto a content.php
    function validar(url){

        var rutainicial="../frames/"+url;
        $.post(rutainicial,{
        
        },function(responsepage){
            $("#contentfrm").html(responsepage);
        });
    }
    $('#newwork').click(function(event){
        var url= "generarsolicitud.php";

        validar(url);
    });
    $('#newespecialista').click(function(event){
        var url= "principal.php";
        validar(url);
    });

    $('#myprofile').click(function(event){
        var url= "perfil.php";
        validar(url);
        // Cargaremos el módulo de validación Inicial
        var mostrar="Activate";
        $.post("../controllers/datospersonales.php",{
            requestmostrar:mostrar
        },function(responsemostrar){
            $("#datospersonales").html(responsemostrar);
           
        });

         // Cargaremos el módulo de validación Inicial
    });
    
}


);
