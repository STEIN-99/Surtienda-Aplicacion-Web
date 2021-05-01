function mostrarAyuda (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'pag/Iayuda.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenido').innerHTML = theObject.responseText;
        }

        theObject.send();
}
function mostrarProductos (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../tablas/productos.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
}
