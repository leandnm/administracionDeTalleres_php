<?php

include("funciones.php");

$idVehiculo = $_GET["idV"];

if (!isset($_GET["idV"]) ||
    !is_numeric($idVehiculo) ||
    $idVehiculo <= 0 
    ) {
    
        redirect("index.php");

}

$vehiculo = buscarVehiclePorId($idVehiculo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>

        <form action="guardarVehiculo.php"method="post">

            <div>
                <input type="hidden" name="bandera" value="Actualizar">
                <?php if (isset($idVehiculo)) {?>
                    
                    <input type="hidden" name="id" value="<?php echo $idVehiculo;?>">

                <?php }?>
            </div>

            <div>
                <label for="mark">Marca</label>
                <input type="text" name="mark" value="<?php echo $vehiculo["mark"];?>">
            </div>

            
            <div>
                <label for="model">Model</label>
                <input type="text" name="model" value="<?php echo $vehiculo["model"];?>">
            </div>

            <div>
                <label for="year">Year</label>
                <input type="text" name="year" value="<?php echo $vehiculo["year"];?>">
            </div>
            
            <div>
                <label for="status">status</label>
                <select name="status">
                    <?php if ($vehiculo["status"] == "active") { ?>
                        <option value="active" selected>activo</option>
                        <option value="incative">inactivo</option>
                        <option value="suspend">suspendido</option>
                
                        <?php
                    }elseif ($vehiculo["status"] == "inactive") {?>

                        <option value="active">activo</option>
                        <option value="inactive" selected>inactivo</option>
                        <option value="suspend">suspendido</option>

                    <?php }else{ ?>

                        <option value="active">activo</option>
                        <option value="inactive">inactivo</option>
                        <option value="suspend" selected>suspendido</option>


                    <?php } ?>
                    
                    
                </select>
            </div>

            <div>
                <label for="color">color</label>
                <input type="text" name="color" value="<?php echo $vehiculo["color"];?>">
            </div>
            
            <div>
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" value="<?php echo $vehiculo["matricula"];?>">
            </div>

            <div>
                <button type="submit">Actualizar</button>

                <button type="reset">Restablecer</button>

            </div>
        </form>


    </div>    

</body>
</html>

