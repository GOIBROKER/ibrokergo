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
        // Validar si el usuario registro sus datos personales
        var verifyregistro = "Activate";
        $.post("../controllers/frontcontactarespec.php",{
          postverifyregistro:verifyregistro
        },function(vuserreg){
            if(vuserreg == 1){
              var requestmodal = "activate";
              $.post("../controllers/frontcontactarespec.php",{
                postmodal:requestmodal,
                postcodespecialist:codespecialist
              },function(responsemodal){
                $("#informcontac").html(responsemodal);
              });
            $("#modalcontacespe").modal("show");
            }
            if(vuserreg == 0){
              var activatere = "activate";
             
              $.post("../controllers/modules.php",{
                registeruser:activatere
              },function(responseregister){
                $("#moduleregisteruser").html(responseregister);
                
              });
              $("#modalregiterdata").modal("show");
                
                
            }

        });
    }
});

}

function registercont(){
  var actiateregister = "activate";
  var txtlastname = $("#txtlastname").val();
  var slstdocumento = $("#slstdocumento option:selected").val();
  var txtnrodocumento = $("#txtnrodocumento").val();
  var txtubicaciond = $("#txtubicacion").val();
  var txtdirecciond = $("#txtdirecciond").val();
  var slstipodoc = $("#slstipodoc option:selected").val();
  var txtareades = $("#txtareades").val();
  var nrowhatsapp = $("#nrowhatsapp").val();

$.post("../controllers/modules.php",{
  pactiateregister:actiateregister,
  ptxtlastname:txtlastname,
  pslstdocumento:slstdocumento,
  ptxtnrodocumento:txtnrodocumento,
  ptxtubicaciond:txtubicaciond,
  ptxtdirecciond:txtdirecciond,
  pslstipodoc:slstipodoc,
  ptxtareades:txtareades,
  pnrowhatsapp:nrowhatsapp
},function(responsere){

  var filtrado = responsere.trim();
 
  if(filtrado === "1"){
    
    $("#modalregiterdata").modal("hide");
    $("#modalwarning2").modal("show");
  }else{
    
    $("#msmerrorge").html(responsere);
  }
  
});
}

function detval(){
 var dato = $("#txtareades").val();
 if(dato === ""){
  $("#smsdetalle").html("");
 }else{
   var actdetalle = "activate";
   $.post("../controllers/modules.php",{
     pactdetalle:actdetalle,
     pdato:dato
   },function(resva){
    $("#smsdetalle").html(resva);
   });
   
 }
}

