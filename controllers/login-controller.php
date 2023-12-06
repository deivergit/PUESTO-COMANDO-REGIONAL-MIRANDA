<?php

include("../config/database.php");

$correo_electronico = $_POST["correo_electronico"];
$contraseña = md5($_POST["contraseña"]);

$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' and contraseña = '$contraseña';");

if ($row = mysqli_fetch_array($consulta)) {
    session_start();
    $_SESSION['id'] =$row['correo_electronico'];
    
    header("location:../inicio.php");
} else {
    header("location:../index.php");
}

?>