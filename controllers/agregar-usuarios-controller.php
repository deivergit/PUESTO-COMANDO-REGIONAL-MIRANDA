<?php

require_once("../config/database.php");

$primer_nombre = $_POST['primer_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$tipo_de_usuario = $_POST['tipo_de_usuario'];
$correo_electronico = $_POST['correo_electronico'];
#$foto_de_perfil = $_POST['foto_de_perfil'];
$contraseña = $_POST['contraseña'];

$insertar = "INSERT INTO usuarios(primer_nombre, primer_apellido, tipo_de_usuario, correo_electronico, contraseña) VALUES('$primer_nombre','$primer_apellido','$tipo_de_usuario','$correo_electronico','$contraseña')";

$resultado = mysqli_query($conn, $insertar);
if($resultado){
    echo "<script>alert('Se han enviado los datos con exito!');
    window.location='gestion-de-usuarios.php'</script>";
} else {
    echo "<script>alert('No se han podido enviar los datos!');windows.history.go(-1);</script>";
}

?>