function mostrarAyudaUsu (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'ayudaUsua.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidoUsua').innerHTML = theObject.responseText;
        }

        theObject.send();
}
function mostrarSucursalesUsu (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'SucursalesUsua.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidoUsua').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarProductosUsu (ID_MARCAS){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'SeleccionProductosUsua.php?ID_MARCAS='+ID_MARCAS, true);
        theObject.onreadystatechange = function() {
            document.getElementById('contenidoUsua').innerHTML = theObject.responseText;
        }

        theObject.send();
}