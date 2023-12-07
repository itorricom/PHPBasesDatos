<?php
$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

$setNames = $connection->prepare("SET NAMES 'utf8'");
$setNames->execute();

var_dump($setNames);

?>