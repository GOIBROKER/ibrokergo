function welcome(){
    var welcome = "activate";
    $.post("../controllers/bienvenidase.php",{
        postwelcome:welcome
    },function(responsewelcome){
     
        if(responsewelcome == 1){
           $("#id01").modal("show"); 
        }
        
        
    });
}