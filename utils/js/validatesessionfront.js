function validatesession(codespecialist){


var activatecontaces = "activate";
$.post("../controllers/frontcontactarespec.php",{
    postactivatecontaces:activatecontaces,
    postcodespecialist:codespecialist
},function(responsecodespecialist){
      if(responsecodespecialist == 0){
          $("#centralModalWarningDemo").modal("show");
      }
      if(responsecodespecialist == 1){
        $("#modalcontacespe").modal("show");
    }
});

}