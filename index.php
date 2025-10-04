<?php

include "BaseDeDatos/script.php";



include "funciones.php";

$usuarios = listarUsers();
$vehicles = listarvehicles();

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
    
    <div>
      <table>
        <thead>
           <td>Fullname</td> 
        </thead>
        <tbody>
          <?php
          
          for ($i=0; $i < count($usuarios); $i++) { 
          
              ?>
              <tr>
                  <td>
      
                      <?php $url1 = "tablasDeUsuarios.php?id=".$usuarios[$i]['id'];

                      ?>

                      <a href="<?php echo $url1; ?>"><?php echo $usuarios[$i]["name"]." ".$usuarios[$i]["lastname"]; ?></a>
                  </td>
              </tr>
              <?php
          }
        
        ?>    


        </tbody>
      </table>
    </div>

    <div>  
        <table>

            <Thead>

                <td>
                    Vehicles
                </td>
            
            </Thead>
            
            <tbody>

               <?php
               
               for ($i=0; $i < count($vehicles); $i++) { 

                ?>
                <tr>

                    <td>

                        <?php $url2 = "tablaDeVehiculos.php?id=".$vehicles[$i]["id"];

                        ?>

                        <a href="<?php echo $url2; ?>"><?php echo $vehicles[$i]["mark"]." ".$vehicles[$i]["model"]." ".$vehicles[$i]["year"]." ".$vehicles[$i]["color"] ;?></a>

                    </td>

                </tr>

                <?php

               }
               
               ?>

            </tbody>

        </table>
    </div>



</body>
</html>