<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: ../Login/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos Gratis</title>
    <link rel="stylesheet" href="recursos.css">
    <link rel="stylesheet" href="../LandinPage/LandingP.css">
    <link rel="stylesheet" href="../encabezado/encabezado.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!--Encabezado-->
    <div class="neutro">
        <header class="Todo2">
            <div class="Todo1 logo-nav-container">

                <div class="nav-container encuser">
                    <?php
                    echo "Hola" ." " . $_SESSION["nombre"];
                    ?>
                    <li class="nav-item">
                        <a class="espacioRar" href="../recursos/recursos.php" id="letras">Recursos Gratis</a>
                    </li>
                    <li class="nav-item">
                        <a class="espacioRar" href="../c_demostrativas/c_demo.php" id="letras">Clases demostrativas</a>
                    </li>

                    </nav>
                </div>
            </div>
        </header>
        <div class="headerrecu">
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
                <a href="../controlador/cerrar.php" style="text-decoration: none;"><button type="button"
                        class="solopael">Cerrar sesión</button></a>
            </ul>
            <div id="ctn-icon-search">
                <button type="button" class="botones3max" id="icon-search">Buscar</button>
            </div>
            <img src="../img/Imagenes LP/logo negroL-ACT JPG.jpg" class="imgredemo">
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
    <div class="pacellderecur"></div>


    <p class="recugratis" style="margin-top: 11%">Recursos Gratis</p>
    <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta" class="wasa"
        target="_blank"> <i class="fa fa-whatsapp"></i></a>
    <!-- metodología -->
    <center>
        <div class="metodologíadecole">
            <h2>Conoce nuestra metodología</h2>
        </div>
    </center>
    <div class="containerpametodologia">
        <div class="row">
            <div class="col cuadrodemeto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <p
                                style="font-size:20px; justify-content: space-evenly; font-family: Poppins; margin-bottom: 1px; color:#1DA1F2;">
                                Cubrir vacíos acádemicos</p>
                            <button class="button collapsed pruebademeto1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <p style="margin-left:40px; margin-top: 10px;"> Asimila</p><img
                                    src="../img/ICONOS/1.1.png" alt="" class="img1demeto1">
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto">Nuestro objetivo es llenar los vacíos
                                académicos generados
                                en años anteriores.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col cuadrodemeto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <p
                                style="font-size:20px; justify-content: space-evenly; font-family: Poppins; margin-bottom: 1px; color:#ff0000;">
                                Desarrollo del razonamiento</p>
                            <button class="button collapsed pruebademeto2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <p style="margin-left:40px; margin-top: 10px;"> Aprende</p><img
                                    src="../img/ICONOS/2.1.png" alt="" class="img2demeto2">
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse "
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto">Nuestra prioridad es fortalecer el razonamiento
                                en
                                lugar de solo memorizar.</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col cuadrodemeto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <p
                                style="font-size:20px; justify-content: space-evenly; font-family: Poppins; margin-bottom: 1px; color:#25D366;">
                                Seguimiento personalizado</p>
                            <button class="button collapsed pruebademeto3" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <p style="margin-left:40px; margin-top: 10px;"> Aplica </p><img
                                    src="../img/ICONOS/3.1.png" alt="" class="img3demeto3">
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto">Nuestras Tutorias son totalmente personalizadas
                                individuales.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <center>
        <div class="frasexd">
            <h3>Mediante nuestro Sistema Revolucionario <b style="color: #FF0000;">A</b>simila, <b
                    style="color: #1DA1F2;">A</b>prende y
                <b style="color: #25D366;">A</b>plica cubrimos vacíos
                académicos, estimulando el razonamiento,
                a través de un seguimiento individual de cada estudiante.
            </h3>
        </div>
    </center>
    <br>
    <div class="videoxd1">
        <video class="videoxd1" src="../img/RECURSOS GRATIS FINAL PAGINA WEB/RECURSOS GRATIS FINAL PAGINA WEB.mp4"
            autoplay loop controls></video>
    </div>
    <!--Videos gratis-->
    <h1 class="vidg">Videos Gratis</h1>
    <div class="cursosd">
        <center>
            <div class="titesc_dem">Escuela</div>
        </center>
        <br><br><br>
        <div class="containercl">
            <div class="row">
                <div class="col fila1materias">
                    <img src="../img/ICONOS/abaco.png" alt="" width="150px" height="150px" class="paramaterias1">
                    <br><br>
                    <p>Matemática</p>
                    <h5><a class="videsc"><video
                                src="../img/videosescuela/MATEMÁTICA- OPERACIONES CON DECIMALES - PARTE 4.mp4" controls
                                poster="../img/miniaturasrecu/9.png" style="width: 350px;"></video> </a></h5>

                </div>
                <div class="col fila1materias">
                    <img src="../img/ICONOS/biblioteca.png" alt="" width="150px" height="150px" class="paramaterias1">
                    <br><br>
                    <p>Lenguaje</p>
                    <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls poster=""
                                style="width: 350px;"></video> </a></h5>
                </div>
                <div class="col fila1materias">
                    <img src="../img/ICONOS/libro-de-ciencias (1).png" alt="" width="150px" height="150px"
                        class="paramaterias1">
                    <br><br>
                    <p>Ciencias Naturales</p>
                    <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls poster=""
                                style="width: 350px;"></video> </a></h5>
                </div>
            </div>
        </div>
        <br>
        <center>
            <div class="titcol_dem">Colegio</div>
        </center><br><br>
        <div class="containercl3">
            <div class="row">
                <div class="col fila3materias">
                    <img src="../img/ICONOS/abaco.png" alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p>Mátematica</p>
                    <h5><a class="videsc"><video
                                src="../img/videosescuela/MATEMÁTICA- OPERACIONES CON DECIMALES - PARTE 4.mp4" controls
                                poster="../img/miniaturasrecu/1.png" style="width: 350px;"></video> </a></h5>

                </div>
                <div class="col fila3materias">
                    <img src="../img/ICONOS/relatividad.png" alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p>Física</p>
                    <h5><a class="videsc"><video src="../img/videosColegio/FÍSICA - MRUV - PARTE 1.mp4" controls
                                poster="" style="width: 350px;"></video> </a></h5>
                </div>

                <div class="col fila3materias">
                    <img src="../img/ICONOS/matraz.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>

                    <p>Química</p>
                    <h5><a class="videsc"><video
                                src="../img/videosColegio/QUÍMICA - DESCOMPOSICIÓN PORCENTUAL - PARTE 3.mp4" controls
                                poster="" style="width: 350px;"></video> </a></h5>

                </div>
            </div>
        </div>
        <br>
        <center>
            <div class="tituni_dem">Universidad</div>
        </center><br><br>
        <div class="containercl2">
            <div class="row">
                <div class="col fila2materias">
                    <img src="../img/ICONOS/integral.png" alt="" width="150px" height="150px" class="paramaterias2">
                    <br><br>
                    <p>Cálculo Diferencial</p>
                    <h5><a class="videsc"><video
                                src="../img/videosuniversidad/2 MATEMÁTICA- CALCULO INTEGRAL - INTEGRALES - DEMOSTRATIVO.mp4"
                                controls poster="" style="width: 350px;"></video> </a></h5>

                </div>
                <div class="col fila2materias">
                    <img src="../preuni/img/matematicas.png" alt="" width="150px" height="150px" class="paramaterias2">
                    <br><br>
                    <p>Física-Energia Mecánica</p>
                    <h5><a class="videsc"><video src="/img/videosuniversidad/FÍSICA - ENERGIA MECANICA - PARTE 2.mp4"
                                controls poster="" style="width: 350px;"></video> </a></h5>
                </div>

            </div><br><br>
            <div class="cursosd">
                <center>
                    <div class="titesc_dem">Preuniversitario</div>
                </center>
                <br><br><br>
                <div class="containercl">
                    <div class="row">
                        <div class="col fila1materias">
                            <img src="../preuni/img/conferencias (1).png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>

                            <p>Razonamiento Númerico</p>
                            <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls
                                        poster="" style="width: 350px;"></video> </a></h5>

                        </div>
                        <div class="col fila1materias">
                            <img src="../img/ICONOS/pensamiento-logico.png " alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>
                            <p>Razonamiento Abstracto</p>
                            <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls
                                        poster="" style="width: 350px;"></video> </a></h5>

                        </div>
                        <div class="col fila1materias">
                            <img src="../img/iconos clasesdem/persona.png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>
                            <p>Razonamiento Verbal</p>
                            <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls
                                        poster="" style="width: 350px;"></video> </a></h5>


                        </div>
                    </div>
                </div>
                <br>
                <center>
                    <div class="tituni_dem">Inglés</div>
                </center><br><br>
                <div class="containercl2">
                    <div class="row">
                        <div class="col fila2materias">
                            <img src="../img/ICONOS/eng.png" alt="" width="150px" height="150px" class="paramaterias2">
                            <br><br>
                            <p>Inglés</p>
                            <h5><a class="videsc"><video src="../img/VIDEO 29-9-2022/29-9-2022 (1).mp4" controls
                                        poster="" style="width: 350px;"></video> </a></h5>

                        </div>

                    </div><br><br>
                    <!--Materailes Gratis-->
                    <h1 class="vidg">Materiales Gratis</h1>
                    <div class="cursosd">
                        <center>
                            <div class="titesc_dem">Escuela</div>
                        </center>
                        <br><br><br>
                        <div class="containercl">
                            <div class="row">
                                <div class="col fila1materias">
                                    <img src="../img/ICONOS/abaco.png" alt="" width="150px" height="150px"
                                        class="paramaterias1">
                                    <br><br>
                                    <h3><a class="videsc"> Matemática </a></h3>
                                    <iframe class="iframe" src="../pdfsrecursos/OPERACIONES CON FRACCIONES.pdf"
                                        frameborder="0"></iframe>
                                </div>
                                <div class="col fila1materias">
                                    <img src="../img/ICONOS/biblioteca.png" alt="" width="150px" height="150px"
                                        class="paramaterias1">
                                    <br><br>
                                    <h3><a class="videsc"> Lenguaje </a></h3>
                                    <h4 style="color: #ff0000">Sección en Proceso</h4>
                                    <iframe class="iframe" src="" frameborder="0"></iframe>

                                </div>
                                <div class="col fila1materias">
                                    <img src="../img/ICONOS/libro-de-ciencias (1).png" alt="" width="150px"
                                        height="150px" class="paramaterias1">
                                    <br><br>
                                    <h3> <a class="videsc">Ciencias Naturales</a> </h3>
                                    <h4 style="color: #ff0000">Sección en Proceso</h4>
                                    <iframe class="iframe" src="" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <br>
                        <center>
                            <div class="titcol_dem">Colegio</div>
                        </center><br><br>
                        <div class="containercl3">
                            <div class="row">
                                <div class="col fila3materias">
                                    <img src="../img/ICONOS/abaco.png" alt="" width="150px" height="150px"
                                        class="paramaterias3">
                                    <br><br>
                                    <h3> <a class="videsc">Mátematica</a> </h3>
                                    <iframe class="iframe" src="../pdfsrecursos/LEY DE SIGNOS.pdf"
                                        frameborder="0"></iframe>

                                </div>
                                <div class="col fila3materias">
                                    <img src="../img/ICONOS/relatividad.png" alt="" width="150px" height="150px"
                                        class="paramaterias3">
                                    <br><br>

                                    <h3> <a class="videsc">Física</a> </h3>
                                    <iframe class="iframe" src="../pdfsrecursos/MCU.pdf" frameborder="0"></iframe>

                                </div>

                                <div class="col fila3materias">
                                    <img src="../img/ICONOS/matraz.png" alt="" width="150px" height="150px"
                                        class="paramaterias3">
                                    <br><br>

                                    <h3> <a class="videsc">Química</a> </h3>
                                    <iframe class="iframe" src="../pdfsrecursos/1 COMPOSICON PORCENTUAL.pdf"
                                        frameborder="0"></iframe>

                                </div>
                            </div>
                        </div>
                        <br>
                        <center>
                            <div class="tituni_dem">Universidad</div>
                        </center><br><br>
                        <div class="containercl2">
                            <div class="row">
                                <div class="col fila2materias">
                                    <img src="../img/ICONOS/integral.png" alt="" width="150px" height="150px"
                                        class="paramaterias2">
                                    <br><br>
                                    <h3> <a class="videsc">Mátematica-Limites</a> </h3>
                                    <iframe class="iframe" src="../pdfsrecursos/LIMITES.pdf" frameborder="0"></iframe>

                                </div>
                                <div class="col fila2materias">
                                    <img src="../preuni/img/matematicas.png" alt="" width="150px" height="150px"
                                        class="paramaterias2">
                                    <br><br>
                                    <h3> <a class="videsc">Física-Energias</a> </h3>
                                    <iframe class="iframe" src="../pdfsrecursos/ENERGÍAS PROBLEMAS.pdf"
                                        frameborder="0"></iframe>
                                </div>

                            </div><br><br>
                            <div class="cursosd">
                                <center>
                                    <div class="titesc_dem">Preuniversitario</div>
                                </center>
                                <br><br><br>
                                <div class="containercl">
                                    <div class="row">
                                        <div class="col fila1materias">
                                            <img src="../preuni/img/conferencias (1).png" alt="" width="150px"
                                                height="150px" class="paramaterias1">
                                            <br><br>

                                            <h3> <a class="videsc">Razonamiento Númerico</a> </h3>
                                            <iframe class="iframe" src="../pdfsrecursos/Sucesiones.pdf"
                                                frameborder="0"></iframe>

                                        </div>
                                        <div class="col fila1materias">
                                            <img src="../img/ICONOS/pensamiento-logico.png" alt="" width="150px"
                                                height="150px" class="paramaterias1">
                                            <br><br>
                                            <h3> <a class="videsc">Razonamiento Abstracto</a> </h3>
                                            <iframe class="iframe" src="../pdfsrecursos/Matrices gráficas.pdf"
                                                frameborder="0"></iframe>

                                        </div>
                                        <div class="col fila1materias">
                                            <img src="../preuni/img/007-graphic-1.png" alt="" width="150px"
                                                height="150px" class="paramaterias1">
                                            <br><br>

                                            <h3> <a class="videsc">Razonamiento Verbal</a> </h3>
                                            <iframe class="iframe" src="../pdfsrecursos/Principio de coherencia.pdf"
                                                frameborder="0"></iframe>


                                        </div>
                                    </div>
                                </div>
                                <br>
                                <center>
                                    <div class="tituni_dem">Inglés</div>
                                </center><br><br>
                                <div class="containercl2">
                                    <div class="row">
                                        <div class="col fila2materias">
                                            <img src="../img/ICONOS/eng.png" alt="" width="150px" height="150px"
                                                class="paramaterias2">
                                            <br><br>
                                            <h3> <a class="videsc">Inglés</a> </h3>
                                            <iframe style="width: 90%;" src="../pdfsrecursos/TAG QUESTIONS.pdf"
                                                frameborder="0"></iframe>
                                        </div>

                                    </div>
                                    <br><br>
                                    <!--años de experiencia-->
                                    <font color="#FF0000">
                                        <div class="containerLP1 text-center letras6"
                                            style="width: 80%; margin:0 auto; ">
                                            <div class="row ">
                                                <div class="col colXd1">
                                                    <p> Años de Experiencia</p>
                                                    <p>16</p>
                                                </div>
                                                <div class="col colXd">
                                                    <p> Estudiantes</p>
                                                    <p>+1,435</p>
                                                </div>
                                                <div class="col colXd">
                                                    <p> Garantizado</p>
                                                    <p>100%</p>
                                                </div>
                                                <div class="col colXd">
                                                    <p> Aprobados</p>
                                                    <p>+1,435</p>
                                                </div>
                                                <div class="col colXd">
                                                    <p> Personalizado</p>
                                                    <p>100%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </font>
                                    <!--Eslogan Nivelate Azul-->
                                    <div>
                                        <p style="color:#1DA1F2; font-size: 30px; text-align: center;">NIVÉLATE, APRENDE
                                            Y APRUEBA SIN PROBLEMAS TODAS TUS MATERIAS</p>
                                        <p style="color:#1DA1F2; font-size: 20px;text-align: center;">100% GARANTIZADO -
                                            PERSONALIZADO </p>
                                        <p style="color:#1DA1F2; font-size: 20px; text-align: center;">16 AÑOS DE
                                            EXPERIENCIA</p>
                                        <h4 style="color:#FF0000; text-align: center;">Contáctenos para una asesoría
                                            profesional:</h4>
                                        <h4 style=" text-align: center;">0992648069</h4><img class="whats11"
                                            src="../img/005-whatsapp.png" alt="..." width="50" height="50">
                                    </div>

                                    <!--Final-->
                                    <br>
                                    <div class="final2">
                                        <img class="imgRecu"
                                            src="../img/HORIZXONTALE GRUPOS DE ESTUDIANTES/ESTUDIANTES-GRUPO-ENVIAR-COMENTARIOS.png"
                                            alt="">
                                        <div class="col-sm-5 text-light">

                                            <div class="card formulario">
                                                <div class="card-header" style=" text-align: center;">
                                                    Déjanos un comentario
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="" class="form label">Nombres:</label>
                                                        <input type="text" name="nombre" id="nombres"
                                                            class="form control" placeholder="Nombre"
                                                            aria-describedby="helId">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form label">Tu correo:</label>
                                                        <input type="mail" name="correo" id="correo"
                                                            class="form control" placeholder="@hotmail.com"
                                                            aria-describedby="helId">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form label">Pregunta:</label>
                                                        <textarea class="preguuu" name="pregunta" id="pregunta"
                                                            cols="40" rows="4"></textarea>
                                                    </div class="mb-31">
                                                    <button class="buttonT_Ermrd" id="enviarwasa"
                                                        type="button">Enviar</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!--Preguntas frecuentes-->
                                    <div class="PregfRECUPu2">
                                        <hr>
                                        <h4 class="PreguntULP2" style="color: white;">Despeja tus inquietudes <a
                                                href="../Preguntas-Frecuentes/preguntas.php" style="color: #fff;"><b>
                                                    ->AQUÍ<-</b></a>
                                        </h4>
                                        <hr>
                                    </div>
                                    <script>
                                    var botonwasa = document.querySelector("#enviarwasa");
                                    botonwasa.addEventListener("click", enviarwasa);

                                    function enviarwasa() {
                                        let nombres = document.querySelector("#nombres").value;
                                        let correo = document.querySelector("#correo").value;
                                        let pregunta = document.querySelector("#pregunta").value;
                                        let url = "https://api.whatsapp.com/send?phone=593992648069&text=Nombres: %0A" +
                                            nombres + "%0A%0ACorreo: %0A" + correo + "%0A%0APregunta: %0A" + pregunta;
                                        window.open(url);
                                    }
                                    </script>
</body>
<footer>
    <iframe src="../piedepag/footer.php"></iframe>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<script src="../encabezado/encabezado.js"></script>

</html>