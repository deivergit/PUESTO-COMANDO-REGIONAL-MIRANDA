<?php
$correo_electronico = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];


        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "pchc";

        $conn = mysqli_connect($host, $username, $passwd, $dbname);

$consulta = "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' and contraseña = '$contraseña' ";
$resultado = mysqli_query($conn, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas > 0) {
    header("location:../inicio.php");
} else {
    header("location:../index.php");
    echo "<span>Incorrecto</span>";
}

mysqli_free_result($resultado);
mysqli_close($conn, $consulta);

?>