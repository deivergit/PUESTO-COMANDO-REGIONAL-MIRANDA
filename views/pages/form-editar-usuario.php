<div id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <form class="form" method="POST" enctype="multipart/form-data" action="./controllers/editar-usuario-controller.php">
        <input type="text" name="id_usuario" value="<?php echo $row["id_usuario"];?>">
        <img src="./controllers/<?php echo $row["foto_de_perfil"]; ?>" alt="">
        <input type="file" name="foto_de_perfil" accept="image/png" value="<?php echo $row["foto_de_perfil"]?>">
        <input type="text" name="primer_nombre" value="<?php echo $row["primer_nombre"];?>">
        <input type="text" name="primer_apellido" value="<?php echo $row["primer_apellido"];?>">
        <input type="text" name="tipo_de_usuario" value="<?php echo $row["tipo_de_usuario"];?>">
        <input type="text" name="correo_electronico" value="<?php echo $row["correo_electronico"];?>">
        <input type="text" name="estatus_usuario" value="<?php echo $row["estatus_usuario"];?>">
        <input type="password" name="contraseña">
        <input type="submit" value="guardar">
    </form>
</div>