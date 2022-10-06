<?php
require("../config/config.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

if(empty($nombre) || empty($apellido)) {
    echo json_encode([
        "success" => false,
        "message" => "Los campos no pueden estar vacios"
    ]);
    die();
}

$queryInsert = "INSERT INTO usuarios (nombre, apellido) VALUES('$nombre', '$apellido')";

$rta = mysqli_query($conexion, $queryInsert);


if(!$rta) {

echo json_encode([
    "success" => false,
    "message" => "No se pudo insertar el usuario"
]);

} else {
    echo json_encode([
        "success" => true,
        "message" => "Se insertó el usuario correctamente"
    ]);
}



?>
