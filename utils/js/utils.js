//Buscar en un input los departamentos
function buscardep(){

    var activacombo = "activate";
    $.post("../controllers/utilsfront.php",{
      requescmb:activacombo
    },function(restrequescmb){
      $("#resutcombo").html(restrequescmb);
    });
}
function buscardepbusq(valor){
    
    if(valor===""){
        $("#resultdep").html("");
    }else{
        var busqdep = "activate";
        $.post("../controllers/utilsfront.php",{
            responsebusqdep:busqdep,
            responsevalinput:valor
        },function(responsedep){
           
            $("#resultdep").html(responsedep);
        });
    }
    
    
}
function buscarbuscarserv(){
    
   
        var busqserv = "activate";
        $.post("../controllers/utilsfront.php",{
            responsebusqserv:busqserv,
        },function(responsebusqserv){
           
            $("#resutcomboserv").html(responsebusqserv);
        });
    
    
    
}

