<?php    
require("constantes.php");


/** */
function conectDB(){
    try {
        // el objeto conn se encarga de conectar la base de datos
        $conn = new mysqli(HOST_DB, USER_DB, PASS_DB, NAME_DB);
        
    } catch (\Throwable $th) {
        
        echo "<br><br><br><br><br>";
        echo "code: ".$th->getCode()."<br>";
        echo "message: ".$th->getMessage()."<br>";
        echo "file: ".$th->getFile()."<br>";
         die("Connection failed: " . $th->getMessage());
    }

    return $conn;
}

/**/
function listarUsers() {
    
    $query = "SELECT * FROM users;";

    $conn = conectDB();

    $result = $conn->query($query);

    $usuarios = [];

    while ($row = $result->fetch_assoc()) {
        
        $usuarios[] = $row;


    }

    return $usuarios;

}

/** */
function listarvehicles() {
    
    $query = "SELECT * FROM vehicles;";

    $conn = conectDB();
    
    $result = $conn->query($query);

    $vehiculos = [];

    while ($row = $result->fetch_assoc()) {
        
        $vehiculos[] = $row;

    }

    return $vehiculos;

}

function buscarUserPorId($id = null) {
    if ( !is_numeric($id) || $id <= 0) {
        die("Connection failed: El id del usuario debe ser mayor que 0 ");
    }

    $conn = conectDB();

    $query = "SELECT * FROM users WHERE id =".$id.";";

    return $conn->query($query)->fetch_assoc();

}

function buscarVehiclePorId($id = null) {
    if ( !is_numeric($id) || $id <= 0) {
        die("Connection failed: El id del usuario debe ser mayor que 0 ");
    }

    $conn = conectDB();

    $query = "SELECT * FROM vehicles WHERE id =".$id.";";

    return $conn->query($query)->fetch_assoc();

}

function buscarVehiclesPorUserId($id = null) {
    if ( !is_numeric($id) || $id <= 0) {
        die("Connection failed: El id del usuario del vehiculo debe ser mayor que 0 ");
    }

    $conn = conectDB();

    $query = "SELECT * FROM vehicles WHERE user_id =".$id.";";

    return $conn->query($query)->fetch_assoc();

}

function buscarUserPorIdConVehiculo($idUser){
    
    $conn = conectDB();
    $user = buscarUserPorId($idUser);
    
    // 1. Prepara la consulta para los vehículos
    $vehiclesStmt = $conn->prepare("SELECT * FROM vehicles WHERE user_id = ?");

    // 2. Verifica si la preparación de la sentencia fue exitosa
    if ($vehiclesStmt === false) {
        die("Error en la preparación de la consulta de vehículos: " . $conn->error);
    }

    // 3. Vincula el parámetro. La variable debe ser referenciada
    $user_id_param = $user['id'];
    $vehiclesStmt->bind_param("i", $user_id_param);

    // 4. Ejecuta la sentencia
    $vehiclesStmt->execute();
    $vehiclesResult = $vehiclesStmt->get_result();

    // 5. Procesa los resultados
    $vehicles = $vehiclesResult->fetch_all(MYSQLI_ASSOC);

    // Agrega el array de vehículos al array del usuario
    $user['vehicles'] = $vehicles;


    // Cierra las sentencias
    $vehiclesStmt->close();
    $conn->close();

    return $user;
}

function redirect($url) {
    header('Location: '.$url);
    die();
}
   