<?php

include("funciones.php");

$idVehiculo = $_POST["id"];

if (!isset($idVehiculo) ||
    !is_numeric($idVehiculo) ||
    $idVehiculo <= 0 
    ) {
    
        redirect("index.php");

}

$conn = conectDB();

$query = "DELETE FROM vehicles WHERE id=".$idVehiculo.";";

$conn->query($query);

redirect("index.php");
