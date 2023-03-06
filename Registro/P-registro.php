<?php
 if(!empty($_POST))
  {
   $alert='';
    if(empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contra']) ||
    empty($_POST['num']) || empty($_POST['numcedu']) || empty($_POST['vive']) ||
    empty($_POST['dire']) || empty($_POST['inst']) || empty($_POST['prueba']) || 
    empty($_POST['Gdosm']) || empty($_POST['edad']))
   {
     $alert='<p class="msg_error">Todos los campos son obligatorios</p>';
 } else{
  require "../Login/conexion.php";
    $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $contra = $_POST['contra'];
    $numcel = $_POST['num'];
   $numcedu = $_POST['numcedu'];
    $dvive = $_POST['vive'];
    $dire = $_POST['dire'];
    $insti = $_POST['inst'];
    $prueba = $_POST['prueba'];
    $Gdosm = $_POST['Gdosm'];
   $edad = $_POST['edad'];

    $query = mysqli_query($conexion," SELECT * FROM visitas WHERE email = '$email' OR clave = '$contra'");
   $result = mysqli_fetch_array($query);

   if($result > 0){
     $alert='<p class="msg_error">El correo o usuario ya existe</p>';
    }else{

      $query_insert=mysqli_query($conexion,"INSERT INTO visitas(nombre,email,clave,NWhatss,NCedula,Ciudad,direccion,LugDeestudios,TipoIntitucion,GradoSemestre,edad)
                                            VALUES('$nombre','$email','$contra','$numcel','$numcedu','$dvive','$dire','$insti','$prueba','$Gdosm','$edad')");
    
      if($query_insert){
        $alert='<p class="msg_save">Usuario registrado correctamente</p>';
     }else{
        $alert='<p class="msg_error">Error al crear el usuario</p>';
      }
    }
  }
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../LandinPage/LandingP.css">
    <link rel="stylesheet" href="../encabezado/encabezado.css">
    <link rel="stylesheet" href="../Registro/estilopr.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/23209197.js"></script>
    <!-- End of HubSpot Embed Code -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

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
    <div class="pacellderegis"></div>

    <!--formulario-->
    <br>
    <div class="contenedorparaR" style="margin-top: 10%;">
        <br>
        <center>
            <div class="alertphp" style="color: #FFF; font-zise: 30px; font-family:Poppins;">
                <?php echo isset($alert) ? $alert: ' ' ;?></div>
        </center>
        <!-- Frase para el registro -->
        <header class="frasederegistro">
            <center>
                <h2>Recuerda que al registrarte puedes acceder a recursos gratis del Instituto como: clases
                    demostrativas gratis, formularios, ejercicios resueltos, entre otros recursos totalmente gratis.
                </h2>
            </center>
        </header>
        <br>
        <!-- Contenedor del video y del Formulario de registro -->
        <div class="container1">
            <div class="row">
                <div class="col">
                    <video src="imgR/pexels-karolina-grabowska-6272020.mp4" muted autoplay loop class="imgr1"></video>
                </div>
                <div class="col">
                    <div class="contenidodeFdelR">
                        <form name="formulariopaR" method="POST" id="formulario" class="formulariopaR"
                            action="P-registro.php">
                            <br>
                            <p>
                            <h4>Nombres completos:</h4>
                            </p>
                            <label for="nombre" class="form-label"></label>
                            <input type="text" class="form-control sinb" name="nombre" id="nombre">
                            <p>
                            <h4>Email:</h4>
                            </p>
                            <label for="email" class="form-label"></label>
                            <input type="email" class="form-control sinb" name="email" id="email">
                            <p>
                            <h4>Contraseña:</h4>
                            </p>
                            <label for="contra" class="form-label"></label>
                            <input type="password" class="form-control sinb" name="contra" id="contra">
                            <p>
                            <h4>Número de WhatsApp:</h4>
                            </p>
                            <label for="num" class="form-label"></label>
                            <input maxlength="10" type="tel" class="form-control sinb" name="num" id="num"
                                onkeypress="return solonumeros(event)" onpaste="return false">
                            <p>
                            <h4>Número de cédula:</h4>
                            </p>
                            <label for="numcedu" class="form-label"></label>
                            <input maxlength="10" type="text" class="form-control sinb" name="numcedu" id="numcedu"
                                onkeypress="return solonumeros(event)" onpaste="return false">

                            <p>
                            <h4>Ciudad:</h4>
                            </p>
                            <label for="vive" class="form-label"></label>
                            <input type="text" class="form-control sinb" name="vive" id="vive">

                            <p>
                            <h4>Dirección:</h4>
                            </p>
                            <label for="dire" class="form-label"></label>
                            <input type="text" class="form-control sinb" name="dire" id="dire">

                            <p>
                            <h4>Lugar en el que estudia actualmente:</h4>
                            </p>
                            <label for="insti" class="form-label"></label>
                            <input type="text" class="form-control sinb" name="inst" id="inst">
                            <br>
                            <div class="paunir2enR">
                                <select class="form-select2" id="selecdeR" name="prueba">
                                    <option disabled selected value="">Tipo de institución:</option>
                                    <option value="Publica">Pública</option>
                                    <option value="Privada">privada</option>
                                </select>

                                <div class="form-floating">
                                    <select class="form-select2" id="selecdeS" name="sellist">
                                        <option disabled selected>Sección:</option>
                                        <option value="Manana">Mañana</option>
                                        <option value="Tarde">Tarde</option>
                                        <option value="Noche">Noche</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <h4>Grado o semestre:</h4>
                            <div class="paunir2enR">
                                <div class="form-floating">
                                    <select class="form-select2" id="selecdeE" name="Gdosm">
                                        <option disabled selected>Escuela:</option>
                                        <option value="4B">4to de básica</option>
                                        <option value="5B">5to de básica</option>
                                        <option value="6B">6to de básica</option>
                                        <option value="7B">7mo de básica</option>
                                    </select>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select2" id="selcole" name="Gdosm">
                                        <option disabled selected>Colegio:</option>
                                        <option value="8B">8vo de básica</option>
                                        <option value="9B">9no de básica</option>
                                        <option value="10B">10mo de básica</option>
                                        <option value="1BTO">1ro de Bachillerato</option>
                                        <option value="2BTO">2do de Bachillerato</option>
                                        <option value="3BTO">3ro de Bachillerato</option>
                                    </select>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select2" id="seluni" name="Gdosm">
                                        <option disabled selected>Universidad:</option>
                                        <option value="1se">1er semestre</option>
                                        <option value="2se">2do semestre</option>
                                        <option value="3se">3er semestre</option>
                                        <option value="4se">4to semestre</option>
                                        <option value="5se">5to semestre</option>
                                        <option value="6se">6to semestre</option>
                                        <option value="7se">7mo semestre</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <p>
                            <h4>Edad:</h4>
                            </p>
                            <label for="edad" class="form-label"></label>
                            <input maxlength="2" type="text" class="form-control sinb" name="edad" id="edad">

                            <center>
                                <!-- Enlaces y el botón -->
                                <div class="envi_2">
                                    <br>
                                    <a href="../LandinPage/LandinP.php" class="miw">Cerrar</a> 
                                    <a href="../Login/login.php" class="asacdeR">Ya tengo una cuenta</a>
                                    <br><br>
                                    <input type="submit" value="Registrarse" class="enviado">
                            </center>
                        </form>
                        <br>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    </div>
    <br>
    <script src="P-registro.js"></script>
    <a href="../Login/login.php"></a>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<script src="../encabezado/encabezado.js"></script>

</html>