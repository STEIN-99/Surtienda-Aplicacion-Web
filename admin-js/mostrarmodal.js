function modal (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', '../modals/Fclientes.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('Tablas').innerHTML = theObject.responseText;
        }

        theObject.send();
}