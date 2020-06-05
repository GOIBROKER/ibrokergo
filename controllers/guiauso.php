<?php
session_start();
if(!empty($_POST['postactivategu'])){


    
echo "<div class='card mb-3'>";
if($_SESSION['tipouser'] == 2){
echo "<center><img src='frontend/assets/img/missolespsmall.png' class='card-img-top' alt='...'></center>";
}
if($_SESSION['tipouser'] == 1){
    echo "<center><img src='frontend/assets/img/missolclismall.png' class='card-img-top' alt='...'></center>";
    }
echo "<div class='card-body'>";
echo "<h4 class='card-title'><strong>¿Como Gestionar tu solicitudes?</strong></h4>";
echo "<p class='card-text'>Hola, seré tu guia en la plataforma <strong>BrokerGo!.</strong> Cualquier otra duda puedes escribirnos a <strong>contacto@brokergo.com.pe</strong></p>";
echo "<p class='card-text'><small class='text-muted'>Gracias por usar BrokerGo!</small></p>";


echo "<div class='nav-tabs-custom'>";
echo "<ul class='nav nav-tabs'>";
echo "<li class='active'><a href='#tab_1' data-toggle='tab' aria-expanded='true'>He generado Trabajo</a></li>";
if($_SESSION['tipouser'] == 2){
echo "<li class=''><a href='#tab_2' data-toggle='tab' aria-expanded='false'>Me han Generado Trabajo</a></li>";
echo "<li class=''><a href='#tab_3' data-toggle='tab' aria-expanded='false'>Finaliza tu Trabajo</a></li>";
}
echo "<li class='pull-right'><a href='#' class='text-muted'><i class='fa fa-gear'></i></a></li>";
echo "</ul>";
echo "<div class='tab-content'>";
echo "<div class='tab-pane active' id='tab_1'>";
echo "<b><strong>1.- He generado Trabajo</strong></b>";
echo "<p>Esta opción te mostrará las <strong><code>solicitudes pendientes</strong></code> de atender que has solicitado para un <strong><code>especialista.</strong></code></p>";
echo "<b><strong>2.- Terminar Solicitud </strong></b>";
echo "<p><strong><code>Debes terminar la solicitud</strong></code> , una vez el <strong><code>especialista te atienda</strong></code>.Es muy <strong><code>importante</strong></code> este paso.</p>";
echo "<center><img src='frontend/assets/img/tsolicitud.png' class='card-img-top' alt='...'></center>";
echo "</div>";
if($_SESSION['tipouser'] == 2){
echo "<div class='tab-pane' id='tab_2'>";
echo "<b><strong>1.- Me han Generado Trabajo</strong></b>";
echo "<p>Encontraras las solicitudes de varios clientes que esperan tu atención.</p>";
echo "<b><strong>2.- ¿Como finalizo mis pendientes?</strong></b>";
echo "<p>Necesitas la <strong><code>conformidad de tu cliente</code></strong> para que puedas cerrarlo.</p>";
echo "<b><strong>3.- Conformidad del cliente</strong></b>";
echo "<p>Luego que el cliente te brinde su <strong><code>conformidad </code></strong> podrás cerrar tu solicitud en la opción <code><strong>Finalizar tu Trabajo</strong></code>.</p>";
echo "</div>";
echo "<div class='tab-pane' id='tab_3'>";
echo "<b><strong>1.- Concluir servicio</strong></b>";
echo "<p>Aqui encontrarás las solicitudes que ya fueron  <strong><code>aceptadas por tu cliente </strong></code></p>";
echo "<b><strong>2.- Finalizar mi trabajo</strong></b>";
echo "<p>Debes de darle en  <strong><code>concluir servicio </strong></code> para que tu <strong><code>puntuación de calidad se muestre en la web</code></strong></p>";
echo "<center><img src='frontend/assets/img/concluirserv.png' class='card-img-top' alt='...'></center>";
echo "<b><strong>3.- Mi Puntuación</strong></b>";
echo "<p>Recuerda <code><strong>cerrar todos tus pendientes</strong></code> , para subir tu puntuación y asi aparecer en mis preferidos en la web</code></strong></p>";
echo "</div>";
}
echo "</div>";
echo "</div>";

echo "</div>";
echo "</div>";

   
}

?>