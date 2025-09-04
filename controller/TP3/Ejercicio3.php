<?php

class jpgViewer
{


    public function ejercicio3()
    {


        $dir = __DIR__ . '/../../view/TP3/';
        $bandera = false;
        if ($_FILES['imagen']['type'] == "image/jpeg" && $_FILES['imagen']['error'] == 0) {

            if (copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])) {
                $bandera = true;
            }

        }
        return $bandera;
    }
}
?>