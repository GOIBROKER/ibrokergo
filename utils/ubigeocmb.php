
<!-- jQuery library -->




<select id='iddepartamento' class='form-control'>
</select>

<select id="idprovincia" class="form-control">
<option value=''>Escoge la provincia...</option>
</select>

<select id="iddistrito" class="form-control">
<option value=''>Escoge el Distrito...</option>
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
            $("#iddistrito").html("<option value=''>Escoge el Distrito...</option>");
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