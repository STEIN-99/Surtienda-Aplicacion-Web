function validar (){

        var usuario = document.getElementById('usuario').value;
        var contraseña = document.getElementById('contraseña').value;


        if (usuario === "" || contraseña ===""){
          sweetAlert("Error","Los campos no deben de estar vacios","error");
          return false;
        }


        // if (contraseña === "") {
        //   sweetAlert("Error","Debes ingresar una contraseña","error");
        //   return false;
        // }




}
