// /* Para recoger las funciones de validación */
// function validar() {
//     validarnombre();
//     validaremail();
//     validarcontra();
//     validarnumcelular();
//     validarnumcedula();
//     validarciudad();
//     validardireccion();
//     validarenqueinst();
//     validarsiesPuOPri();
//     validarNivel_a();
//     validarEscuela();
//     validarColegio();
//     validarUniversidad();
//     validaredad();
// }

// /* Funciones de validación */
// function validarnombre() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("nombre").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Ponga sus nombres completos por favor');
//         return false;
//     }
//     return true;
// }
// function validaremail() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("email").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Complete su email por favor');
//         return false;
//     }
//     return true;
// }
// function validarcontra() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("contra").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Complete su contraseña');
//         return false;
//     }
//     return true;
// }
// function validarnumcelular() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("num").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Complete su número de WhatsApp');
//         return false;
//     }
//     return true;
// }
// function validarnumcedula() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("numcedu").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Complete su número de cédula');
//         return false;
//     }
//     return true;
// }
// function validarciudad() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampoTexto = document.getElementById("vive").value;
//     //la condición
//     if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
//         alert('Complete la Ciudad');
//         return false;
//     }
//     return true;
// }
// function validardireccion() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo7 = document.getElementById("dire").value;
//     //la condición
//     if (miCampo7.length == 0 || /^\s+$/.test(miCampo7)) {
//         alert('Complete la dirección');
//         return false;
//     }
//     return true;
// }
// function validarenqueinst() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo8 = document.getElementById("inst").value;
//     //la condición
//     if (miCampo8.length == 0 || /^\s+$/.test(miCampo8)) {
//         alert('Complete el lugar en el que estudia actualmente');
//         return false;
//     }
//     return true;
// }

// function validarsiesPuOPri() {
//     var miCombo = document.getElementById("selecdeR").value;
//     if (miCombo == "") {
//         alert('Elije el tipo de Institución');
//         return false;
//     }
//     return true;
// }

// function validarNivel_a() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo9 = document.getElementById("selecdeS").value;
//     //la condición
//     if (miCampo9.length == 0 || /^\s+$/.test(miCampo9)) {
//         alert('Complete el nivel educativo');
//         return false;
//     }
//     return true;
// }
// function validarEscuela() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo9 = document.getElementById("selecdeS").value;
//     //la condición
//     if (miCampo9.length == 0 || /^\s+$/.test(miCampo9)) {
//         alert('Su seccion estudiantil');
//         return false;
//     }
//     return true;
// }
// function validarColegio() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo9 = document.getElementById("selecdeS").value;
//     //la condición
//     if (miCampo9.length == 0 || /^\s+$/.test(miCampo9)) {
//         alert('Su seccion estudiantil');
//         return false;
//     }
//     return true;
// }
// function validarUniversidad() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo9 = document.getElementById("selecdeS").value;
//     //la condición
//     if (miCampo9.length == 0 || /^\s+$/.test(miCampo9)) {
//         alert('Su seccion estudiantil');
//         return false;
//     }
//     return true;
// }
// function validaredad() {
//     //obteniendo el valor que se puso en el campo text del formulario
//     miCampo10 = document.getElementById("edad").value;
//     //la condición
//     if (miCampo10.length == 0 || /^\s+$/.test(miCampo10)) {
//         alert('Complete su edad');
//         return false;
//     } else {
//         swal({
//             title: "¡Te has registrado con exito!",
//             text: "Gracias por registrarte en nustra página",

//             buttons: {
//                 cancel: "Regresar a la página de Inicio",
//                 catch: {
//                     text: "Iniciar Sesión",
//                     value: "catch",
//                 },
//             },
//         })
//             .then((value) => {
//                 switch (value) {
//                     //este es para el de Inicio de Sesión
//                     case "catch":
//                         swal(window.location.href = '/Login/login.html');
//                         break;
//                     //este es para el de regresar a la página de Inicio 
//                     default:
//                         swal(window.location.href = '/LandinPage/LandinP.html');
//                 }
//             });
//     }
//     return true;
// }

// /* Funcion para validar solo los números */
// function solonumeros(e) {
//     key = e.keyCode || e.which;

//     teclado = String.fromCharCode(key);

//     numeros = "0123456789";

//     especiales = "8-37-38-46"

//     teclado_especial = false;

//     for (var i in especiales) {
//         if (key == especiales[i]) {
//             teclado_especial = true;
//         }
//     }

//     if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
//         return false;
//     }
// }

// /*validacion para la base de datos*/
// document.getElementById('formulario').addEventListener('submit', function(e) {
//     e.preventDefault();
//     let formulario = new FormData(document.getElementById('formulario'));
//     fetch('P-registro.php',{
//         method: 'POST',
//         body: formulario
//     })
//     .then(res=>res.json())
//     .then(data=>{
//         if(data == 'true'){
//             document.getElementById('nombre').value ='';
//             document.getElementById('email').value ='';
//             document.getElementById('contra').value ='';
//             document.getElementById('num').value ='';
//             document.getElementById('numcedu').value ='';
//             document.getElementById('vive').value ='';
//             document.getElementById('dire').value ='';
//             document.getElementById('inst').value ='';
//             document.getElementById('edad').value ='';
//         } else {
//             console.log(data);
//             swal({
//                 title: "¡Te has registrado con exito!",
//                 text: "Gracias por registrarte en nustra página",
    
//                 buttons: {
//                     cancel: "Regresar a la página de Inicio",
//                     catch: {
//                         text: "Iniciar Sesión",
//                         value: "catch",
//                     },
//                 },
//             })
//                 .then((value) => {
//                     switch (value) {
//                         //este es para el de Inicio de Sesión
//                         case "catch":
//                             swal(window.location.href = '/Login/login.html');
//                             break;
//                         //este es para el de regresar a la página de Inicio 
//                         default:
//                             swal(window.location.href = '/LandinPage/LandinP.html');
//                     }
//                 });
//         }
//         return true;
//     })
// });