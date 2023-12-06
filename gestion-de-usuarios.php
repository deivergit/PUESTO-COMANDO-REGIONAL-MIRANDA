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

$boton_1 = "boton_desactivado";
$boton_2 = "boton_desactivado";
$boton_3 = "boton_active";
$boton_4 = "boton_desactivado";

# PAGE
$page_title = "Gestión de usuarios";

# BAR LEYEND
$item_one = "Gestión de usuarios";
$item_two = "Lista de usuarios / Agregar usuario";



?>
<!DOCTYPE html>
<html lang="es">
<?php include ("./views/components/head.php"); ?>
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
                include("./views/pages/form-agregar-usuario.php");
            ?>
            <button class="button button--save button-modal" id="open-dialog" title="Agregar usuario">
                <img src="./views/recourses/icons/plus.svg" alt="icono">
            </button>
            <?php 
            #paginacion
            if (!empty($_REQUEST["nume"])){ $_REQUEST["nume"] = $_REQUEST["nume"];} else { $_REQUEST["nume"] = '1';}
            if ($_REQUEST["nume"] == "") {$_REQUEST["nume"] = "1";}
            $usuarios = mysqli_query($conn, "SELECT id_usuario, foto_de_perfil, primer_nombre, primer_apellido, tipo_de_usuario, estatus_usuario, correo_electronico, foto_de_perfil FROM usuarios;");
            $num_registros = mysqli_num_rows($usuarios);
            $registros = '3';
            $pagina = $_REQUEST['nume'];
            if(is_numeric($pagina)) 
            $inicio = (($pagina - 1)* $registros);
            else
            $inicio = 0;
            $busqueda = mysqli_query($conn, "SELECT * FROM usuarios LIMIT $inicio, $registros;");
            $paginas = ceil($num_registros/$registros);

            ?>
            <div class="box-input box-input--regular">
                <label for="primer_nombre" class="label">Estatus</label>
                <select name="" id="" class="input input--regular">
                    <option>TODOS</option>
                    <option>ACTIVO</option>
                    <option>INACTIVO</option>
                </select>
            </div>
            <div class="box-input box-input--regular">
                <label for="primer_nombre" class="label">Tipo de usuario</label>
                <select name="" id="" class="input input--regular">
                    <option>TODOS</option>
                    <option>ADMINISTRADOR</option>
                    <option>ESTANDAR</option>
                </select>
            </div>
            <div class="box-input box-input--regular">
                <label for="primer_nombre" class="label">Buscar</label>
                <input type="text" name="" id="" class="input input--regular">
            </div>
            <table class="table">
                <thead class="thead">
                    <tr class="thead__tr">
                        <th class="thead__th">foto de perfil</th>
                        <th class="thead__th">primer nombre</th>
                        <th class="thead__th">primer apellido</th>
                        <th class="thead__th">tipo de usuario</th>
                        <th class="thead__th">correo electrónico</th>
                        <th class="thead__th">estatus</th>
                        <th class="thead__th">acciones</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <?php while ($row = mysqli_fetch_assoc($busqueda)) { ?>
                    <tr class="tbody_tr">
                        <td class="tbody_td"><img src="./controllers/<?php echo $row['foto_de_perfil'] ?>" class="img">
                        </td>
                        <td class="tbody_td" data-label="primer nombre"><?php echo $row["primer_nombre"] ?></td>
                        <td class="tbody_td" data-label="primer apellido"><?php echo $row["primer_apellido"] ?></td>
                        <td class="tbody_td" data-label="tipo de usuario"><?php echo $row["tipo_de_usuario"] ?></td>
                        <td class="tbody_td" data-label="correo electronico"><?php echo $row["correo_electronico"] ?>
                        </td>
                        <td class="tbody_td" data-label="status usuario"><span
                                class="aviso <?php echo $row["estatus_usuario"] ?>"><?php echo $row["estatus_usuario"] ?></span>
                        </td>
                        <td class="tbody_td" data-label="status usuario">
                            <?php echo "<button>Editar</button>" ?>
                            <?php echo "<button>Eliminar</button>" ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <nav class="pagination">
                <?php
                    if($_REQUEST["nume"] == "1") { $_REQUEST["nume"] == "0";
                    } else {
                        if ($pagina > 1)
                        $ant = $_REQUEST["nume"] - 1;
                        echo "<a class='page-link' arial-label='previous' href='gestion-de-usuarios.php?nume=".($pagina-1)."'><span class='sr-only'>Anterior</span></a>";
                        echo "<li class='page-item'><a class='page-link' href='gestion-de-usuarios.php?nume=". ($pagina - 1) ."'>".$ant."</a></li>";}
                        echo "<li class='page-item active'><a class='page-link'>".$_REQUEST["nume"]."</a></li>";
                    $sigui = $_REQUEST["nume"] + 1;
                    $ultima = $num_registros / $registros;
                    if($ultima == $_REQUEST["nume"] + 1){
                        $ultima == "";}
                    if($pagina < $paginas && $paginas > 1)
                        echo "<li class='page-item'><a class='page-link' href='gestion-de-usuarios.php?nume=" . ($pagina + 1) ."'>".$sigui."</a></li>";
                    if($pagina < $paginas && $paginas > 1)    
                    echo "
                    <li><a class='page-item' arial-label='Next' href='gestion-de-usuarios.php?nume=".($pagina + 1)."'><span class='sr-only'>Siguiente</span></a></li>";
                    
                    ?>
                <span>Total de usuarios <?php echo $num_registros; ?></span>
            </nav>
        </div>
    </main>
</body>

<script src="./views/recourses/js/modal.js"></script>
<script defer src="./views/recourses/js/main.js"></script>
<script defer src="./views/recourses/js/modal.js"></script>
</html>