<?php
include("funciones.php");

$idUsuario = $_GET["idU"];

if (!isset($_GET["idU"]) ||
    !is_numeric($idUsuario) ||
    $idUsuario <= 0 
    ) {
    
        redirect("index.php");

}

$usuario = buscarUserPorId($idUsuario);


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

        <form action="guardarUsuario.php" method="post">

            <div>
                <input type="hidden" name="bandera" value="Actualizar">
                <?php if (isset($idUsuario)) {?>
                    
                    <input type="hidden" name="id" value="<?php echo $idUsuario;?>">

                <?php }?>
            </div>

            <div>
                <label for="name">Marca</label>
                <input type="text" name="name" value="<?php echo $usuario["name"];?>">
            </div>

            
            <div>
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" value="<?php echo $usuario["lastname"];?>">
            </div>

            <div>
                <label for="document">document</label>
                <input type="text" name="document" value="<?php echo $usuario["document"];?>">
            </div>
            
            <div>
                <label for="status">status</label>
                <select name="status">
                    <?php if ($usuario["status"] == "active") { ?>
                        <option value="active" selected>activo</option>
                        <option value="inactive">inactivo</option>
                        <option value="suspend">suspendido</option>
                
                        <?php
                    }elseif ($usuario["status"] == "inactive") {?>

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
                <label for="address">address</label>
                <input type="text" name="address" value="<?php echo $usuario["address"];?>">
            </div>
            
            <div>
                <label for="profession">profession</label>
                <input type="text" name="profession" value="<?php echo $usuario["profession"];?>">
            </div>

            <div>
                <button type="submit">Actualizar</button>

                <button type="reset">Restablecer</button>

            </div>
        </form>


    </div>    

</body>
</html>

