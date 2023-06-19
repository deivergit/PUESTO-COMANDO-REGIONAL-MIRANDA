<aside class="aside" id="header">
    <div class="user-information">
        <img src="./views/recourses/icons/avatar.svg" class="user-information__user-photo" alt="foto de perfil">
        <img src="./views/recourses/icons/circle.svg" alt="circle" class="user-information__circle">
    </div>
    <div class="usernames">
        <span class="usernames__first-name"><?php $primer_nombre ?></span>
        <span class="usernames__last-name"><?php $primer_apellido ?></span>
    </div>
    <span class="type_user"><?php $tipo_de_usuario ?></span>
    <nav class="main_nav">
        <ul class="list">
            <li class="list__item">
                <a href="inicio.php" class="nav__link">
                    <img src="./views/recourses/icons/dashboard.svg" class="list__icon" alt="icono"><span>Inicio</span>
                </a>
            </li>
            <li class="list__item">
                <a href="cartas.php" class="nav__link">
                    <img src="./views/recourses/icons/envelope.svg" class="list__icon" alt="icono"><span>Cartas</span>
                </a>
            </li>
            <li class="list__item">
                <a href="gestion-de-usuarios.php" class="nav__link">
                    <img src="./views/recourses/icons/group.svg" class="list__icon" alt="icono"><span>Gestión de
                        usuarios</span>
                </a>
            </li>
            <li class="list__item">
                <a href="./controllers/logout.php" class="nav__link"><img src="./views/recourses/icons/power-off.svg" class="list__icon"
                        alt="icono"><span>Cerrar sesión</span></a>
            </li>
        </ul>
    </nav>
</aside>