<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




<select id='iddepartamento' class='form-control'>
</select>

<select id="idprovincia" class="form-control">
<option value='' id='' >Escoge la provincia...</option>
</select>

<select id="iddistrito" class="form-control">
<option value='' id='' >Escoge el Distrito...</option>
</select>


<script>
    $(document).ready(function() {
        loaddepartamento();
        departamentochange();
        provinciachange();
    })

    function loaddepartamento() {
        var bubigeo = "activate";
        $.post("moduleubigeo.php", {
            postbubigeo: bubigeo
        }, function(responseubigeo) {
            $("#iddepartamento").html(responseubigeo);
            
        });
    }

    function departamentochange() {
        
        $("#iddepartamento").change(function() {
        valprov = $("#iddepartamento option:selected").val();
        var activatevalprov = "activate";
        $.post("moduleubigeo.php",{
            postactivatevalprov:activatevalprov,
            postvalprov:valprov
        },function(responseprov){
            $("#idprovincia").html(responseprov);
            $("#iddistrito").html("<option>Escoge el Distrito...</option>");
        });
        });
    }

    function provinciachange(){
        $("#idprovincia").change(function(){
            valdistri = $("#idprovincia option:selected").val();
            valdistact = "activate";
            $.post("moduleubigeo.php",{
                postvaldistri:valdistri,
                postvaldistact:valdistact

            },function(responsevaldistri){
               
                $("#iddistrito").html(responsevaldistri);
            })
        });
    }
</script>