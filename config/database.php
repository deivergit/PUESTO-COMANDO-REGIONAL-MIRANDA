<?php
        
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "pcrm";

        $conn = new mysqli($host, $username, $passwd, $dbname);
        $conn->query("set names utf8;");
        if ($conn->connect_error) {
                die("Error de conexion" .$conn->connect_error);
        }
?>