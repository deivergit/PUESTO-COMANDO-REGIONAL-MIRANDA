<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Gobernación, Miranda, herramienta" />
    <meta name="description" content="Secretaria Coordinadora de Política Social y Misiones Hugo Chávez" />
    <meta name="author" content="Deiver Martinez" />
    <meta name="copyright"
        content="Equipo de Tecnología de la Secretaria Coordinadora de Política Social y Misiones Hugo Chávez" />
    <title>PUESTO COMANDO HUGO CHAVEZ</title>
    <link rel="icon" type="image/svg" sizes="32x32" href="./views/recourses/icons/pcrm.ico">
    <link rel="stylesheet" href="./views/recourses/css/components/normalize.css">
    <link rel="stylesheet" href="./views/recourses/css/index.css">
    <script type="application/ld+json" defer>
        {
            "@context": "https://schema.org",
            "@type": "GovernmentOrganization",
            "name": "Secretaria coordinadora de política social y misiones",
            "alternateName": "Secretaria de política social",
            "url": "",
            "logo": ""
        }
    </script>
</head>

<body>
    <main class="grid-container">
        <div class="card left-card">
            <div class="left-card__box">
                <h2 class="left-card__title">Iniciar sesión</h2>
                <form class="form" id="form-login" method="POST" action="./controllers/login-controller.php">
                    <div class="form__items">
                        <img src="./views/recourses/icons/user-black.svg" alt="icono" class="form__icon">
                        <input type="text" placeholder="Correo electrónico" name="correo_electronico"
                            class="form__input" id="email" autocomplete="off">
                    </div>
                    <span class="warning warning-email hidden">Campo vacío</span>
                    <span class="hidden">Correo electronico o contraseña invalida</span>

                    <div class="form__items">
                        <img src="./views/recourses/icons/lock.svg" alt="icono" class="form__icon">
                        <input type="password" placeholder="Contraseña" name="contraseña" class="form__input"
                            id="password" autocomplete="off">
                        <img src="./views/recourses/icons/show.svg" alt="icono" class="form__icon--right" id="boton">
                    </div>
                    <span class="warning warning-password hidden">Campo vacío</span>
                    <span class="warning warning-password-min hidden">La contraseña debe contener minimo 8
                        caracteres</span>
                    <span class="warning mayus-active hidden">Las mayúsculas están activadas</span>

                    <button class="button" value="Entrar" id="ingresar" name="btningresar" type="submit">Entrar</button>
                </form>
            </div>
            <footer class="footer">
                <p class="footer__paragraph">
                    Desarrollado por el equipo de Tecnología del Puesto de Comando Regional Miranda. Copyright © 2023
                </p>
                <p class="footer__paragraph">Versión 1.0 <img src="./views/recourses/icons/git.svg" alt="logo git" class="footer__icon"></p>
            </footer>
        </div>
        <div class="card right-card">
            <div class="right-card__box">
                <h1 class="right-card__title">PUESTO DE COMANDO REGIONAL MIRANDA</h1>
                <p class="right-card__cite"><img src="./views/recourses/icons/quote-alt-left.svg" alt="" class="quote"> El poder de la conciencia de un pueblo, la
                    conciencia de un colectivo, es el más poderoso
                    instrumento unitario indestructible, unidad
                    alimentada por la conciencia <img src="./views/recourses/icons/quote-alt-right.svg" alt="" class="quote"></p>
                <span class="right-card__author">Hugo Chávez</span>
                <img src="./views/recourses/icons/in.svg" alt="" srcset="" class="icon-in">
            </div>
        </div>
    </main>
    <script src="./views/recourses/js/validationlogin.js"></script>
</body>
</html>