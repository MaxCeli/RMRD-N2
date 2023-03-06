<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="popup.css">
    <title>inicio</title>
</head>

<body>
    <div class="modal-container" id="modal_container ">
        <div class="modal">
            <a href="../LandinPage/LandinP.php" class="equis">X</a>
            <div class="enc_pop">
                <img class="soloimgpop" src="img/logo.jpg" width="200px"><br><br>
            </div>
            <video autoplay loop controls src="../img/DIAGNOSTICO GRATIS COLEGIO/DIAGNOSTICO GRATIS COLEGIO.mp4"
                width="250px"></video>
            <p>
            <h2>Conoce nuestra metodología. <br>
                <font color="#1DA1F2">A</font>simila, <font color="#FF0000">A</font>prende, <font color="#25D366">A
                </font>plica
            </h2>
            </p><br>
            <p>
            <h2>Agenda tu diagnóstico GRATIS ahora </h2>
            </p>
            <!-- formulario  -->

            <form class="form-inicio">
                <label class="inst" for="">
                    <h5>Nombre y apellido</h5>
                </label>
                <input class="controls" type="text" name="nombres" id="nombres">
                <label class="inst" for="">
                    <h5>¿En qué institución estudias?</h5>
                </label>
                <input class="controls" type="text" name="cell" id="telf">
                <label class="inst" for="">
                    <h5>Ciudad</h5>
                </label>
                <input class="controls" type="text" name="dir" id="dir">

                <!-- botones  -->

                <button class="boton" id="enviarwasa" type="submit" style="width: 350px;"><a
                        href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"></a>Reserva
                    tu diagnostico gratis </a><img class="imgclc" src="../img/CLICK/CLICK/hacer-clic.png" alt=""
                        width="25px"></button>
                <div class="boton_group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="boton1"><a class="but_di" href="../recupopup/recupopup.php"
                            style="color: #FFF;">Recursos gratis <img
                                src="../img/Para los botones/RECURSOS GRATIS 3.png" alt="" style="width:20px;"></a>
                    </button>
                    <a href="https://api.whatsapp.com/send?phone=593992648069&app=facebook&entry_point=page_cta"
                        target="_blank" class="boton2" style="color: #FFF;">Asesor Académico &nbsp;&nbsp; <img
                            src="../piedepag/icon whatsapp.png" alt="" style="width:20px;"></a>
                </div>

            </form>
        </div>
    </div>
    <script>
    var botonwasa = document.querySelector("#enviarwasa");
    botonwasa.addEventListener("click", enviarwasa);

    function enviarwasa() {
        let nombres = document.querySelector("#nombres").value;
        let telf = document.querySelector("#telf").value;
        let dir = document.querySelector("#dir").value;
        let url = "https://api.whatsapp.com/send?phone=593992648069&text=Nombres %0A" + nombres +
            "%0A%0A¿En que institución estudia? %0A" + telf + "%0A%0ACuidad %0A" + dir;
        window.open(url);
    }
    </script>

</body>

</html>