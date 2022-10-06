<?php

//$conexion = mysqli_connect('localhost', 'root', '','usuarios');
require("../config/config.php");
$sql = "SELECT * from usuarios";
$result = mysqli_query($conexion, $sql);

$datos = [];

    while($dato = mysqli_fetch_assoc($result)){
        $datos[] = $dato;
    }

echo json_encode($datos);

?>
