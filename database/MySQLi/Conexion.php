<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

//Forma procedural
//$mysqli = $mysqli_connect($server, $username, $password, $database)

//Orientada a objetos
$mysqli = new mysqli($server, $username, $password, $database);
//comprobar conexion de manera procedural
/*if($mysqli)
    die("Fallo la conexion"+$mysqli_connect_error());*/

//Comprobar conexion de manera orientada a obejetos
if($mysqli->connect_errno)
    die("Fallos la conexion: {$mysqli->connect_error}");

//Esto noy ayuda a poder usar cualquier caracter de nuestras consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);

?>