<?php

if (!empty($_REQUEST["nume"])){ $_REQUEST["nume"] = $_REQUEST["nume"];} else { $_REQUEST["nume"] = '1';}
            if ($_REQUEST["nume"] == "") {$_REQUEST["nume"] = "1";}
            $usuarios = mysqli_query($conn, "SELECT * FROM cartas
            INNER JOIN documentos_de_identidad ON cartas.id_carta = documentos_de_identidad.id_documento_de_identidad
            inner join direcciones_de_habitacion ON cartas.id_carta = direcciones_de_habitacion.id_direccion_de_habitacion
            ");
            $num_registros = mysqli_num_rows($usuarios);
            $registros = '3';
            $pagina = $_REQUEST['nume'];
            if(is_numeric($pagina)) 
            $inicio = (($pagina - 1)* $registros);
            else
            $inicio = 0;
            $busqueda = mysqli_query($conn, "SELECT * FROM cartas
            INNER JOIN documentos_de_identidad ON cartas.id_carta = documentos_de_identidad.id_documento_de_identidad
            inner join direcciones_de_habitacion ON cartas.id_carta = direcciones_de_habitacion.id_direccion_de_habitacion LIMIT $inicio, $registros;");
            $paginas = ceil($num_registros/$registros);

?>
<table class="table">
    <thead class="thead">
        <tr class="thead__tr">
            <th class="thead__th">Primer nombre</th>
            <th class="thead__th">Primer apellido</th>
            <th class="thead__th">N° de documento</th>
            <th class="thead__th">Municipio</th>
            <th class="thead__th">Parroquia</th>
            <th class="thead__th">Estatus</th>
            <th class="thead__th">Acciones</th>
        </tr>
    </thead>
    <tbody class="tbody">
        <?php while ($row = mysqli_fetch_assoc($busqueda)) { ?>
        <tr>
            <td><?php echo $row["primer_nombre"];  ?></td>
            <td><?php echo $row["primer_apellido"];  ?></td>
            <td><?php echo $row["numero_de_documento"];  ?></td>
            <td><?php echo $row["municipio"];  ?></td>
            <td><?php echo $row["parroquia"];  ?></td>
            <td><?php echo $row["estatus_de_la_carta"];  ?></td>
            <td><?php echo "<i>Editar</i>"  ?></td>
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
                        echo "<li class='page-item'><a class='page-link' href='cartas.php?nume=" . ($pagina + 1) ."'>".$sigui."</a></li>";
                    if($pagina < $paginas && $paginas > 1)    
                    echo "
                    <li><a class='page-item' arial-label='Next' href='cartas.php?nume=".($pagina + 1)."'><span class='sr-only'>Siguiente</span></a></li>";
                    
                    ?>
    <span>Total de usuarios <?php echo $num_registros; ?></span>
</nav>