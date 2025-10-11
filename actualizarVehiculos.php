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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: #191924;
            background: linear-gradient(330deg, rgba(25, 25, 36, 1) 10%, rgba(102, 100, 100, 1) 90%);">
    
    <h1 style="padding-top:30px; color:rgb(210, 208, 255);"
        class="d-flex justify-content-center align-items-center">Ingrese los nuevos datos</h1>
    

    <div style="display: flex; justify-content:center; aling-items:center; height:569px;">

        <form action="guardarVehiculo.php"method="post">

            <div>
                <input type="hidden" name="bandera" value="Actualizar">
                <?php if (isset($idVehiculo)) {?>
                    
                    <input type="hidden" name="id" value="<?php echo $idVehiculo;?>">

                <?php }?>
            </div>
                    <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="mark">Marca</label><br>
                <input type="text" name="mark" value="<?php echo $vehiculo["mark"];?>">
            </div>
                    <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="model">Model</label><br>
                <input type="text" name="model" value="<?php echo $vehiculo["model"];?>">
            </div>
                    <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="year">Year</label><br>
                <input type="text" name="year" value="<?php echo $vehiculo["year"];?>">
            </div>
                    <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="status">status</label><br>
                <select name="status">
                    <?php if ($vehiculo["status"] == "active") { ?>
                        <option value="active" selected>activo</option>
                        <option value="inactive">inactivo</option>
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
                        <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="color">color</label><br>
                <input type="text" name="color" value="<?php echo $vehiculo["color"];?>">
            </div>
                        <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="matricula">Matricula</label><br>
                <input type="text" name="matricula" value="<?php echo $vehiculo["matricula"];?>">
            </div>
                        <br>
            <div>
                <button type="submit">Actualizar</button>

                <button type="reset">Restablecer</button>

            </div>
        </form>


    </div>    

</body>
</html>

