<dialog id="dialog" class="modal">
    <form class="form" enctype=multipart/form-data method="POST" action="./controllers/agregar-usuarios-controller.php">
        <div class="box">
            <h1>Crear cuenta de usuario</h1>
            <img class="icon_cerrar" src="./views/recourses/icons/x.svg" id="icon-close">
        </div>

        <h2 class="subtitle">Datos personales del empleado</h2>

        <div class="box-input box-input--regular">
            <label for="parroquia" class="label">foto_de_perfil<span class="asterisco">*</span></label>
            <input type="file" class="input input--regular" name="foto_de_perfil" id="primer_nombre" autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="primer_nombre" class="label">Primer nombre<span class="asterisco">&nbsp;*</span></label>
            <input type=text class="input input--regular" name="primer_nombre" id="primer_nombre" autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="primer_apellido" class="label">Primer apellido<span class="asterisco">&nbsp;*</span></label>
            <input type=text class="input input--regular" name="primer_apellido" id="primer_apellido"
                autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="estatus_usuario" class="label">Estatus del usuario<span class="asterisco">&nbsp;*</span></label>
            <select class="input input--regular" id="parroquia" name="tipo_de_usuario">
                <option selected disabled>------SELECCIONE------</option>
                <option value="ACTIVO">ACTIVO</option>
                <option value="INACTIVO">INACTIVO</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label class="label" for="correo_electronico">Correo electrónico<span
                    class="asterisco">&nbsp;*</span></label>
            <input type="email" class="input input--regular" autocomplete="off" id="correo_electronico"
                name="correo_electronico">
        </div>

        <div class="box-input box-input--regular">
            <label class="label">Contraseña<span class="asterisco">&nbsp;*</span></label>
            <input type="text" class="input input--regular" name="contraseña">
        </div>


        <div class="box-input box-input--regular">
            <label for="parroquia" class="label">Tipo de usuario<span class="asterisco">*</span></label>
            <select class="input input--regular" id="parroquia" name="tipo_de_usuario">
                <option selected disabled>------SELECCIONE------</option>
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="ESTANDAR">ESTANDAR</option>
            </select>
        </div>

        <div class="botones">
            <button>Guardar</button>
            <button id="close">Cancelar</button>
        </div>
    </form>
</dialog>