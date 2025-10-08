<?php

$vehiculo = $_POST;

include("funciones.php");

if (!isset($vehiculo)) {
    
        redirect("index.php");

}


if (!isset($vehiculo["id"]) ||
    !is_numeric($vehiculo["id"]) || 
    $vehiculo["id"] <= 0) {
        
        redirect("index.php");

}

$conn = conectDB();

$query = "UPDATE vehicles SET 
                            mark='".$vehiculo['mark']."', 
                            model='".$vehiculo['model']."', 
                            year='".$vehiculo['year']."', 
                            status='".$vehiculo['status']."', 
                            color='".$vehiculo['color']."', 
                            matricula='".$vehiculo['matricula']."'
                    WHERE id=".$vehiculo['id'].";";

$conn->query($query);

redirect("index.php");
