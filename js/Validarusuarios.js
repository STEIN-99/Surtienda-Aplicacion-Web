var formulario = document.getElementById('form');
var nombre = document.getElementById("cliente");
var Apaterno = document.getElementById("Apaterno");
var Amaterno = document.getElementById("Amaterno");
var Nombrel = document.getElementById("Nombrel");
var NombreU = document.getElementById("NombreU");
var pass = document.getElementById("pass");
var Tel = document.getElementById("Tel");
var direcc = document.getElementById("direcc");


formulario.addEventListener('submit', function (e){
    e.preventDefault();

    if(nombre.value.length == "" || Apaterno.value.length == "" || Amaterno.value.length == "" || Nombrel.value.length == "" || NombreU.value.length == "" || pass.value.length == "" || Tel.value.length == "" || direcc.value.length == ""){
        alert("Todos los campos deben se ser validados");
        return false;
    }
    if(nombre.value.length >32){
        alert("El nombre contiene demasiados caracteres");
        return false;
    }
    if(Apaterno.value.length >32){
        alert("El apellido paterno contiene demasiados caracteres");
        return false;
    }
    if(Amaterno.value.length >32){
        alert("El apellido materno contiene demasiados caracteres");
        return false;
    }
    if(pass.value.length <4){
        alert("La contraseña no debe ser menor a 4 caracteres");
        return false;
    }
    if(Tel.value.length >10){
        alert("El numero de telefono no debe de contener mas de 10 digitos");
        return false;
    }
    if(direcc.value.length >80){
        alert("Por favor usar abreviatura al momento de registrar su direccion");
        return false;
    }

        var dato = new FormData(formulario);

    fetch('../funciones/AgregarCliente.php',{
        method: 'POST',
        body: dato, 
    })
    location.href ="../formularios/Login.html";
})