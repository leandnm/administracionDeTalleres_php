<?php

include "funciones.php";

$idVehicle = $_GET["id"];

$usuariof= buscarUserPorIdConVehiculo($idVehicle);

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


    <div style= "padding:20px">

        <div>

            <h1>
                Usuario
            </h1>

            <table class="table table-hover">

                <thead>

                    <td>Nombre</td>

                    <td>Apellido</td>

                    <td>Documento</td>

                    <td>Estatus</td>

                    <td>Direccion</td>

                    <td>Profesion</td>
                    
                    <td>Creado</td>
                    
                    <td>Actualizado</td>

                </thead>

                <tbody>

                <tr>

                    <td><?php echo $usuariof["name"];?></td>

                    <td><?php echo $usuariof["lastname"];?></td>

                    <td><?php echo $usuariof["document"];?></td>

                    <td><?php if ($usuariof["status"] == "active") {
                        ?>

                        <input type="checkbox" checked disabled>

                        <?php
                    } else {
                        
                        ?>

                        <input type="checkbox" disabled>

                        <?php
                    }
                    ?></td>

                    <td><?php echo $usuariof["address"];?></td>

                    <td><?php echo $usuariof["profession"];?></td>

                    <td><?php echo $usuariof["created_at"];?></td>

                    <td><?php echo $usuariof["updated_at"];?></td>    
                    
                    <td>
                        <div>
                            <form action="eliminarUsuario.php" method="post">
                                <a href="actualizarUsuario.php?idU=<?php echo $usuariof["id"];?>">Actualizar</a>
                                
                                <input type="hidden" name="id" value="<?php echo $usuariof["id"];?>">


                                <button type="submit">Eliminar</button>
                            </form>
                            
                        </div>
                    </td>
                
                </tr>


                </tbody>
                


            </table>

        </div>
        
        <div>

            <h2><br> Vehiculos</h2>

            
                
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
<?php
            $vehicles = $usuariof["vehicles"];

            for ($i=0; $i < count($vehicles); $i++) { 
                
                
                
                ?>
                        <tr>

                            <td><?php echo $vehicles[$i]["mark"];?></td>
                            
                            <td><?php echo $vehicles[$i]["model"];?></td>

                            <td><?php echo $vehicles[$i]["year"];?></td>

                            <td>
                                <?php 
                                $status = ($vehicles[$i]["status"] === "active") ? "checked" : ""; ?>
                                <input type="checkbox" <?php echo $status; ?> disabled/> 
                            </td>
                            
                            <td><?php echo $vehicles[$i]["color"];?></td>
                            
                            <td><?php echo $vehicles[$i]["matricula"];?></td>

                            <td><?php echo $vehicles[$i]["creted_at"];?></td>

                            <td><?php echo $vehicles[$i]["updated_at"];?></td>


                        </tr>


                <?php

                

            }
            
            
            
            ?>

                    </tbody>

                </table>

                <br>



        </div>

    </div>




</body>
</html>