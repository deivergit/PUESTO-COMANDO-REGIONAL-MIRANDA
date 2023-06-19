<?php

    # GENERAL FILES
    require_once "./config/database.php";

    # USER SESSION
    session_start();
    
?>
<button class="button button--save button-modal" id="abrirModal" title="Agregar usuario"><img
        src="assets/icons/plus.svg" alt="icono"></button>

</div>
<dialog id="ventanaModal" class="modal">
    <form class="form" enctype=multipart/form-data method="POST" action="./controllers/agregar-usuarios-controller.php">
        <h1 class="title">Crear cuenta de usuario</h1>
        <img class="icon cerrar" src="assets/icons/x.svg">
        <h2 class="subtitle">Datos personales del empleado</h2>
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
            <button>Cancelar</button>
        </div>
    </form>
</dialog>
</div>