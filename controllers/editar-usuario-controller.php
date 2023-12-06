<?php
include("../config/database.php");

$id_usuario = $_REQUEST['id_usuario'];
$primer_nombre = $_REQUEST["primer_nombre"];
$primer_apellido = $_REQUEST["primer_apellido"];
$contraseña = md5($_REQUEST["contraseña"]);
$correo_electronico = $_REQUEST['correo_electronico'];
$tipo_de_usuario = $_REQUEST["tipo_de_usuario"];
$estatus_usuario =$_REQUEST["estatus_usuario"];

$actualizar = (
    "UPDATE usuarios SET 
    primer_nombre = '$primer_nombre',  
    primer_apellido = '$primer_apellido',
    contraseña = '$contraseña',
    correo_electronico = '$correo_electronico',
    tipo_de_usuario = '$tipo_de_usuario',
    estatus_usuario = '$estatus_usuario'
    
WHERE id_usuario ='$id_usuario'
");
header("location:../gestion-de-usuarios.php");

?>