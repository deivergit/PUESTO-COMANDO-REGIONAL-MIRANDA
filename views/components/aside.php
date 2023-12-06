<aside class="aside" id="header">
    <div class="user-information">
        <img src="./controllers/<?php echo $foto_de_perfil; ?>" class="user-information__user-photo"
            alt="foto de perfil">
        <img src="./views/recourses/icons/circle.svg" alt="circle" class="user-information__circle">
    </div>
    <div class="usernames">
        <span class="usernames__first-name"><?php echo $primer_nombre; ?></span>
        <span class="usernames__last-name"><?php echo $primer_apellido; ?></span>
    </div>
    <span class="type_user"><?php echo $tipo_de_usuario; ?></span>
    <nav class="main_nav">
        <ul class="list">
            <li class="list__item">
                <a href="inicio.php" class="nav__link <?php echo $boton_1 ?>">
                    <img src="./views/recourses/icons/dashboard.svg" class="list__icon" alt="icono"><span
                        class="list__text">Inicio</span>
                </a>
            </li>
            <li class="list__item">
                <div class="nav__link list__button--click">
                    <img src="./views/recourses/icons/envelope.svg" class="list__icon" alt="icono">
                    <span class="list__text">Despacho</span>
                    <img src="./views/recourses/icons/arrow.svg" class="list__icon list__icon--arrow" alt="icono">
                </div>
                <ul class="nav__list--secondary">
                    <li class="list__item">
                        <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Indicadores</span>
                        </a>
                    </li>
                    <li class="list__item">
                        <a href="cartas.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Cartas</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="list__item">
                <div class="nav__link list__button--click">
                    <img src="./views/recourses/icons/group.svg" class="list__icon" alt="icono">
                    <span class="list__text">RRHH</span>
                    <img src="./views/recourses/icons/arrow.svg" class="list__icon" alt="icono">
                </div>
                <ul class="nav__list--secondary">
                    <li class="list__item">
                        <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Indicadores</span>
                        </a>
                        <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Trabajadores</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list__item">
                <div class="nav__link list__button--click">
                    <img src="./views/recourses/icons/desktop.svg" class="list__icon" alt="icono">
                    <span class="list__text">Informatica</span>
                    <img src="./views/recourses/icons/arrow.svg" class="list__icon" alt="icono">
                </div>
                <ul class="nav__list--secondary">
                    <li class="list__item">
                        <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Incidencias</span>
                        </a>
                    </li>
                    <li class="list__item">
                        <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_4 ?>">
                            <span class="list__text">Inventario</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="list__item">
                <a href="gestion-de-usuarios.php" class="nav__link <?php echo $boton_3 ?>">
                    <img src="./views/recourses/icons/group.svg" class="list__icon" alt="icono"><span
                        class="list__text">Gestión de
                        usuarios</span>
                </a>
            </li>
            <li class="list__item">
                <a href="./controllers/logout.php" class="nav__link <?php echo $boton_4 ?>"><img
                        src="./views/recourses/icons/power-off.svg" class="list__icon" alt="icono"><span
                        class="list__text">Cerrar sesión</span></a>
            </li>
        </ul>
    </nav>
</aside>