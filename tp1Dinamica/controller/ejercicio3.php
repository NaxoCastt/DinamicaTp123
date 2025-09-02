<?php
function funcion3()
{
    include_once '../../encapsulamiento/encapsulado.php';
    $metodo = encapsuladorMetodos();

    $string = "No hay nada que mostrar";
    if ($metodo) {

        $string = "Hola, yo soy " . $metodo['nombre'] . ", " . $metodo['apellido'] . " tengo " . $metodo['edad'] . " años y vivo en " . $metodo['direccion'];
    }
    return $string;
}

?>