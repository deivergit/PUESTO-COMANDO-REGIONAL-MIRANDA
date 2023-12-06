<?php

require_once("../config/database.php");

$primer_nombre = $_POST["primer_nombre"];
$primer_apellido = $_POST["primer_apellido"];
$tipo_de_usuario = $_POST["tipo_de_usuario"];
$correo_electronico = $_POST["correo_electronico"];
$contraseña = md5($_POST["contraseña"]);
$foto_usuario = $_FILES["foto_usuario"];

$tmp_name = $foto_de_perfil["tmp_name"];
$directorio_destino = "images";
$img_file = $foto_de_perfil["name"];
$img_type = $foto_de_perfil["type"];
echo 1;

if(((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg") 
|| strpos($img_type, "png")))){
    echo 2;

    $destino = $directorio_destino."/".$img_file;
    mysqli_query($conn,"INSERT INTO usuarios(primer_nombre, primer_apellido, tipo_de_usuario, correo_electronico, contraseña, foto_de_perfil) VALUES('$primer_nombre','$primer_apellido','$tipo_de_usuario','$correo_electronico','$contraseña','$destino');");
     if (move_uploaded_file($tmp_name,$destino)) {
    }
}

$sql = "INSERT INTO usuarios(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, numero_documento) VALUES('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$numero_documento', '$contraseña')";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql)) {
    $usuario_fk = $conn->insert_id;

    $sql_roles_usuarios = "INSERT INTO rol_usuarios(rol_usuario_id, usuario_fk, rol_usuario) VALUES('$usuario_fk','$rol_usuario')";
    $conn->query($sql_roles_usuarios);

    $sql_fotos_usuarios = "INSERT INTO fotos_perfil(foto_perfil_id, usuario_fk, foto_perfil) VALUES('$usuario_fk','$foto_perfil')";
    $conn->query($sql_fotos_usuarios);
}   

header("location:../gestion-de-usuarios.php");

?>