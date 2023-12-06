<?php
include('./config/database.php');
session_start();
if (isset($_SESSION['id'])) {
} else {
    die(header("location:./index.php"));
}

$id = $_SESSION['id'];
$consulta2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo_electronico = '$id';");
$valores = mysqli_fetch_array($consulta2);
$primer_nombre = $valores['primer_nombre'];
$primer_apellido = $valores['primer_apellido'];
$foto_de_perfil=$valores['foto_de_perfil'];
$tipo_de_usuario = $valores['tipo_de_usuario'];

$boton_1 = "boton_active";
$boton_2 = "boton_desactivado";
$boton_3 = "boton_desactivado";
$boton_4 = "boton_desactivado";

# PAGE
$page_title = "Inicio";

# BAR LEYEND
$item_one = "Inicio";
$item_two = "Bienvenido";

?>
<!DOCTYPE html>
<html lang="es">
<?php include ("./views/components/head.php"); ?>
    <link rel="stylesheet" href="./views/recourses/css/inicio.css">
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
                include("./views/pages/inicio.php");
            ?>
        </div>
    </main>
</body>
<script defer src="./views/recourses/js/main.js"></script>
<script defer src="./views/recourses/js/modal.js"></script>
</html>