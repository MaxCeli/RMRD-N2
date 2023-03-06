<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3preguntas</title>
    <link rel="stylesheet" href="preguntas.css">
    <link rel="stylesheet" href="http://localhost/PUBLIC_HTML/3_preguntas/preguntas.css">
    <meta name="viewport” content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <!--Preguntas-->
<div class="cont3preguntas">
    <div class="modalpopup" id="modalrmrd">
        <div class="container">
            <header>
                <center>
                <h2>¿Cómo está el estudiante en sus conocimientos académicos?</h2>
            </center>
            </header>
            <label ><a href="../LandinPage/LandinP.php">X</a></label>
            <br>
            <div class="contenido">
                <form action="" name="formulario" id="formulario">
                    <p>
                    <h3 style="color: #FF0000">¿El estudiante tiene problemas en atender al profesor?</h3>
                    </p>
                    <div class="form-floating">
                        <select class="form-select" id="Respuesta1" name="respuesta1" required>
                            <option value="0">Respuesta:</option>
                            <option value="1">Si</option>
                            <option value="2">Aveces</option>
                            <option value="3">No</option>
                        </select>
                    </div>
                    <p>
                    <h3 style="color:#1DA1F2">¿No puede realizar los deberes en casa solo?</h3>
                    </p>
                    <div class="form-floating">
                        <select class="form-select" id="respuesta2" name="respuesta2" required>
                            <option value="0">Respuesta:</option>
                            <option value="1">Si</option>
                            <option value="2">Aveces</option>
                            <option value="3">No</option>
                        </select>
                    </div>
                    <p>
                    <h3 style="color:#25D366">¿Tiene bajo rendimiento en pruebas,lecciones y examenes?</h3>
                    </p>
                    <div class="form-floating">
                        <select class="form-select" id="respuesta3" name="respuesta3" required>
                            <option value="0">Respuesta:</option>
                            <option value="1">Si</option>
                            <option value="2">Aveces</option>
                            <option value="3">No</option>
                        </select>
                    </div>
                    <br><br>
                    <center>
                    <input type="submit" onclick="validar();" value="Enviar" class="enviado">
                    </center>
                </form>
                <a href="https://api.whatsapp.com/send?phone=593992648069" id="RMRD"></a>
            </div>
            <br>
             <!--Pie de pagina-->
            <footer>
                <div class="piepagina">
                    <h3 class="pie">Encuentranos en redes sociales:
                        <a href="https://www.facebook.com/InstitutodEnsenanzaContinua" target="_blank"><img
                                src="../diagGratis/img/facebook.png" alt="" class="icono"></a>
                        <a href="https://www.facebook.com/messages/t/103757645603975/"><img src="../diagGratis/img/mensajero.png" alt="" class="icono"></a>
                        <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta" target="_blank"><img
                                src="../diagGratis/img/whatsapp.png" alt="" class="icono"></a>
                        <a href="https://www.instagram.com/iecaaa2021/" target="_blank"><img src="../diagGratis/img/instagram.png" alt=""
                                class="icono"></a>
                        <a href="https://www.youtube.com/c/INSTITUTODEENSE%C3%91ANZACONTINUA" target="_blank"><img
                                src="../diagGratis/img/youtube.png" alt="" class="icono"></a>
                        <a href="https://twitter.com/iecaaa2021" target="_blank"><img src="../diagGratis/img/gorjeo.png" alt=""
                                class="icono"></a>
                        <a href="https://www.tiktok.com/@instituto_enza_continua" target="_blank"><img src="../diagGratis/img/tik-tok.png"
                                alt="" class="icono"></a>
                    </h3>
                </div>
            </footer>
            <script src="preguntas.js">
            </script>
        </div>
    </div>
</div>
</body>
</html>