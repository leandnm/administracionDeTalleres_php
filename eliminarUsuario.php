<?php

include("funciones.php");

$idUsuario = $_POST["id"];

if (!isset($idUsuario) ||
    !is_numeric($idUsuario) ||
    $idUsuario <= 0 
    ) {
    
        redirect("index.php");

}

$usuario = buscarUserPorIdConVehiculo($idUsuario);

if (is_null($usuario)) {

    redirect("index.php");

}

$vehicles = $usuario["vehicles"];
$conn = conectDB();




if (count($vehicles) > 0) {

    for ($i=0; $i < count($vehicles); $i++) { 
    
    $query = "DELETE FROM vehicles WHERE id=".$vehicles[$i]["id"].";";

    $conn->query($query);
    
    }

}


$query = "DELETE FROM users WHERE id=".$idUsuario.";";

$conn->query($query);

redirect("index.php");
