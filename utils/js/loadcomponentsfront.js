function loadbuttons(){
 
    var buttonactuvar = "activate";

    $.post("../controllers/loadcomponentsfront.php",{
        postbuttonactuvar:buttonactuvar
    },function(responsecodespecialist){
        $("#buttonsapert").append(responsecodespecialist);

    });   
}

function loadmenub(){
    var loadb='iniciars';
    $.post("../controllers/loadcomponentsfront.php",{
        postloadb:loadb
    },function(responseload){
     $("#iniciarse").html(responseload);
    });
}