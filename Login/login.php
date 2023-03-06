<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../LandinPage/LandingP.css">
    <link rel="stylesheet" href="../encabezado/encabezado.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/23209197.js"></script>
    <!-- End of HubSpot Embed Code -->
</head>
<?php
            include "../Login/conexion.php";
            include "../controlador/sesion.php";
            ?>

<body>
    <!-- Boton Flotante de WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta" class="BTNWhats1"
        target="_blank"> <i class="fa fa-whatsapp"></i></a>

    <!--Encabezado-->
    <div class="neutro">
        <header class="Todo2">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="pacell">
                    <i class="fas fa-bars"></i>
                </label>
            </nav>
            <div class="Todo1 logo-nav-container">
                <img src="../img/Imagenes LP/logo negroL-ACT JPG.jpg" class="imgEnc">
                <div class="nav-container opcionesE">
                    <li><a class=" espacio1" href="../LandinPage/LandinP.php">Inicio</a></li>
                    <li><a class=" espacio1" href="../q_somos/q_somos.php" id="letras">Quienes<p class="espacioletra1">
                                Somos</p></a></li>
                    <li class="nav-item dropdown rmrdsol">
                        <a class="dropdown-toggle espacio1" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="letras">
                            Servicios
                        </a>
                        <ul class="dropdown-menu ">
                            <li style="position: relative; z-index: 2;"><a class="dropdown-header"
                                    href="../pantalla-escuela/escuela.php">Nivelación Escuela</a></li>
                            <li style="position: relative; z-index: 2;"><a class="dropdown-header"
                                    href="../N Colegio/Ncolegio.php">Nivelación Colegio</a></li>
                            <li><a class="dropdown-header" href="../universidad_Priv/UPriv.php">Nivelación Universidad
                                    Privada</a></li>
                            <li style="position: relative; z-index: 2;"><a class="dropdown-header"
                                    href="../univerdidad_Publi/Upublica.php">Nivelación Universidad Pública</a></li>
                            <li style="position: relative; z-index: 2;"><a class="dropdown-header"
                                    href="../preuni/preuni.php">Preuniversitario</a></li>
                            <li style="position: relative; z-index: 2;"><a class="dropdown-header"
                                    href="../Tesis y proyectos/Tesisyproyec.php">Tesis y Proyectos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown rmrdsol">
                        <a class="dropdown-toggle espacio1" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="letras">
                            Testimonios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="../Testimonios de estudiantes/testimoniosestu.php">Testimonios Estudiantes</a>
                            </li>
                            <li><a class="dropdown-item" href="../t_padres/t_padres.php">Testimonios Padres de
                                    Familia</a></li>
                            <li><a class="dropdown-item" href="../P_Galeria/Pgaleria.php">Galeria</a></li>
                            <li><a class="dropdown-item" href="../Preguntas-Frecuentes/preguntas.php">Preguntas
                                    Frecuentes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown rmrdsol">
                        <a class=" dropdown-toggle espacio1" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="letras">
                            Servicios en línea
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../recupopup/recupopup.php">Recursos Gratis</a></li>
                            <li><a class="dropdown-item" href="../Aula_Virtual/AulaVir.php">Aula Virtual</a></li>
                            <li><a class="dropdown-item"
                                    href="https://www.youtube.com/c/INSTITUTODEENSE%C3%91ANZACONTINUA"
                                    target="_blank">Canal de Youtube</a></li>
                            <li><a class="dropdown-item" href="../recupopup/recupopup.php" target="_blank">Clases
                                    demostrativas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class=" espacio1" href="../blog_temp/blog_temp.php" id="letras">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="espacio1" href="../contactanos/contactanos.php" id="letras">Contacto</a>
                    </li>
                    </nav>
                </div>
            </div>
        </header>
        <div class="header2E">
            <div class="iconosEn">
                <a href="https://www.facebook.com/InstitutodEnsenanzaContinua" class="fb" target="_blank"> <i
                        class="fa fa-facebook"></i></a>
                <a href="https://www.facebook.com/messages/t/103757645603975/" class="fmess" target="_blank"> <i
                        class="fa-brands fa-facebook-messenger" target="_blank"></i></a>
                <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                    class="whats" target="_blank"> <i class="fa fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/iecaaa2021/" class="ig"> <i class="fa fa-instagram"
                        target="_blank"></i></a>
                <a href="https://www.youtube.com/c/INSTITUTODEENSE%C3%91ANZACONTINUA" class="YT" target="_blank"> <i
                        class="fa fa-youtube"></i></a>
                <a href="https://twitter.com/iecaaa2021" class="Twtt" target="_blank"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.tiktok.com/@instituto_enza_continua" class="TTK" target="_blank"> <i
                        class="fa-brands fa-tiktok"></i></a>
            </div>
            <ul>
                <a href="../Login/login.php" style="text-decoration: none;"><button type="button"
                        class="botones2 nopusi">Iniciar sesión</button></a>
            </ul>
            <ul>
                <a href="../Registro/P-registro.php" style="text-decoration: none;"><button type="button"
                        class="botones2">Registrarse</button></a>
            </ul>
            <div id="ctn-icon-search">
                <button type="button" class=" botones3" id="icon-search">Buscar</button>
            </div>
        </div>
    </div>
    <center>
        <div id="ctn-bars-search">
            <input type="text" id="input-Search" placeholder="¿A donde deseas ir?"><i class="fa-regular fa-circle-xmark"
                id="icono-x"></i>
        </div>
    </center>
    <ul id="box-search" style="list-style-type: none;">
        <li><a href="../LandinPage/LandinP.php"><i class="fa-solid fa-magnifying-glass"></i>Inicio</a></li>
        <li><a href="../q_somos/q_somos.php"><i class="fa-solid fa-magnifying-glass"></i>Quienes Somos</a></li>
        <li><a href="../pantalla-escuela/escuela.php"><i class="fa-solid fa-magnifying-glass"></i>Nivelación Escuela</a>
        </li>
        <li><a href="../N Colegio/Ncolegio.php"><i class="fa-solid fa-magnifying-glass"></i>Nivelación Colegio</a></li>
        <li><a href="../universidadPriv/UPriv.php"><i class="fa-solid fa-magnifying-glass"></i>Nivelación Universidad
                Privada</a></li>
        <li><a href="../univerdidadPubli/Upublica.php"><i class="fa-solid fa-magnifying-glass"></i>Nivelación
                Universidad Pública</a></li>
        <li><a href="../preuni/preuni.php"><i class="fa-solid fa-magnifying-glass"></i>Preuniversitario</a></li>
        <li><a href="../Testimonios de estudiantes/testimoniosestu.php"><i
                    class="fa-solid fa-magnifying-glass"></i>Testimonios Estudiantes</a></li>
        <li><a href="../t_padres/t_padres.php"><i class="fa-solid fa-magnifying-glass"></i>Testimonios Padres de
                familia</a></li>
        <li><a href="../P Galeria/Pgaleria.php"><i class="fa-solid fa-magnifying-glass"></i>Galeria</a></li>
        <li><a href="../Preguntas-Frecuentes/preguntas.php"><i class="fa-solid fa-magnifying-glass"></i>Preguntas
                Frecuentes</a></li>
        <li><a href="../recupopup/recupopup.php"><i class="fa-solid fa-magnifying-glass"></i>Recursos Gratis</a></li>
        <li><a href="../AulaVirtual/AulaVir.php"><i class="fa-solid fa-magnifying-glass"></i>Aula Virtual</a></li>
        <li><a href="../blog_temp/blog_temp.php"><i class="fa-solid fa-magnifying-glass"></i>Blog</a></li>
        <li><a href="../contactanos/contactanos.php"><i class="fa-solid fa-magnifying-glass"></i>Contacto</a></li>
    </ul>
    <div id="cover-ctn-search">
    </div>

    <!--Para dar espacio en dispositivos mas pequeños-->
    <div class="padaresplog"></div>

    <!-- Contenedor del cuadro de Login -->
    <div class="containerdelogin" style="margin-top: 10%;">
        <br>
        <div class="login">
            <!-- Img del logo de la empresa y los botones -->
            <div class="imglogo"><img class="imgloglogin" src="../ppInicio/img/logo.jpg" alt=""></div>
            <br>
            <div class="elije">
                <input type="button" value="Estudiante" class="elejido" id="estu">
                <input type="button" value="Profesor" class="elejido" id="profe">
                <input type="button" value="Administrativo" class="elejido" id="admin">
                <input type="button" value="Visita" class="elejido" id="visita">
            </div>
            <br>

            <!-- Formulario, el botón y si olvido su nombre de U/C -->
            <center>
                <form action="" method="POST">

                    <br>
                    <input type="email" name="correo" id="correo" placeholder="Correo electronico" class="datosdeL">
                    <br><br>
                    <input type="password" name="contra" id="contra" placeholder="Contraseña" class="datosdeL">

                    <br>
                    <div class="sesion">
                        <input type="submit" name="entrar" value="Iniciar Sesión" class="boton">
                        <h4><a class="urlbOOL" href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                                style="color: #FF0000;">¿Olvido su nombre de usuario o contraseña?</a></h4>
                    </div>
                </form>
            </center>
            <!-- Las redes sociales y enlace para el registro -->
            <div class="redes">
                <a href="https://www.facebook.com/InstitutodEnsenanzaContinua" target="_blank"><img
                        src="../diagGratis/img/facebook.png" alt="" class="icono"></a>
                <a href="https://www.facebook.com/messages/t/103757645603975/"><img
                        src="../diagGratis/img/mensajero.png" alt="" class="icono"></a>
                <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                    target="_blank"><img src="../diagGratis/img/whatsapp.png" alt="" class="icono"></a>
                <a href="https://www.instagram.com/iecaaa2021/" target="_blank"><img
                        src="../diagGratis/img/instagram.png" alt="" class="icono"></a>
                <a href="https://www.youtube.com/c/INSTITUTODEENSE%C3%91ANZACONTINUA" target="_blank"><img
                        src="../diagGratis/img/youtube.png" alt="" class="icono"></a>
                <a href="https://twitter.com/iecaaa2021" target="_blank"><img src="../diagGratis/img/gorjeo.png" alt=""
                        class="icono"></a>
                <a href="https://www.tiktok.com/@instituto_enza_continua" target="_blank"><img
                        src="../diagGratis/img/tik-tok.png" alt="" class="icono"></a>
            </div>
            <div class="registro">
                <p>Si no tienes cuenta registrate <a href="../Registro/P-registro.php" class="enlace"
                        target="_blank">AQUÍ</a>
                </p>
            </div>
        </div>
        <br>
    </div>
    <!-- Para seleccionar en los botones y que cambien de color -->
    <script>
    var boton1 = document.getElementById("estu");
    var boton2 = document.getElementById("profe");
    var boton3 = document.getElementById("admin");
    var boton4 = document.getElementById("visita");

    boton1.onclick = function() {
        boton1.style.background = "#1DA1F2";
        boton2.style.background = "";
        boton3.style.background = "";
        boton4.style.background = "";
    }
    boton2.onclick = function() {
        boton1.style.background = "";
        boton2.style.background = "#1DA1F2";
        boton3.style.background = "";
        boton4.style.background = "";
    }
    boton3.onclick = function() {
        boton1.style.background = "";
        boton2.style.background = "";
        boton3.style.background = "#1DA1F2";
        boton4.style.background = "";
    }
    boton4.onclick = function() {
        boton1.style.background = "";
        boton2.style.background = "";
        boton3.style.background = "";
        boton4.style.background = "#1DA1F2";
    }
    </script>
</body>
<footer>
    <iframe src="../piedepag/footer.php" frameborder="0"></iframe>
</footer>
<script src="../encabezado/encabezado.js"></script>

</html>