<?php

require_once("../config/database.php");

#TABLA DOCUMENTOS DE IDENTIDAD
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$tipo_de_documento = $_POST['tipo_de_documento'];
$numero_de_documento = $_POST['numero_de_documento'];
$pais_de_origen = $_POST['pais_de_origen'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$sexo = $_POST['sexo'];

#TABLA NUMEROS DE TELEFONO
$numero_de_telefono = $_POST['numero_de_telefono'];
$tipo_de_numero = $_POST['tipo_de_numero'];

#TABLA DIRECCIONES DE HABITACION
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$parroquia = $_POST['parroquia'];
$direccion = $_POST['direccion'];

#TABLA CUADRANTES DE PAZ
$cuadrante = $_POST['cuadrante'];
$eje = $_POST['eje'];
$zona = $_POST['zona'];
$direccion = $_POST['direccion'];

#TABLA CARTAS
$estatus_de_la_carta = $_POST['estatus_de_la_carta'];
$via_de_recepcion = $_POST['via_de_recepcion'];
$fecha_hora_sistematizacion = $_POST["fecha_hora_sistematizacion"];
$fecha_del_despliegue = $_POST['fecha_del_despliegue'];
$fecha_atencion_carta = $_POST['fecha_atencion_carta'];
$descripcion_de_la_carta = $_POST['descripcion_del_caso'];
$protector_responsable = $_POST['protector_responsable'];

$insert = "INSERT INTO cartas(descripcion_de_la_carta, estatus_de_la_carta, via_de_recepcion, fecha_hora_sistematizacion, fecha_del_despliegue, fecha_atencion_carta, 
protector_responsable)
VALUES('$descripcion_de_la_carta', '$estatus_de_la_carta', '$via_de_recepcion', '$fecha_hora_sistematizacion', '$fecha_del_despliegue','$fecha_atencion_carta', '$protector_responsable')";

if ($conn->query($insert)) {
     
     $id_carta = $conn->insert_id;

     $insert_table_documentos_de_identidad = "INSERT INTO 
     documentos_de_identidad(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, tipo_de_documento, numero_de_documento, pais_de_origen, fecha_de_nacimiento, sexo, id_carta)
     VALUES('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$tipo_de_documento', '$numero_de_documento', '$pais_de_origen', '$fecha_de_nacimiento', '$sexo', $id_carta)";
     
     $insert_table_numeros_de_telefono = "INSERT INTO 
     numeros_de_telefono(numero_de_telefono, tipo_de_numero, id_carta)
     VALUES('$numero_de_telefono', '$tipo_de_numero', $id_carta)";

     $insert_table_direcciones_de_habitacion = "INSERT INTO 
     direcciones_de_habitacion(estado, municipio, parroquia, direccion, id_carta)
     VALUES('$estado', '$municipio', '$parroquia','$direccion', $id_carta)";

     $insert_table_cuadrantes_de_paz = "INSERT INTO 
     cuadrantes_de_paz(cuadrante, eje, zona, direccion, id_carta)
     VALUES('$cuadrante', '$eje','$zona', '$direccion', $id_carta)";
     
     $conn->query($insert_table_documentos_de_identidad);
     $conn->query($insert_table_numeros_de_telefono);
     $conn->query($insert_table_direcciones_de_habitacion);
     $conn->query($insert_table_cuadrantes_de_paz);
     
}
header('Location: ../cartas.php');

?>