//productos
  
if (document.getElementById("uno") != null) {
    
    document.getElementById("uno").addEventListener("click", function displayImg() {
        producto = document.getElementById('unohijo').src
        document.getElementById("image-product").src = producto;
    });
}

if (document.getElementById("dos") != null) {
    
    document.getElementById("dos").addEventListener("click", function displayImg() {
        producto = document.getElementById('doshijo').src
        document.getElementById("image-product").src = producto;
    });
}


if (document.getElementById("tres") != null) {
    
    document.getElementById("tres").addEventListener("click", function displayImg() {
        producto = document.getElementById('treshijo').src
        document.getElementById("image-product").src = producto;
    });
}

if (document.getElementById("cuatro") != null) {
    
    document.getElementById("cuatro").addEventListener("click", function displayImg() {
        producto = document.getElementById('cuatrohijo').src
        document.getElementById("image-product").src = producto;
    });
}


