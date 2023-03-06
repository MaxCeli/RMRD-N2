<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico Gratis</title>
    <link rel="stylesheet" href="popupDG.css">
</head>

<body>
    <div class="modalrmrd369" id="modalrmrd">
        <div class="containerpaDG">
            <!-- Logo de empresa, el borde negro y para cerrar(X) -->
            <img src="img/Logo empresa2.jpeg" alt="" width="590px" height="170px" class="logo">
            <header>
                <h2 class="agendaesta">Agenda un diagnóstico personalizado por materia aquí:</h2>
            </header>
            <label><a href="../LandinPage/LandinP.php">X</a></label>
            <br>
            <!-- Para el contenedor del formulario y el formulario -->
            <div class="contenido">
                <form name="formulario" id="formulario" onsubmit="return validar()">
                    <br>
                    <h3>En que institución esta el estudiante:</h3>
                    <input type="text" required class="sinb" name="insti" id="insti">
                    <br><br>
                    <div class="payasabespe">
                        <div class="form-floating">
                            <select class="form-select" id="sel1" name="sellist">
                                <option disabled selected>Tipo de institución:</option>
                                <option>Pública</option>
                                <option>Privada</option>
                            </select>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="sel4" name="sellist">
                                <option disabled selected>Sección:</option>
                                <option>Mañana</option>
                                <option>Tarde</option>
                                <option>Noche</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h3>En que materias necesita nivelación:</h3>
                    <input type="text" class="sinb" name="materia" id="materia" required>
                    <br><br>
                    <h3>Grado o semestre:</h3>
                    <div class="paunirenDG">
                        <div class="form-floating">
                            <select class="form-select" id="sel3" name="sellist">
                                <option disabled selected>Escuela:</option>
                                <option>4to de básica</option>
                                <option>5to de básica</option>
                                <option>6to de básica</option>
                                <option>7mo de básica</option>
                            </select>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="selcole" name="sellist">
                                <option disabled selected>Colegio:</option>
                                <option>8vo de básica</option>
                                <option>9no de básica</option>
                                <option>10mo de básica</option>
                                <option>1ro de Bachillerato</option>
                                <option>2do de Bachillerato</option>
                                <option>3ro de Bachillerato</option>
                            </select>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="seluni" name="sellist">
                                <option disabled selected>Universidad:</option>
                                <option>1er semestre</option>
                                <option>2do semestre</option>
                                <option>3er semestre</option>
                                <option>4to semestre</option>
                                <option>5to semestre</option>
                                <option>6to semestre</option>
                                <option>7mo semestre</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h3>Ciudad:</h3>
                    <div class="payasabespe">
                        <input type="text" class="sinb2" name="ubicacion" id="ubicacion" required>
                        <div class="form-floating">
                            <select class="form-select" id="selsecresi" name="sellist">
                                <option disabled selected>Sector de residencia:</option>
                                <option>Sur</option>
                                <option>Norte</option>
                                <option>Centro</option>
                                <option>Valle</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h3>Nombre del representante:</h3>
                    <input type="text" class="sinb" name="repre" id="repre" required>
                    <br><br>
                    <h3>Nombre del estudiante:</h3>
                    <input type="text" class="sinb" name="estudiante" id="estudiante" required>
                    <br><br>
                    <div class="form-floating">
                        <select class="form-select" id="sel2" name="sellist">
                            <option disabled selected>Modalidad:</option>
                            <option>Presencial</option>
                            <option>Virtual</option>
                        </select>
                    </div>
                    <center>
                        <!-- Los botones: el de enviar y los 2 de WhatsApp -->
                        <br>
                        <input type="submit" value="Reserva un Diagnóstico Gratis" id="vali" class="enviado"><img
                            src="../img/CLICK/CLICK/hacer-clic.png" width="50px" class="pamovicon">
                        <br>
                        <div class="pamovendew">
                            <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                                class="miw" target="_blank">Mas información al WhatsApp <img
                                    src="../diagGratis/img/icon whatsapp.png" alt=""></a> <a
                                href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                                class="asacrmrd" target="_blank">Asesor Académico <img
                                    src="../diagGratis/img/icon whatsapp.png" alt=""></a>
                        </div>
                    </center>
                </form>
            </div>
            <br>
            <!-- Las redes sociales -->
            <footer>
                <div class="piepagina">
                    <h3 class="pie">Encuentranos en redes sociales:
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
                        <a href="https://twitter.com/iecaaa2021" target="_blank"><img src="../diagGratis/img/gorjeo.png"
                                alt="" class="icono"></a>
                        <a href="https://www.tiktok.com/@instituto_enza_continua" target="_blank"><img
                                src="../diagGratis/img/tik-tok.png" alt="" class="icono"></a>
                    </h3>
                </div>
            </footer>
        </div>
    </div>
    <!-- Para enviar el formulario con los datos que llene la persona -->
    <script>
    var botonwasa = document.querySelector('#vali');

    botonwasa.addEventListener('click', Enviarmensaje);

    function Enviarmensaje() {

        let representante = document.querySelector('#repre').value;
        let estudiante = document.querySelector('#estudiante').value;
        let esta = document.querySelector('#insti').value;
        let institucion = document.querySelector('#sel1').value;
        let materia = document.querySelector('#materia').value;
        let escuela = document.querySelector('#sel3').value;
        let colegio = document.querySelector('#selcole').value;
        let uni = document.querySelector('#seluni').value;
        let seccion = document.querySelector('#sel4').value;
        let ubicacion = document.querySelector('#ubicacion').value;
        let sector = document.querySelector('#selsecresi').value;
        let clases = document.querySelector('#sel2').value;

        let url = "https://api.whatsapp.com/send?phone=593992648069&text=Nombre del representante: %0A" +
            representante +
            "%0A%0AEstudiante: %0A" + estudiante +
            "%0A%0AInstitución en la que estudia: %0A" + esta +
            "%0A%0ALa institución es: %0A" + institucion +
            "%0A%0AEn que jornada está: %0A" + seccion +
            "%0A%0AEn que materia necesita nivelación: %0A" + materia +
            "%0A%0AGrado o semestre: %0A" + escuela +
            "%0A%0AGrado o semestre: %0A" + colegio +
            "%0A%0AGrado o semestre: %0A" + uni +
            "%0A%0AUbicación: %0A" + ubicacion +
            "%0A%0ASector: %0A" + sector +
            "%0A%0AModalidad: %0A" + clases;
        window.open(url);
    }
    </script>
</body>

</html>