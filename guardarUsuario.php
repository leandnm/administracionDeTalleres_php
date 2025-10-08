<?php
include("funciones.php");

$usuario = $_POST;


if (!isset($usuario["id"]) ||
    !is_numeric($usuario["id"]) ||
    $usuario["id"] <= 0 
    ) {
    
        redirect("index.php");

}

$conn = conectDB();

$query = "UPDATE users SET 
                            name='".$usuario['name']."', 
                            lastname='".$usuario['lastname']."', 
                            document='".$usuario['document']."', 
                            status='".$usuario['status']."', 
                            address='".$usuario['address']."', 
                            profession='".$usuario['profession']."'
                    WHERE id=".$usuario['id'].";";

$conn->query($query);

redirect("index.php");
