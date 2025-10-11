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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: #191924;
            background: linear-gradient(330deg, rgba(25, 25, 36, 1) 10%, rgba(102, 100, 100, 1) 90%);">

    <h1 style="padding-top:30px; color:rgb(210, 208, 255);"
        class="d-flex justify-content-center align-items-center">Ingrese los nuevos datos</h1>
    
    <div style="display: flex; justify-content:center; aling-items:center; height:569px;">

        
        <form action="guardarUsuario.php" method="post">
            <br>
            <div>
                <input type="hidden" name="bandera" value="Actualizar">
                <?php if (isset($idUsuario)) {?>
                    
                    <input type="hidden" name="id" value="<?php echo $idUsuario;?>">

                <?php }?>
            </div>

            <div>
                <label style="color:rgb(210, 208, 255);" for="name">Marca</label><br>
                <input type="text" name="name" value="<?php echo $usuario["name"];?>">
            </div>
                    <br>
            
            <div>
                <label style="color:rgb(210, 208, 255);" for="lastname">lastname</label><br>
                <input type="text" name="lastname" value="<?php echo $usuario["lastname"];?>">
            </div>  
                    <br>
            <div>   
                <label style="color:rgb(210, 208, 255);" for="document">document</label><br>
                <input type="text" name="document" value="<?php echo $usuario["document"];?>">
            </div>
                    <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="status">status</label><br>
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
                        <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="address" >address</label><br>
                <input type="text" name="address" value="<?php echo $usuario["address"];?>">
            </div>
                        <br>
            <div>
                <label style="color:rgb(210, 208, 255);" for="profession">profession</label><br>
                <input type="text" name="profession" value="<?php echo $usuario["profession"];?>">
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

