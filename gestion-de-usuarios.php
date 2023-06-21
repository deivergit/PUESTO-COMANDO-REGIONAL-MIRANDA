<?php

# PAGE
$page_title = "Gestión de usuarios";

# BAR LEYEND
$item_one = "Gestión de usuarios";
$item_two = "Lista de usuarios / Agregar usuario";

?>
<!DOCTYPE html>
<html lang="es">
<?php include ("./views/components/head.php"); ?>
<link rel="stylesheet" href="./views/recourses/css/inicio.css">
<link rel="stylesheet" href="./views/recourses/css/components/form.css">
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
                include("./views/pages/gestion-de-usuarios.php");
            ?>
            <table>
                <thead></thead>
                <tbody>
                    <?php
                    
                    ?>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
    </main>
</body>
<script>
    document.getElementById("btnMore").onclick = function () {
        funcionparaclonareldivconsuscampos()
    };

    function funcionparaclonareldivconsuscampos() {

        //contar las clases para el correlativo de agregados dinamicos

        var cantidefilasadd = 0
        var temporalcant = document.getElementById("contador").value

        var temporalcantnumerico = temporalcant * 1
        cantidefilasadd = document.getElementsByClassName("contarnuevafila").length;

        var i;

        if (temporalcant > cantidefilasadd) {
            i = temporalcantnumerico + 1;
        } else {
            i = cantidefilasadd + 1
        }
        temporalcant = i
        document.getElementById("contador").value = temporalcant

        // acá clonas el div con todos los campos
        var divconcamposcopiados = document.getElementById("divquesevaacopiar")
        divconcamposcopiados = divconcamposcopiados.cloneNode(true);

        console.log(divconcamposcopiados)

        var cadena = document.getElementById("divquesevaacopiar").outerHTML
        console.log(" cadena " + cadena)

        var elementocreado = document.createElement("div");
        var elementocreadodos = document.createElement("div");



        var creamosundivdentrodeldivdondesevaamostrar = '';
        creamosundivdentrodeldivdondesevaamostrar += '<div id="nuevoscampos' + i +
            '" class="contarnuevafila" ><br><br> ';
        creamosundivdentrodeldivdondesevaamostrar += '<button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove" onClick="funcioneliminar(this.id)">X</button> ' + cadena;
        creamosundivdentrodeldivdondesevaamostrar += '</div> ';


        elementocreado.innerHTML = creamosundivdentrodeldivdondesevaamostrar

        document.getElementById('divdondeapareceraeldivcopiado').appendChild(elementocreado);

        i++

    }

    function funcioneliminar(elidobtenido) {
        document.getElementById("nuevoscampos" + elidobtenido).remove();
    } </script>
    
    <script>
    document.getElementById("btnMore2").onclick = function () {
        funcionparaclonareldivconsuscampos()
    };

    function funcionparaclonareldivconsuscampos() {

        //contar las clases para el correlativo de agregados dinamicos

        var cantidefilasadd = 0
        var temporalcant = document.getElementById("contador").value

        var temporalcantnumerico = temporalcant * 1
        cantidefilasadd = document.getElementsByClassName("contarnuevafila").length;

        var i;

        if (temporalcant > cantidefilasadd) {
            i = temporalcantnumerico + 1;
        } else {
            i = cantidefilasadd + 1
        }
        temporalcant = i
        document.getElementById("contador").value = temporalcant

        // acá clonas el div con todos los campos
        var divconcamposcopiados = document.getElementById("divquesevaacopiar")
        divconcamposcopiados = divconcamposcopiados.cloneNode(true);

        console.log(divconcamposcopiados)

        var cadena = document.getElementById("divquesevaacopiar").outerHTML
        console.log(" cadena " + cadena)

        var elementocreado = document.createElement("div");
        var elementocreadodos = document.createElement("div");



        var creamosundivdentrodeldivdondesevaamostrar = '';
        creamosundivdentrodeldivdondesevaamostrar += '<div id="nuevoscampos' + i +
            '" class="contarnuevafila" ><br><br> ';
        creamosundivdentrodeldivdondesevaamostrar += '<button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove" onClick="funcioneliminar(this.id)">X</button> ' + cadena;
        creamosundivdentrodeldivdondesevaamostrar += '</div> ';


        elementocreado.innerHTML = creamosundivdentrodeldivdondesevaamostrar

        document.getElementById('divdondeapareceraeldivcopiado').appendChild(elementocreado);

        i++

    }

    function funcioneliminar(elidobtenido) {
        document.getElementById("nuevoscampos" + elidobtenido).remove();
    } </script>
<script src = "./views/recourses/js/main.js" >
</script>
<script src="./views/recourses/js/modal.js"></script>


</html>