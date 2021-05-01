function camposvacios1() {
var formulario = document.getElementById('form');
var usuario = document.getElementById("usuario");
var pass = document.getElementById("pass");
formulario.addEventListener('submit', function (e){
    e.preventDefault();

    if(usuario.value.length == "" ||pass.value.length == ""){
       window.alert("Todos los campos deben se ser validados");
        return false;
    }if(usuario.value.length >32){
        window.alert("El usuario contiene demasiados caracteres");
        return false;
    }
    if(pass.value.length >32){
        window.alert("La contraseña contiene demasiados caracteres");
        return false;
    }
    if(usuario.value.length <4){
        window.alert("El usuario no debe ser menor a 4 caracteres");
        return false;
    }
    if(pass.value.length <4){
        window.alert("La contraseña no debe ser menor a 4 caracteres");
        return false;
    }enviarform()
});

}