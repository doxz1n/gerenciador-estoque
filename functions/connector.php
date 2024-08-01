<?php
    function connector() {
        $server = "localhost";
        $database = "Estoque";
        $user = "root";
        $password = "";
        $conn = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        return $conn;
    }



