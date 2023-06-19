<?php

$sql = "SELECT COUNT(*) cartas FROM cartas";
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_assoc($result);

$sql3 = "SELECT COUNT(*) por_verificar FROM cartas WHERE estatus_de_la_carta = 'por verificar'";
$result3 = mysqli_query($conn, $sql3);
$fila3 = mysqli_fetch_assoc($result3);

$sql4 = "SELECT COUNT(*) diferida_0 FROM cartas WHERE estatus_de_la_carta = 'diferida'";
$result4 = mysqli_query($conn, $sql4);
$fila4 = mysqli_fetch_assoc($result4);

$sql5 = "SELECT COUNT(*) verificada FROM cartas WHERE estatus_de_la_carta = 'verificada'";
$result5 = mysqli_query($conn, $sql5);
$fila5 = mysqli_fetch_assoc($result5);

$sql2 = "SELECT COUNT(*) procesadas FROM cartas WHERE estatus_de_la_carta = 'procesada'";
$result2 = mysqli_query($conn, $sql2);
$fila2 = mysqli_fetch_assoc($result2);