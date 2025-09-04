<?php
function ejercicio6(){

    $string = "No hay nada que mostrar";
    include_once __DIR__ .  '/../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();
    if ($metodo) {
        
        
        
        $string = "La cantidad de deportes que practican son " . count($metodo['deportes']);
        
    } 
    return $string;
}
?>