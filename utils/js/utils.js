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
function buscarserv(){
  
   
        var busqserv = "activate";
        var cabecerainicial = "2.- ¿De.: ?";
        $.post("../controllers/utilsfront.php",{
            responsebusqserv:busqserv,
            postcabecerainicial:cabecerainicial
        },function(responsebusqserv3){
           
            $("#resutcomboserv").html(responsebusqserv3);
        });
    
    
    
}

