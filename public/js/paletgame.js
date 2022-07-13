
/**
 * @param JUEGO_PALETSTILO
 * 
 * CONSISTE EN CAMBIAR LOS COLORES DE LAS PALETAS Y LOS COJINES PARA 
 * CREAR TU PROPIO PALETSTILO PERSONALIZADO
 */

// let escuchando = document.querySelector('a') 
// console.log(escuchando)

    //tapiz
    document.getElementById("cojin-rojo-burdeo.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-rojo-burdeo.png').id
        url =  "../img/paletgame/"
        // document.getElementById("cojin-rojo-burdeo.png").attribute.class = 
        document.getElementById("cojin").src = url + colorCojin;
    });
    document.getElementById("cojin-azul.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-azul.png').id
        url =  '../img/paletgame/'
        document.getElementById("cojin").src = url + colorCojin;
    });
    document.getElementById("cojin-amarillo.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-amarillo.png').id
        url =  '../img/paletgame/'
        document.getElementById("cojin").src = url + colorCojin;
    });
    document.getElementById("cojin-rojo.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-rojo.png').id
        url =  '../../img/paletgame/'
        document.getElementById("cojin").src = url + colorCojin;
    });
    /*document.getElementById("cojin-blanco.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-blanco.png').id
        url =  '../img/paletgame/'
        document.getElementById("cojin").src = url + colorCojin;
    });
    document.getElementById("cojin-rojo.png").addEventListener("click", function displayImg() {
        colorCojin = document.getElementById('cojin-rojo.png').id
        url =  '../img/paletgame/'
        document.getElementById("cojin").src = url + colorCojin;
    });*/


    //paletas

    document.getElementById("paleta-roble-oscuro.png").addEventListener("click", function displayImg() {
        colorPaleta = document.getElementById('paleta-roble-oscuro.png').id
        url =  './img/paletgame/'
        document.getElementById("paleta").src = url + colorPaleta;
    });


    





// CODIGO PARA CAMBIA IMAGENES
// document.getElementById("myImage").src = "landscape.jpg";