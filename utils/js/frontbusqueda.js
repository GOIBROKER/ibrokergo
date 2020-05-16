function addtable() {
    var activatetable = "Activate";
    $.post("../controllers/resultableespecialista.php", {
      postactivatetable: activatetable
    }, function(responseactivatetable) {
      $("#resultable").append(responseactivatetable);
     
    });

  }

//   $(window).on("beforeunload", function(e) {
//     return '¿Cancelar todo?';
// });