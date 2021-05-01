///////////Mostrar y ocultar

function mostrarProductos (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../tablas/productos.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarVendedores (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../tablas/vendedor.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarClientes (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../tablas/clientes.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarSucursales(){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../tablas/sucursales.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
    }
