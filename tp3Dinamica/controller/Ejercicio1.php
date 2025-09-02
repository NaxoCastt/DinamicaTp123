<?php
function Ejercicio1(){


    $directorio = '../view';
    $string = "El archivo no pudo ser cargado";
    if ($_FILES['archivo']['error'] == 0) {
        
        if ($_FILES['archivo']['type'] == "application/msword" || $_FILES['archivo']['type'] == "application/pdf" ) {
            
            if ($_FILES['archivo']['size'] / (1024 * 1024) <= 2) {
                if ((copy($_FILES['archivo']['tmp_name'], $directorio.$_FILES['archivo']['name']))) {
                    
                    $string = "El archivo " . $_FILES['archivo']['name'] . " se cargó correctamente.";
                } 
            } 
        } 
    } 
    return $string;
}
    ?>