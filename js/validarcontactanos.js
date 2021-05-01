var formulario = document.getElementById('form');
var correo = document.getElementById("correo");
var mensaje = document.getElementById("mensaje");


formulario.addEventListener('submit', function (e){
    e.preventDefault();

    if(correo.value.length == "" || mensaje.value.length == ""){
        alert("Todos los campos deben se ser validados");
        return false;
    }
    if(correo.value.length >52){
        alert("El correo contiene demasiados caracteres");
        return false;
    }
    if(correo.value.length <4){
        alert("El correo no debe ser menor a 4 caracteres");
        return false;
    }

    if(mensaje.value.length <54){
        alert("La mensaje no debe ser menor a 4 caracteres");
        return false;
    }

        var dato = new FormData(formulario);

    fetch('funciones/enviar.php',{
        method: 'POST',
        body: dato, 
    })
    alert("El mensaje se envió correctamente");
    location.href ="Index.php"; 
})