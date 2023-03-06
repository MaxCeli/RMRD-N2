function validar() {
    var Respuesta=document.getElementById("respuesta1");
    if (Respuesta.value==0||
        Respuesta.value=="") {
        alert ("Seleccione una opcion");
        Respuesta.focus();
    }

}
function validar() {
    var Respuesta=document.getElementById("respuesta2");
    if (Respuesta.value==0||
        Respuesta.value=="") {
        alert ("Seleccione una opcion");
        Respuesta.focus();
    }
}
function validar() {
    var Respuesta=document.getElementById("respuesta3");
    if (Respuesta.value==0||
        Respuesta.value=="") {
        alert ("Seleccione una opcion");
        Respuesta.focus();
    }    else{
        let url = "../diagGratis/popupDG.php"
        window.open(url);
}
}