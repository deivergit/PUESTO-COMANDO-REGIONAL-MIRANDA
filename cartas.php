<?php
include('./config/database.php');
session_start();

$id = $_SESSION['id'];
$consulta2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo_electronico = '$id';");
$valores = mysqli_fetch_array($consulta2);
$primer_nombre = $valores['primer_nombre'];
$primer_apellido = $valores['primer_apellido'];
$foto_de_perfil=$valores['foto_de_perfil'];
$tipo_de_usuario = $valores['tipo_de_usuario'];

$boton_1 = "boton_desactivado";
$boton_2 = "boton_active";
$boton_3 = "boton_desactivado";
$boton_4 = "boton_desactivado";

# SERVER TIME
date_default_timezone_set("America/Caracas");
$DateAndTime = date('d-m-Y h:i:s a', time());  

# PAGE
$page_title = "Cartas";

# BAR LEYEND
$item_one = "Cartas";
$item_two = "Lista de cartas / Registrar carta";

#models
$busqueda = "SELECT * FROM cartas
INNER JOIN documentos_de_identidad ON cartas.id_carta = documentos_de_identidad.id_documento_de_identidad
inner join direcciones_de_habitacion ON cartas.id_carta = direcciones_de_habitacion.id_direccion_de_habitacion
";
$query1 = $conn->query($busqueda);
?>
<!DOCTYPE html>
<html lang="es">
<?php include ("./views/components/head.php"); ?>
<link rel="stylesheet" href="./views/recourses/css/inicio.css">
<link rel="stylesheet" href="./views/recourses/css/components/form.css">
<link rel="stylesheet" href="./views/recourses/css/components/table.css">
</head>

<body>
    <main class="main-container">
        <?php
            include("./views/components/aside.php");
        ?>
        <div class="container">
            <?php
                include("./views/components/header.php");
                include("./views/components/bar-leyend.php");
                include("./views/pages/form-agregar-carta.php");
            ?>
            <div class="controllers">
                <button class="button button--save button-modal" id="open-dialog" title="Agregar carta">
                    <img src="./views/recourses/icons/plus.svg" alt="icono">
                </button>
            </div>
            <?php
                include("./views/pages/table-cartas.php");
            ?>
        </div>
    </main>
</body>

<script src="./views/recourses/js/modal.js"></script>
<script defer src="./views/recourses/js/main.js"></script>
<script defer src="./views/recourses/js/modal.js"></script>
</html>