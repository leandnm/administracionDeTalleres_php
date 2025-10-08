<?php

include "funciones.php";

$vehicle = buscarVehiclePorId($_GET["id"]);

$user = buscarUserPorId($vehicle["user_id"]);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <a href="index.php">Volver</a>


    <div>

        <div>
            <br><br>
            <h1>vehiculo</h1>

            <table class="table table-hover">

                <thead>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>año</td>
                    <td>Estatus</td>
                    <td>Color</td>
                    <td>Matricula</td>
                    <td>Creado</td>
                    <td>Comprado</td>
                </thead>

                <tbody>
                    
                    
                    <tr>
                        
                        <td><?php echo $vehicle["mark"]; ?></td>

                        <td><?php echo $vehicle["model"]; ?></td>
                        
                        <td><?php echo $vehicle["year"]; ?></td>
                        
                        <td>
                            <?php 
                            $status = ($vehicle["status"] === "active") ? "checked" : ""; ?>
                            <input type="checkbox" <?php echo $status; ?> disabled/>
                        </td>
                        
                        <td><?php echo $vehicle["color"]; ?></td>
                        
                        <td><?php echo $vehicle["matricula"]; ?></td>
                        
                        <td><?php echo $vehicle["creted_at"]; ?></td>
                        
                        <td><?php echo $vehicle["updated_at"]; ?></td>

                        <td><div>
                            <?php
                                $url = "actualizarVehiculos.php?idV=" . $vehicle["id"];
                            ?>
                            <a href="<?php echo $url; ?>">Update</a>
                            

                            <form action='eliminarVehiculo.php' method='post'>
                                
                                <div>
                                    <input name='id' type='hidden' value="<?php echo $vehicle['id']; ?>">
                                    
                                    <button type='submit' onclick='confirm("Seguro que quieres borrar?")'>Eliminar</button>
                                </div>

                                

                            </form>
                        </div></td>
                        
                    </tr>
                </tbody>

            </table>

        </div>

        <div>

            <br><br>
            <h1>Conductor</h1>

            <table class="table table-hover">

                <thead>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Documento</td>
                    <td>Estatus</td>
                    <td>Address</td>
                    <td>Profesion</td>
                    <td>Creado</td>
                    <td>Actualizado</td>
                </thead>

                <tbody>
                    
                    
                    <tr>
                        
                        <td><?php echo $user["name"]; ?></td>

                        <td><?php echo $user["lastname"]; ?></td>
                        
                        <td><?php echo $user["document"]; ?></td>
                        
                        <td>
                            <?php 
                            $status = ($user["status"] === "active") ? "checked" : ""; ?>
                            <input type="checkbox" <?php echo $status; ?> disabled/>
                        </td>
                        
                        <td><?php echo $user["address"]; ?></td>
                        
                        <td><?php echo $user["profession"]; ?></td>
                        
                        <td><?php echo $vehicle["creted_at"]; ?></td>
                        
                        <td><?php echo $vehicle["updated_at"]; ?></td>
                        
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</body>
</html>