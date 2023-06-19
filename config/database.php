<?php
        
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "pchc";

        $conn = mysqli_connect($host, $username, $passwd, $dbname);
        return $conn;
?>