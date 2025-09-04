<?php
function ejercicio5(){

    include_once __DIR__ .  '/../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();
    $string = "No hay nada que mostrar";
    if ($metodo) {
        
        
        
        $string = "Su tipo de estudios es " . $metodo['estudios'] . ", y su sexo " . $metodo['sexo'];
        
    }
    return $string;
}
?>