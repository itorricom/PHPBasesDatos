<?php

class Connection{
    private static $instance;
    private $connection; 

    private function __construct(){
        $this->make_conection();
    }

    public static function getInstance(){
        if(!self::$instance instanceof self)
            self::$instance = new self();
        return self::$instance;
    }

    private function make_conection()
    {
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "";

        $mysqli = new mysqli($server, $username, $password, $database);
        //Comprobar conexion de manera orientada a obejetos
        if ($mysqli->connect_errno)
        die("Fallos la conexion: {$mysqli->connect_error}");
        //Esto noy ayuda a poder usar cualquier caracter de nuestras consultas
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        $this->connection = $mysqli;
    }

}





?>