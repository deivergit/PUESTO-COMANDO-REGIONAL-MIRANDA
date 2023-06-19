<?php

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