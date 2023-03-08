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
    <link rel="stylesheet" href="../c_demostrativas/c_demo.css">
    <link rel="stylesheet" href="../LandinPage/LandingP.css">
    <link rel="stylesheet" href="../encabezado/encabezado.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Clases Demostrativas</title>
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
    <div class="pacelldeclased"></div>


    <div class="c_demo" style="margin-top: 11%;">Clases Demostrativas</div><br><br><br>
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
                                <p style="margin-left:40px; margin-top: 10px;"> Asimila <img class="pariconCD" src="../img/ICONOS/flecha.png" alt=""></p><img
                                    src="../img/ICONOS/1.1.png" alt="" class="img1demeto1">
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto4">Nuestro objetivo es llenar los vacíos
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
                                <p style="margin-left:40px; margin-top: 10px;"> Aprende  <img class="pariconCD" src="../img/ICONOS/flecha.png" alt=""></p><img
                                    src="../img/ICONOS/2.1.png" alt="" class="img2demeto2">
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse "
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto4">Nuestra prioridad es fortalecer el razonamiento
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
                                <p style="margin-left:40px; margin-top: 10px;"> Aplica  <img class="pariconCD" src="../img/ICONOS/flecha.png" alt=""> </p><img
                                    src="../img/ICONOS/3.1.png" alt="" class="img3demeto3">
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body letrasdemeto4">Nuestras Tutorias son totalmente personalizadas
                                individuales.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="frasexd">
        <h3>Mediante nuestro Sistema Revolucionario <b style="color: #FF0000;">A</b>simila, <b
                style="color: #1DA1F2;">A</b>prende y
            <b style="color: #25D366;">A</b>plica cubrimos vacíos
            académicos, estimulando el razonamiento,
            a través de un seguimiento individual de cada estudiante.
        </h3>
    </div>
    <br>

    <center> <video class="videocdemo" width="800px"
            src="../img/RECURSOS GRATIS FINAL PAGINA WEB/RECURSOS GRATIS FINAL PAGINA WEB.mp4" controls></video>
    </center>

    <div class="cursosd">
        <center>
            <div class="titesc_dem">Escuela</div>
        </center>
        <br><br><br>
        <div class="containercl">
            <div class="row">
                <div class="col fila1materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias1">
                    <br><br>
                    <p class="videsc">Matemática Op con decimales</p>
                    <video controls poster="../img/miniaturas/8.png" style="width: 350px;">
                        <source
                            src="../img/videos2/ESCUELA MP4 ACT/MATEMÁTICA- OPERACIONES CON DECIMALES - PARTE 1.mp4">
                    </video>

                </div>
                <div class="col fila1materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias1">
                    <br><br>
                    <p class="videsc">Matemática Op con decimales pt. 2</p>
                    <video src="../img/videos2/ESCUELA MP4 ACT/MATEMÁTICA- OPERACIONES CON DECIMALES - PARTE 4.mp4"
                        controls poster="../img/miniaturas/9.png" style="width: 350px;"></video>

                </div>
                <div class="col fila1materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias1">
                    <br><br>
                    <p class="videsc">Matemática Op con fraccines</p>
                    <video
                        src="../img/videos2/ESCUELA MP4 ACT/MATEMÁTICA- OPERACIONES CON FRACCIONES - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/10.png" style="width: 350px;"></video>

                </div>
                <div class="col fila1materias">
                    <img src="../img/iconos clasesdem/leyendo.png" alt="" width="150px" height="150px"
                        class="paramaterias1">
                    <br><br>
                    <p class="videsc">Lenguaje</p>
                    <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                        style="width: 350px; height: 200px;"></video>

                </div>
                <div class="col fila1materias">
                    <img src="../img/iconos clasesdem/historia.png" alt="" width="150px" height="150px"
                        class="paramaterias1">
                    <br><br>

                    <p class="videsc">Estudios Sociales</p>
                    <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                        style="width: 350px; height: 200px;"></video>


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
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Sistema de ecuaciones</p>
                    <video src="../img/videos2/COLEGIO MP4 ACT/MATEMT~1(1).mp4" controls
                        poster="../img/miniaturas/12.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Productos notables</p>
                    <video
                        src="../img/videos2/COLEGIO MP4 ACT/MATEMÁTICA- PRODUCTO NOTABLES - BIMONIO AL CUADRADO - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/11.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Factor común</p>
                    <video
                        src="../img/videos2/COLEGIO MP4 ACT/MATEMÁTICA- FACTORIZACIÓN - FACTOR COMÚN - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/6.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Diferencia de cuadrados</p>
                    <video
                        src="../img/videos2/COLEGIO MP4 ACT/MATEMÁTICA- FACTORIZACIÓN - DIFERENCIA DE CUADRADOS - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/5.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Ecuaciones de primer grado</p>
                    <video
                        src="../img/videos2/COLEGIO MP4 ACT/MATEMÁTICA- ECUACIONES - ECUACIONES DE PRIMER GRADO - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/4.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../preuni/img/matematicas.png " alt="" width="150px" height="150px" class="paramaterias3">
                    <br><br>
                    <p class="videsc">Matemática Trimonio de la forma</p>
                    <video
                        src="../img/videos2/COLEGIO MP4 ACT/MATEMÁTICA- FACTORIZACIÓN - TRINOMIO DE LA FORMA - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/7.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../img/iconos clasesdem/quimico.png" alt="" width="150px" height="150px"
                        class="paramaterias3">
                    <br><br>
                    <p class="videsc">Quimica</p>
                    <video src="../img/videos2/COLEGIO MP4 ACT/QUÍMICA - DESCOMPOSICIÓN PORCENTUAL - PARTE 3.mp4"
                        controls poster="../img/miniaturas/13.png" style="width: 350px;"></video>

                </div>

                <div class="col fila3materias">
                    <img src="../img/iconos clasesdem/einstein.png" alt="" width="150px" height="150px"
                        class="paramaterias3">
                    <br><br>

                    <p class="videsc">Física</p>
                    <video src="../img/videos2/COLEGIO MP4 ACT/FÍSICA - MRUV - PARTE 1.mp4" controls
                        poster="../img/miniaturas/1.png" style="width: 350px;"></video>

                </div>
                <div class="col fila3materias">
                    <img src="../img/iconos clasesdem/biologia.png" alt="" width="150px" height="150px"
                        class="paramaterias3">
                    <br><br>

                    <p class="videsc">Biologia</p>
                    <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                        style="width: 350px; height: 200px;"></video>

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
                    <img src="../img/iconos clasesdem/calcular.png" alt="" width="150px" height="150px"
                        class="paramaterias2">
                    <br><br>
                    <p class="videsc">Cálculo Diferencial</p>
                    <video
                        src="../img/videos2/UNIVERSIDAD MP4 ACT/1 MATEMÁTICA- CALCULO DIFERENCIAL- DERIVADAS - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/2.png" style="width: 350px;"></video>

                </div>
                <div class="col fila2materias">
                    <img src="../img/iconos clasesdem/formula.png" alt="" width="150px" height="150px"
                        class="paramaterias2">
                    <br><br>
                    <p class="videsc">Cálculo Integral</p>
                    <video
                        src="../img/videos2/UNIVERSIDAD MP4 ACT/2 MATEMÁTICA- CALCULO INTEGRAL - INTEGRALES - DEMOSTRATIVO.mp4"
                        controls poster="../img/miniaturas/3.png" style="width: 350px;"></video>
                </div>
                <div class="col fila2materias">
                    <img src="../img/iconos clasesdem/gravedad.png" alt="" width="150px" height="150px"
                        class="paramaterias2">
                    <br><br>
                    <p class="videsc">Física</p>
                    <video src="../img/videos2/UNIVERSIDAD MP4 ACT/FÍSICA - ENERGIA MECANICA - PARTE 2.mp4" controls
                        poster="../img/miniaturas/1.png" style="width: 350px;"></video>
                </div>
                <div class="col fila2materias">
                    <img src="../img/iconos clasesdem/laboratorio-medico.png" alt="" width="150px" height="150px"
                        class="paramaterias2">
                    <br><br>
                    <p class="videsc">Quimica</p>
                    <video src="../img/videos2/UNIVERSIDAD MP4 ACT/QUÍMICA - LEY DE LOS GASES - PARTE 1.mp4" controls
                        poster="../img/miniaturas/13.png" style="width: 350px;"></video>
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
                            <img src="../img/iconos clasesdem/cerebro.png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>

                            <p class="videsc">Razonamiento Numérico</p>
                            <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                                style="width: 350px; height: 200px;"></video>

                        </div>
                        <div class="col fila1materias">
                            <img src="../img/iconos clasesdem/razon.png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>
                            <p class="videsc">Razonamiento Lógico</p>
                            <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                                style="width: 350px; height: 200px;"></video>

                        </div>
                        <div class="col fila1materias">
                            <img src="../img/iconos clasesdem/persona.png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>


                            <p class="videsc">Razonamiento Verbal</p>
                            <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                                style="width: 350px; height: 200px;"></video>


                        </div>
                        <div class="col fila1materias">
                            <img src="../img/iconos clasesdem/abstracto.png" alt="" width="150px" height="150px"
                                class="paramaterias1">
                            <br><br>


                            <p class="videsc">Razonamiento Abstracto</p>
                            <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                                style="width: 350px; height: 200px;"></video>


                        </div>
                    </div>
                </div>
                <br>
                <center>
                    <div class="tituni_dem">Inlgés</div>
                </center><br><br>
                <div class="containercl2">
                    <div class="row">
                        <div class="col fila2materias">
                            <img src="../img/ingles/reino-unido.png" alt="" width="150px" height="150px"
                                class="paramaterias2">
                            <br><br>
                            <p class="videsc">Inglés</p>
                            <video src="../img/videos2/coming soon.mp4" controls poster="../img/videos2/coming-soon.png"
                                style="width: 350px; height: 200px;"></video>

                        </div>

                    </div><br><br>




                    <div class="botones10">
                        <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                            target="_blank" class="asac">Asesor Académico <img src="../diagGratis/img/icon whatsapp.png"
                                alt=""></a>


                    </div><br>
                    <!--años de experiencia-->
                    <font color="#FF0000">
                        <div class="containerLP1 text-center letras6" style="width: 80%; margin:0 auto; ">
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
                        <p style="color:#1DA1F2; font-size: 30px; text-align: center;">NIVÉLATE, APRENDE Y APRUEBA SIN
                            PROBLEMAS TODAS
                            TUS MATERIAS</p>
                        <p style="color:#1DA1F2; font-size: 20px;text-align: center;">100% PRÁCTICO Y GARANTIZADO, 16
                            AÑOS DE EXPERIENCIA </p>
                        <h4 style="color:#FF0000; text-align: center;">Contáctenos para una asesoría profesional:</h4>
                        <h4 style=" text-align: center;">0992648069</h4><img class="whats11"
                            src="../img/005-whatsapp.png" alt="..." width="50" height="50">
                    </div>

                    <!--Final-->
                    <br>
                    <div class="final223">
                        <img class="imgDemo"
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
                                        <input type="text" name="nombre" id="nombres" class="form control pacuadro"
                                            placeholder="Nombre" aria-describedby="helId">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form label">Tu correo:</label>
                                        <input type="mail" name="correo" id="correo" class="form control pacuadro2"
                                            placeholder="@hotmail.com" aria-describedby="helId">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form label">Pregunta:</label>
                                        <textarea class="papregunta" name="pregunta" id="pregunta" cols="40"
                                            rows="4"></textarea>
                                    </div>
                                    <form action="procesar_datos.php" method="post">
                                        <center><label for="condiciones">Acepto los <a
                                                    href="../pdfsrecursos/TERMINOS Y CONDICIONES.pdf">términos y
                                                    condiciones</a></label><input type="checkbox" name="condiciones" />
                                        </center>
                                    </form><br>
                                    <button class="buttonT_Ermrd" id="enviarwasa" type="button">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Preguntas frecuentes-->
                    <div class="PregfRECUPu2">
                        <hr>
                        <h4 class="PreguntULP2" style="color: white;">Despeja tus inquietudes <a
                                href="../Preguntas-Frecuentes/preguntas.php" style="color: #fff;"><b> ->AQUÍ<- </b></a>
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
                        let condiciones = document.querySelector('input[name="condiciones"]:checked');

                        if (condiciones !== null) {
                            let url = "https://api.whatsapp.com/send?phone=593992648069&text=Nombres: %0A" + nombres +
                                "%0A%0ACorreo: %0A" +
                                correo + "%0A%0APregunta: %0A" + pregunta;
                            window.open(url);
                        } else {
                            alert("Por favor, acepte los términos y condiciones antes de enviar.");
                        }
                    }
                    </script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<footer>
    <iframe src="../piedepag/footer.php"></iframe>
</footer>
<script src="../encabezado/encabezado.js"></script>

</html>