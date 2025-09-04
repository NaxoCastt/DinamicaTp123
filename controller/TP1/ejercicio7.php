<?php
function ejercicio7(){

    $string = "";
    include_once __DIR__ . '/../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();
    $resp = 0;
    if ($metodo['number1'] != "" && $metodo['number2'] != "") {
        $operacion = $metodo['operacion'];
        if ($operacion == "suma") {
            $resp = $metodo['number1'] + $metodo['number2'];
        } elseif ($operacion == "resta") {
            $resp = $metodo['number1'] - $metodo['number2'];
        } elseif ($operacion == "multiplicacion") {
            $resp = $metodo['number1'] * $metodo['number2'];
        }
    } else {
        $resp =  "No se pudó obtener los operandos";
    }
    
    $string = "Al hacer la " . $metodo['operacion'] . " de: " . $metodo['number1'] . " y " . $metodo['number2'] . ". El resultado da " . $resp;
    return $string;
}
?>