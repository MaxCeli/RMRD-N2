/*Buscador*/
//Ejecución de funciones
document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("icono-x").addEventListener("click", ocultar_buscador);

//variables
bars_search = document.getElementById("ctn-bars-search");
cover_ctn_search = document.getElementById("cover-ctn-search");
inputSearch = document.getElementById("input-Search");
box_search = document.getElementById("box-search");
icono_X = document.getElementById("icono-x")

//funciones para:
//mostrar buscador
function mostrar_buscador(){
    if (window.innerWidth < 480) { // Si el ancho de la ventana es menor a 480px
        bars_search.style.top = "160px"; // Cambiar el valor de top a 160px
    } else if (window.innerWidth < 969) { // Si el ancho de la ventana es menor a 969px
        bars_search.style.top = "200px"; // Cambiar el valor de top a 320px
    } else { // Si el ancho de la ventana es mayor a 970px
        bars_search.style.top = "80px"; // Cambiar el valor de top a 80px
    }
    cover_ctn_search.style.display = "block";
    inputSearch.focus();

    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }
}
 //ocultar buscador
function ocultar_buscador(){
    if (window.innerWidth < 768) { // Si el ancho de la ventana es menor a 768px
        bars_search.style.top = "-10px"; // Cambiar el valor de top a -10px
    } else {
        bars_search.style.top = "-80px"; // Mantener el valor de top en -80px
    }
    cover_ctn_search.style.display = "none";
    inputSearch.value ="";
    box_search.style.display = "none";
}
//filtrado de busqueda
document.getElementById("input-Search").addEventListener("keyup", buscador_interno);

function buscador_interno(){

    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }

        }else{
            li[i].style.display = "none";
        }

    }

}

//Para el modo de celular y que aparezca las opciones de navegación 
document.addEventListener('DOMContentLoaded', () => {
    const input = document.querySelector('#check');
    const navContainer = document.querySelector('.nav-container');
    
    input.addEventListener('click', () => {
        if (navContainer.style.left === '0px') {
            navContainer.style.left = '-120%';
        } else {
            navContainer.style.left = '0px';
        }
    });
});