<?php

require("constantes.php");


$query=[

    "CREATE DATABASE IF NOT EXISTS ".NAME_DB.";",
    "CREATE TABLE IF NOT EXISTS ".NAME_DB.".`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `document` VARCHAR(255) NOT NULL , `status` ENUM('active','inactive','supend','') NOT NULL , `address` VARCHAR(255) NOT NULL , `profession` VARCHAR(255) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;",
    "CREATE TABLE IF NOT EXISTS ".NAME_DB.".`vehicles` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,`mark` VARCHAR(255) NOT NULL ,`model` VARCHAR(255) NOT NULL ,`year` INT NOT NULL ,`status` ENUM('active','inactive','suspend','') NOT NULL ,`color` VARCHAR(255) NOT NULL ,`matricula` VARCHAR(255) NOT NULL ,`user_id` INT ,`creted_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , FOREIGN KEY (user_id) REFERENCES users(id)) ENGINE = InnoDB;"

];

$_GET["query"] = $query;



$createVehicles=[

    0 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'ford', 'festiva', 2002, 'active', 'azul', 'fbj60ko', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    1 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'toyota', 'corolla', '2015', 'active', 'rojo', 'abc123de', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    2 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'honda', 'civic', '2019', 'active', 'negro', 'fgh456ij', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    3 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'chevrolet', 'cruze', '2018', 'active', 'blanco', 'klm789no', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    4 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'nissan', 'versa', '2020', 'active', 'plata', 'pqr012st', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    5 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'kia', 'rio', '2021', 'active', 'gris', 'uvw345xy', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    6 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'hyundai', 'elantra', '2017', 'active', 'azul', 'zab678cd', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    7 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'volkswagen', 'jetta', '2016', 'active', 'rojo vino', 'efg901hi', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    8 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'mazda', '3', '2022', 'active', 'negro', 'jkl234mn', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    9 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'subaru', 'impreza', '2014', 'active', 'blanco perla', 'opq567rs', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    10 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'ford', 'mustang', '2023', 'active', 'amarillo', 'tuv890wx', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    11 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'jeep', 'wrangler', '2019', 'active', 'verde', 'yz1234ab', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    12 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'audi', 'a4', '2017', 'active', 'plata', 'cd5678ef', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    13 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'mercedes-benz', 'c-class', '2020', 'active', 'negro', 'gh9012ij', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    14 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'bmw', '3 series', '2018', 'active', 'azul metálico', 'kl3456mn', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    15 => "INSERT INTO ".NAME_DB.".`vehicles` (`id`, `mark`, `model`, `year`, `status`, `color`, `matricula`, `user_id`, `creted_at`, `updated_at`) VALUES (NULL, 'lexus', 'is', '2021', 'active', 'blanco', 'op7890qr', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
];

$_GET["vehicles"] = $createVehicles;

$createUsers=[

    "INSERT INTO ".NAME_DB.".`users` (`id`, `name`, `lastname`, `document`, `status`, `address`, `profession`, `created_at`, `updated_at`) VALUES (NULL, 'Henry', 'Leon', '18625204', 'active', 'san francisco', 'comerciante', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    "INSERT INTO ".NAME_DB.".`users` (`id`, `name`, `lastname`, `document`, `status`, `address`, `profession`, `created_at`, `updated_at`) VALUES (NULL, 'Leandro', 'Nunez', '34029252', 'active', 'maracaibo', 'programador', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",
    "INSERT INTO ".NAME_DB.".`users` (`id`, `name`, `lastname`, `document`, `status`, `address`, `profession`, `created_at`, `updated_at`) VALUES (NULL, 'Patricia', 'Mora', '14026938', 'active', 'sur america', 'docente', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);",

];

$_GET["users"] = $createUsers;

function conectUser(){
    // el objeto conn se encarga de conectar la base de datos
    $conn = new mysqli(HOST_DB, USER_DB, PASS_DB);

    // si da un error de coneccion finaliza la ejecucion de php
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function createTablesAndDatabases(){
    
    $conn = conectUser();

    for ($i=0; $i < count($_GET["query"]); $i++) { 
       
        $conn->query($_GET["query"][$i]);
        //echo "se ejecuto <br>";
        //echo $_GET["query"][$i];

    }
    unset($_GET["query"]);

}

function insertVehicles(){
    
    $conn = conectUser();

    foreach ($_GET["vehicles"] as $key => $q) {

        $conn->query($q);
    }

    unset($_GET["vehicles"]);


}


function insertUsers(){
    
    $conn = conectUser();

    foreach ($_GET["users"] as $key => $q) {
        
        $conn->query($q);
    }

    unset($_GET["users"]);


}


createTablesAndDatabases();

insertUsers();

insertVehicles();