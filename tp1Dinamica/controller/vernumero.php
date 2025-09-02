<?php
function ejercicio1(){


    include_once '../../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();
    $resp = "";
    if ($metodo['numerito']) {
        
        $numerito = $metodo['numerito'];
        
        if ($numerito > 0) {
            $resp = "Positivo";
        } elseif ($numerito == 0) {
            $resp = "Cero";
        } elseif ($numerito < 0) {
            $resp = "Negativo";
        }
        
    } else {
        echo "<h2>No se encontró numero</h2>";
    }
    return $resp;
    
}

?>