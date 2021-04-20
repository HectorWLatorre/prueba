<?php
include 'personas.php';
$indice = 1;
foreach ($Personas as &$persona) {
    echo '<a href="datos.php?persona='. $indice .'">' .$persona->NombreYApellido()."</a>";
    $indice = $indice+1;
}