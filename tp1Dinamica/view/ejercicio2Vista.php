<?php

include_once '../controller/cantidadHorasSemana.php';

$horasTotales = horas();
echo $horasTotales . "<br> horas totales registradas <br>";
echo '<a href="../view/index.php">Inicio</a>';
