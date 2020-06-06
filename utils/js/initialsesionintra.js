//
function iniciarsesion(){
    var email = $("#txtemail").val();
    var password = $("#txtpassword").val()
    var activatelogin ="Activate";
   
   $.post("../controllers/login.php",{
       requestactivatelogin:activatelogin,
       requestemail:email,
       requestpassword:password
   },function(responselogin){
    
    if(responselogin==1){
        $(location).attr('href',"miespacio.php");
    }else if(responselogin==2){

        $(location).attr('href',"miespacio.php");
    }else{
        $("#alertsesion").html("<p class='text-primary'>"+responselogin+"</p>");
    }
        
   });

}
//