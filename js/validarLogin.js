var formulario = document.getElementById('form');
var usuario = document.getElementById("usuario");
var pass = document.getElementById("pass");
formulario.addEventListener('submit', function (e){
    e.preventDefault();

    if(usuario.value.length == "" ||pass.value.length == ""){
        alert("Todos los campos deben se ser validados");
        return false;
    }if(usuario.value.length >32){
        alert("El usuario contiene demasiados caracteres");
        return false;
    }
    if(pass.value.length >32){
        alert("La contraseña contiene demasiados caracteres");
        return false;
    }
    if(usuario.value.length <4){
        alert("El usuario no debe ser menor a 4 caracteres");
        return false;
    }
    if(pass.value.length <4){
        alert("La contraseña no debe ser menor a 4 caracteres");
        return false;
    }enviarform()
});

function enviarform(){
    var form = document.getElementById('form');
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../funciones/ValidarSesion.php', true);
    var formData = new FormData(form);
    var eliminar = confirm("Bienvenido, pulse aceptar para continuar")
    if ( eliminar ) {
    xhr.addEventListener('load', e =>{
        if (e.target.readyState == 4 && e.target.status == 200) {
            if (e.target.response == 'admin') {
                location.href = '../pag/Administrador.php';

            }else if(e.target.response == 'usua') {
            
                location.href = '../pag/Usuario.php';

            }else{

                alert("Contraseña o Usuario no son validos");
            }
        }
    })
}
    xhr.send(formData);
}
