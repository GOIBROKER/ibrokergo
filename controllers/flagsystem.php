<?php
class flags{

    // Aqui debe ser de 12 - Ya que en la busqueda de resultados sera en bloque de 12 registros - Para la prueba colocaremo 2
    // Este Flag es de configuración del sistema para mostrar el total del resultado de la busqueda que realiza el usuario en el front
    // flag se usa en resultableespecialista.php
    public $flagviewregister = 2;

    // Flag que controla los tamaños de las caja de texto y los nombres
    // Caja de titulo
    public $tamanotitulos = 20;
    // Caja de descripcion
    public $tamanodescripcion = 56;
    // Flags estados tickets
    public $flagestaabierto = 1;
    public $flagestacerrado = 2;
    public $flagestintermedio = 3;
    public $flagestanotconcluido=4;
    //FIN Flags estados tickets
    // Tipo e contratacion si es directo o Subasta D = Directo / S=SUBASTA
    public $flagdirecto="D";
    public $flagsubasta="S";

    // Tipo de usuarios 1 = Cliente | 2 = Especialista
    public $flaguserclie = 1;
    public $flaguserespe = 2;

    // nropuntadefecto si esque no fue concluido el servicio por x razones
    public $puntaje = 0;

    // Flag de tipo de error de servicio no concluido
    public $flagnoconcluido = 9; // Por defecto 
}
?>