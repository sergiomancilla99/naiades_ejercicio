<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);
date_default_timezone_set('America/Buenos_Aires');
$base = array("localhost", "root", "", "naiades_ejercicio");

$conexion = mysqli_connect('localhost', 'root', '','naiades_ejercicio');
?>
