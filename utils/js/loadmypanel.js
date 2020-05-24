function loadtickets(){
    var loadticket = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postloadticket:loadticket
    },function(responseloadticket){
        $("#contenttickets").html(responseloadticket);
    });
}

function loadticketsasginados(){
    var loadticket2 = "activate";
    $.post("../controllers/loadmypanelcont.php",{
        postloadticket2:loadticket2
    },function(responseloadticket2){
        $("#contenttickets").html(responseloadticket2);
    });
}