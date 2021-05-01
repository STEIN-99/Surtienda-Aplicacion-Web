
var xhr;



function enviarDatos(){
	var coloniav = document.getElementById('coloniav').value;
	var municipiov = document.getElementById('municipiov').value;
	var Nombre = document.getElementById('Nombre').value;
	var RfC = document.getElementById('RfC').value;
	var ApellidoMaterno = document.getElementById('ApellidoMaterno').value;
	var ApellidoPaterno = document.getElementById('ApellidoPaterno').value;
	var Telefono = document.getElementById('Telefono').value;
		var Direccion = document.getElementById('Direccion').value;
	var nac =document.getElementById('nac').value;


	xhr = creaObjetoXMLHttpRequest();
	/*onreadystatechange es una propiedad del objeto xhr que almacena el nombre de la
	funcion que se ejecutara cuando, tras haber llamado al metodo send, el objeto XMLHttpRequest cambie de estado*/

	xhr.onreadystatechange = procesarRespuesta;
	//open inicializa una petición HTTP.
	xhr.open('POST', 'AgregarVendedor.php');
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	xhr.send('coloniav='+coloniav+
					 '&municipiov='+municipiov+
					 '&Nombre='+Nombre+
					 '&RfC='+RfC+
				   '&ApellidoMaterno='+ApellidoMaterno+
					 '&ApellidoPaterno='+ApellidoPaterno+
					 '&Telefono='+Telefono+
					 '&Direccion='+Direccion+
					 '&nac='+nac);

}

function creaObjetoXMLHttpRequest(){
	xhr = new XMLHttpRequest();
	return xhr;
}

function procesarRespuesta(){
	/*responseText Almacena el string devuelto por el servidor tras haber hecho una petición*/
var respuesta= xhr.responseText;
if (respuesta==1) {
	sweetAlert("Registrado con exito");
	$('#Vendedores').load('../Tablas/Vendedores.php');
// }else if (respuesta==2) {
// 	header("location: ../Administrador/Vendedores.php");
//
}

}
