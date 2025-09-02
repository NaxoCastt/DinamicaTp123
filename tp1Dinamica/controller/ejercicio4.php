<?php
function ejercicio4()
{
    $string = "No hay nada que mostrar";
    include_once '../../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();
    if ($metodo) {

        $edad = $metodo['edad'];

        if ($edad >= 18) {

            $string = "Usted es mayor de edad";
        } else {

            $string = "Usted es menor de edad";
        }
    } 

    return $string;
}
?>