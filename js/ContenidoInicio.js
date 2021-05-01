///////////////////////Secciones de inicio//////////////////////////////////////////////////////

function mostrarAyuda (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'pag/Iayuda.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenido').innerHTML = theObject.responseText;
        }

        theObject.send();
}
function mostrarSucursales (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'pag/sucursales.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenido').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarProductos (ID_MARCAS){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'pag/SeleccionProductos.php?ID_MARCAS='+ID_MARCAS, true);
        theObject.onreadystatechange = function() {
            document.getElementById('contenido').innerHTML = theObject.responseText;
        }

        theObject.send();
}

///////////////////////Eventos de mouse//////////////////////////////////////////////////////

function Mostrarinfo() 
{
    alert("necesita registrarte para iniciar sesion")   
}

function Mostrarcate() 
{
    alert("Si deseas ver nuestros productos por su marca seleccione los recuadros amarillos con un solo click")   
}

function newimg() {
    document.getElementById('logo').src="img/Slider/slider4.jpg";
}

function vimg() {
    document.getElementById('logo').src="img/Slider/slider2.jpg";
}