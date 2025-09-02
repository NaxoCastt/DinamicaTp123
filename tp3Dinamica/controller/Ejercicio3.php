<?php
function ejercicio3(){


    $dir = "../view/";
    $bandera = false;
    if ($_FILES['imagen']['type'] == "image/jpeg" && $_FILES['imagen']['error'] == 0) {
        
        if(copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])){
            $bandera = true;
        }
        
    }
    return $bandera;
}
    ?>